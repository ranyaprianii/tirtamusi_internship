<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentince;
use App\Models\Division;
use App\Models\Unit;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class ApprentinceController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        $user_id = Auth::user()->id;
        $data = Apprentince::where('user_id', $user_id)->get();

        return view('apprentinces.index', compact('data'));
    }

    public function index_verification()
    {
        return view('apprentinces.index_verification');
    }

    public function datatable()
    {
        $model = Apprentince::where('status', '!=', Apprentince::STATUS_NOT_CONFIRMED);

        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->editColumn('date_start', function ($data) {
                $formatDate = Carbon::parse($data['date_start'])->format('d-m-Y');
                return $formatDate;
            })

            ->editColumn('date_end', function ($data) {
                $formatDate = Carbon::parse($data['date_end'])->format('d-m-Y');
                return $formatDate;
            })

            ->addColumn('action', function ($data) {
                $url_show = route('apprentince.show', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
    }

    public function datatable_student()
    {
        $user_id = Auth::user()->id;
        $model = Apprentince::where('user_id', $user_id);

        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->editColumn('date_start', function ($data) {
                $formatDate = Carbon::parse($data['date_start'])->format('d-m-Y');
                return $formatDate;
            })

            ->editColumn('date_end', function ($data) {
                $formatDate = Carbon::parse($data['date_end'])->format('d-m-Y');
                return $formatDate;
            })

            ->addColumn('action', function ($data) {
                $url_show = route('apprentince.show', Crypt::encrypt($data->id));
                $url_edit = route('apprentince.edit', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
    }

    public function datatable_verification()
    {
        $model = Apprentince::where('status', Apprentince::STATUS_NOT_CONFIRMED);

        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->editColumn('date_start', function ($data) {
                $formatDate = Carbon::parse($data['date_start'])->format('d-m-Y');
                return $formatDate;
            })

            ->editColumn('date_end', function ($data) {
                $formatDate = Carbon::parse($data['date_end'])->format('d-m-Y');
                return $formatDate;
            })

            ->addColumn('action', function ($data) {
                $url_accept = route('apprentince.create_accept', Crypt::encrypt($data->id));
                $url_reject = route('apprentince.create_reject', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_accept' class = 'btn btn-outline-success btn-sm text-nowrap'><i class='fas fa-check mr-2'></i> Diterima</a>";
                $btn .= "<a href='$url_reject' class = 'btn btn-outline-danger btn-sm text-nowrap'><i class='fas fa-xmark mr-2'></i> Ditolak</a>";
                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
    }

    public function create_accept($id)
    {
        $id = Crypt::decrypt($id);
        $data = Apprentince::find($id);
        $data['birth_date'] = Carbon::parse($data['birth_date'])->isoFormat('D MMMM Y');
        $data['date_start'] = Carbon::parse($data['date_start'])->isoFormat('D MMMM Y');
        $data['date_end'] = Carbon::parse($data['date_end'])->isoFormat('D MMMM Y');

        $divisions = Division::all();
        $units = Unit::all();

        return view('apprentinces.accept', compact('data', 'divisions', 'units'));
    }

    public function accept(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $apprentince = Apprentince::find($id);

            $user_id = $apprentince->user_id;
            $user = User::find($user_id);

            $input = $request->all();

            if (!empty($request->division)) {
                $input['division'] = Crypt::decrypt($request->division);
            }

            if (!empty($request->sub_division)) {
                $input['sub_division'] = Crypt::decrypt($request->sub_division);
            }

            if (!empty($request->unit)) {
                $input['unit'] = Crypt::decrypt($request->unit);
            }

            if (!empty($request->sub_unit)) {
                $input['sub_unit'] = Crypt::decrypt($request->sub_unit);
            }

            // Save file
            if ($file = $request->file('letter_file')) {
                $destinationPath = 'assets/surat balasan/';
                $fileName = "Surat Balasan" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['letter_file'] = $fileName;
            }

            $apprentince->update([
                'division_id' => $input['division'],
                'section_division_id' => $input['sub_division'],
                'unit_id' => $input['unit'],
                'section_unit_id' => $input['sub_unit'],
                'letter_file' => $input['letter_file'],
                'status' => Apprentince::STATUS_APPROVED
            ]);


            DB::table('model_has_roles')
                ->where('model_id', $user_id)
                ->delete();

            $user->assignRole([3]);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('apprentince.index_verification');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Disimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function create_reject($id)
    {
        $id = Crypt::decrypt($id);
        $data = Apprentince::find($id);
        $data['birth_date'] = Carbon::parse($data['birth_date'])->isoFormat('D MMMM Y');
        $data['date_start'] = Carbon::parse($data['date_start'])->isoFormat('D MMMM Y');
        $data['date_end'] = Carbon::parse($data['date_end'])->isoFormat('D MMMM Y');

        return view('apprentinces.reject', compact('data'));
    }

    public function reject(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $apprentince = Apprentince::find($id);

            $user_id = $apprentince->user_id;
            $user = User::find($user_id);

            // Save file
            if ($file = $request->file('letter_file')) {
                $destinationPath = 'assets/surat balasan/';
                $fileName = "Surat Balasan" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
            }

            $subject_email = $request->subject_email;

            $data = [
                'title' => "Surat Balasan Penolakan Magang",
                'name' => $user->name,
                'email' => $user->email,
                'file_email' => public_path('assets/surat balasan/' . $fileName),
                'subject_email' => $subject_email
            ];


            Mail::send('apprentinces.email', $data, function ($message) use ($data) {
                $message->to($data['email'], $data['email'])
                    ->subject($data['title'])
                    ->attach($data['file_email']);
            });

            $user->delete();
            $apprentince->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('apprentince.index_verification');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Disimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function create()
    {
        $users = User::where('name', '!=', 'admin')->get();
        return view('apprentinces.create', compact('users'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Apprentince::find($id);
        $apprentinces = Apprentince::all();

        return view('apprentinces.edit', compact('data', 'apprentinces'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = Apprentince::find($id);
        $data['birth_date'] = Carbon::parse($data['birth_date'])->isoFormat('D MMMM Y');
        $data['date_start'] = Carbon::parse($data['date_start'])->isoFormat('D MMMM Y');
        $data['date_end'] = Carbon::parse($data['date_end'])->isoFormat('D MMMM Y');

        return view('apprentinces.show', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'nisn_nim' => 'required',
                'school' => 'required',
                'department' => 'required',
                'name' => 'required',
                'gender' => 'required',
                'birth_date' => 'required',
                'birth_place' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'file' => 'required|mimes:pdf|max:3000'
            ]);

            // Create Data
            $input = $request->all();

            // Save file
            if ($file = $request->file('file')) {
                $destinationPath = 'assets/pengajuan/';
                $fileName = "Pengajuan" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            }


            $input['status'] = Apprentince::STATUS_NOT_CONFIRMED;
            $input['user_id'] = Auth::user()->id;


            Apprentince::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('apprentince.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'nisn_nim' => 'required',
                'school' => 'required',
                'department' => 'required',
                'name' => 'required',
                'gender' => 'required',
                'birth_date' => 'required',
                'birth_place' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'date_start' => 'required',
                'date_end' => 'required',
                'file' => 'mimes:pdf|max:3000',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $apprentince = Apprentince::find($id);

            $input = $request->all();

            // File
            if ($file = $request->file('file')) {
                // Remove Old File
                if (!empty($input['file'])) {
                    $file_exist = 'assets/pengajuan/' . $input['file'];

                    if (file_exists($file_exist)) {
                        unlink($file_exist);
                    }
                }

                // Store New File
                $destinationPath = 'assets/pengajuan/';
                $fileName = "Pengajuan" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            } else {
                unset($input['file']);
            }

            $apprentince->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('apprentince.index');
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
            $apprentince = Apprentince::find($id);

            // Delete Data
            $apprentince->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('apprentince.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
