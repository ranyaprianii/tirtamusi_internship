<?php

namespace App\Http\Controllers;

use App\Models\Apprentince;
use Illuminate\Http\Request;
use App\Models\InternshipScore;
use Illuminate\Contracts\Encryption\DecryptException;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class InternshipScoreController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        if (Auth::user()->hasRole('Siswa/Mahasiswa')) {
            $user_id = Auth::user()->id;
            $apprentince = Apprentince::where('user_id', $user_id)->first();
            $apprentince_id = $apprentince->id;

            $data = InternshipScore::where('apprentince_id', $apprentince_id)->first();
            return view('internship_scores.index', compact('data'));
        } else {
            return view('internship_scores.index');
        }
    }

    public function datatable()
    {
        $model = InternshipScore::query();
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $dateformat = Carbon::parse($data['created_at'])->translatedFormat('d F Y - H:i');
                return $dateformat;
            })
            ->addColumn('apprentince_name', function ($data) {
                return $data->apprentince->name;
            })
            ->addColumn('action', function ($data) {
                $url_show = route('internship_score.show', Crypt::encrypt($data->id));
                $url_edit = route('internship_score.edit', Crypt::encrypt($data->id));
                $url_delete = route('internship_score.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                if (Auth::user()->hasRole('Manager')) {
                    $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                    $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                }
                $btn .= "</div>";

                return $btn;
            })
            ->toJson();
    }

    public function create()
    {
        $apprentinces = Apprentince::whereNull('sertificate')->get();
        return view('internship_scores.create', compact('apprentinces'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = InternshipScore::find($id);

        return view('internship_scores.edit', compact('data'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = InternshipScore::find($id);

        return view('internship_scores.show', compact('data'));
    }

    // public function show($id)
    // {
    //     try {
    //         $decryptedId = Crypt::decrypt($id);
    //         $data = InternshipScore::find($decryptedId);

    //         if (!$data) {
    //             // Handle jika data tidak ditemukan
    //             return redirect()->back()->with('error', 'Data not found');
    //         }

    //         return view('internship_scores.show', compact('data'));
    //     } catch (DecryptException $e) {
    //         // Handle jika terjadi kesalahan dekripsi
    //         return redirect()->back()->with('error', 'Invalid payload');
    //     }
    // }



    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'apprentince_id' => 'required',
                'discipline_score' => 'required',
                'teamwork_score' => 'required',
                'initiative_score' => 'required',
                'diligent_score' => 'required',
                'responsibility_score' => 'required',
                'attitude_score' => 'required',
                'performance_score' => 'required',
            ]);

            $apprentince_id = Crypt::decrypt($request->apprentince_id);
            $check_apprentince = InternshipScore::where('apprentince_id', $apprentince_id)->first();

            // Calculate Score
            $discipline_score = $request->discipline_score;
            $teamwork_score = $request->teamwork_score;
            $initiative_score = $request->initiative_score;
            $diligent_score = $request->diligent_score;
            $responsibility_score = $request->responsibility_score;
            $attitude_score = $request->attitude_score;
            $performance_score = $request->performance_score;

            $total_score = $discipline_score + $teamwork_score + $initiative_score + $diligent_score + $responsibility_score + $attitude_score + $performance_score;
            $average_score = $total_score / 7;

            //Predikat
            if ($average_score >= 8.5 && $average_score <= 10) {
                $predicate = InternshipScore::PREDICATE_STATUS_A;
            } else if ($average_score >= 7.5 && $average_score <= 8.4) {
                $predicate = InternshipScore::PREDICATE_STATUS_B;
            } else if ($average_score >= 5.5 && $average_score <= 7.4) {
                $predicate = InternshipScore::PREDICATE_STATUS_C;
            } else if ($average_score >= 3.5 && $average_score <= 5.4) {
                $predicate = InternshipScore::PREDICATE_STATUS_D;
            } else if ($average_score >= 1.0 && $average_score <= 3.4) {
                $predicate = InternshipScore::PREDICATE_STATUS_E;
            }

            //Keterangan
            if ($average_score >= 8.5 && $average_score <= 10) {
                $description = InternshipScore::DESCRIPTION_STATUS_A;
            } else if ($average_score >= 7.5 && $average_score <= 8.4) {
                $description = InternshipScore::DESCRIPTION_STATUS_B;
            } else if ($average_score >= 5.5 && $average_score <= 7.4) {
                $description = InternshipScore::DESCRIPTION_STATUS_C;
            } else if ($average_score >= 3.5 && $average_score <= 5.4) {
                $description = InternshipScore::DESCRIPTION_STATUS_D;
            } else if ($average_score >= 1.0 && $average_score <= 3.4) {
                $description = InternshipScore::DESCRIPTION_STATUS_E;
            }

            // Create Data
            if ($check_apprentince) {
                // If Data Error
                DB::rollBack();

                // Alert & Redirect
                Alert::toast('Data Penilaian Sudah Ada!', 'error');
                return redirect()->back();
            } else {
                $internship_score = new InternshipScore();
                $internship_score->apprentince_id =  $apprentince_id;
                $internship_score->discipline_score = $discipline_score;
                $internship_score->teamwork_score = $teamwork_score;
                $internship_score->initiative_score = $initiative_score;
                $internship_score->diligent_score = $diligent_score;
                $internship_score->responsibility_score = $responsibility_score;
                $internship_score->attitude_score = $attitude_score;
                $internship_score->performance_score = $performance_score;
                $internship_score->total_score = $total_score;
                $internship_score->average_score = $average_score;
                $internship_score->predicate = $predicate;
                $internship_score->description = $description;
                $internship_score->save();

                // Save Data
                DB::commit();

                // Alert & Redirect
                Alert::toast('Data Berhasil Disimpan', 'success');
                return redirect()->route('internship_score.index');
            }
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'discipline_score' => 'required',
                'teamwork_score' => 'required',
                'initiative_score' => 'required',
                'diligent_score' => 'required',
                'responsibility_score' => 'required',
                'attitude_score' => 'required',
                'performance_score' => 'required',
            ]);

            $id = Crypt::decrypt($id);

            // Calculate Score
            $discipline_score = $request->discipline_score;
            $teamwork_score = $request->teamwork_score;
            $initiative_score = $request->initiative_score;
            $diligent_score = $request->diligent_score;
            $responsibility_score = $request->responsibility_score;
            $attitude_score = $request->attitude_score;
            $performance_score = $request->performance_score;

            $total_score = $discipline_score + $teamwork_score + $initiative_score + $diligent_score + $responsibility_score + $attitude_score + $performance_score;
            $average_score = $total_score / 7;

            //Predikat
            if ($average_score >= 8.5 && $average_score <= 10) {
                $predicate = InternshipScore::PREDICATE_STATUS_A;
            } else if ($average_score >= 7.5 && $average_score <= 8.4) {
                $predicate = InternshipScore::PREDICATE_STATUS_B;
            } else if ($average_score >= 5.5 && $average_score <= 7.4) {
                $predicate = InternshipScore::PREDICATE_STATUS_C;
            } else if ($average_score >= 3.5 && $average_score <= 5.4) {
                $predicate = InternshipScore::PREDICATE_STATUS_D;
            } else if ($average_score >= 1.0 && $average_score <= 3.4) {
                $predicate = InternshipScore::PREDICATE_STATUS_E;
            }

            //Keterangan
            if ($average_score >= 8.5 && $average_score <= 10) {
                $description = InternshipScore::DESCRIPTION_STATUS_A;
            } else if ($average_score >= 7.5 && $average_score <= 8.4) {
                $description = InternshipScore::DESCRIPTION_STATUS_B;
            } else if ($average_score >= 5.5 && $average_score <= 7.4) {
                $description = InternshipScore::DESCRIPTION_STATUS_C;
            } else if ($average_score >= 3.5 && $average_score <= 5.4) {
                $description = InternshipScore::DESCRIPTION_STATUS_D;
            } else if ($average_score >= 1.0 && $average_score <= 3.4) {
                $description = InternshipScore::DESCRIPTION_STATUS_E;
            }

            // Update Data
            $internship_score = InternshipScore::find($id);
            $internship_score->discipline_score = $discipline_score;
            $internship_score->teamwork_score = $teamwork_score;
            $internship_score->initiative_score = $initiative_score;
            $internship_score->diligent_score = $diligent_score;
            $internship_score->responsibility_score = $responsibility_score;
            $internship_score->attitude_score = $attitude_score;
            $internship_score->performance_score = $performance_score;
            $internship_score->total_score = $total_score;
            $internship_score->average_score = $average_score;
            $internship_score->predicate = $predicate;
            $internship_score->description = $description;
            $internship_score->save();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('internship_score.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $internship_score = InternshipScore::find($id);

            // Delete Data
            $internship_score->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('internship_score.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
