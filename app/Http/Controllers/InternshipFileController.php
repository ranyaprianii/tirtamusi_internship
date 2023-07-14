<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentince;
use App\Models\InternshipFile;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class InternshipFileController extends Controller
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

            $data = InternshipFile::where('apprentince_id', $apprentince_id)->get();
            return view('internship_files.index', compact('data'));
        } else {
            return view('internship_files.index');
        }
    }

    public function datatable()
    {
        $model = InternshipFile::query();

        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->editColumn('file', function ($data) {
                $url_file = asset('assets/laporan magang/' . $data->file);
                $file = "<a target='_blank' href='$url_file' class='btn btn-outline-primary'>Lihat File</a>";
                return $file;
            })
            ->addColumn('apprentince_name', function ($data) {
                return $data->apprentince->name;
            })

            ->addColumn('action', function ($data) {
                $url_create_verification = route('internship_file.create_verification', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                if ($data->status == InternshipFile::STATUS_NOT_CONFIRMED) {
                    $btn .= "<a href='$url_create_verification' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Konfirmasi</a>";
                }
                $btn .= "</div>";

                return $btn;
            })
            ->rawColumns(['file', 'action'])
            ->toJson();
    }

    public function datatable_student()
    {
        $user_id = Auth::user()->id;
        $apprentince = Apprentince::where('user_id', $user_id)->first();
        $apprentince_id = $apprentince->id;
        $model = InternshipFile::where('apprentince_id', $apprentince_id);

        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->editColumn('file', function ($data) {
                $url_file = asset('assets/laporan magang/' . $data->file);
                $file = "<a target='_blank' href='$url_file' class='btn btn-outline-primary'>Lihat File</a>";
                return $file;
            })
            ->addColumn('action', function ($data) {
                $url_edit = route('internship_file.edit', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                if ($data->status == InternshipFile::STATUS_NOT_CONFIRMED) {
                    $btn .= "<a href='$url_edit' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Edit</a>";
                }

                $btn .= "</div>";

                return $btn;
            })
            ->rawColumns(['file', 'action'])
            ->toJson();
    }

    public function create()
    {
        return view('internship_files.create');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = InternshipFile::find($id);

        return view('internship_files.edit', compact('data'));
    }

    public function create_verification($id)
    {
        $id = Crypt::decrypt($id);
        $data = InternshipFile::find($id);

        return view('internship_files.create_verification', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'report_file' => 'required',
                'file' => 'required|mimes:pdf|max:1024',
            ]);

            // Create Data
            $input = $request->all();

            // Save file
            if ($file = $request->file('file')) {
                $destinationPath = 'assets/laporan magang/';
                $fileName = "Laporan Magang" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            }


            $input['status'] = InternshipFile::STATUS_NOT_CONFIRMED;
            $user_id = Auth::user()->id;
            $apprentince = Apprentince::where('user_id', $user_id)->first();
            $apprentince_id = $apprentince->id;

            $input['apprentince_id'] = $apprentince_id;

            InternshipFile::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('internship_file.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'report_file' => 'required',
                'file' => 'required|mimes:pdf|max:1024',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $internship_file = InternshipFile::find($id);

            $input = $request->all();

            // File
            if ($file = $request->file('file')) {
                // Remove Old File
                if (!empty($input['file'])) {
                    $file_exist = 'assets/laporan magang/' . $input['file'];

                    if (file_exists($file_exist)) {
                        unlink($file_exist);
                    }
                }

                // Store New File
                $destinationPath = 'assets/laporan magang/';
                $fileName = "Laporan Magang" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            } else {
                unset($input['file']);
            }

            $internship_file->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('internship_file.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function update_verification(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'file' => 'required|mimes:pdf|max:1024',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $internship_file = InternshipFile::find($id);

            // File
            if ($file = $request->file('file')) {
                // Store New File
                $destinationPath = 'assets/sertifikat/';
                $fileName = "Sertifikat" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            }

            $internship_file->update([
                'status' => InternshipFile::STATUS_CONFIRMED
            ]);

            $apprentince = Apprentince::where('id', $internship_file->apprentince_id)->first();
            $apprentince->update([
                'sertificate' => $fileName,
                'status' => Apprentince::STATUS_DONE
            ]);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('internship_file.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }
}
