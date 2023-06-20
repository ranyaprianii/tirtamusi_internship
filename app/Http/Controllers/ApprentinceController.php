<?php

namespace App\Http\Controllers;

use App\Models\Apprentince;
use App\Models\ApprentinceDetail;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use illuminate\http\Request;
use Illuminate\Support\Facades\Auth;

class ApprentinceController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('apprentinces.index');
    }

    public function datatable()
    {
        $model = Apprentince::query();
        return DataTables::of($model)
             ->editColumn('created_at', function ($data) {
            $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
            return $formatedDate;
               })
            ->addColumn('action', function ($data) {
                $url_show = route('apprentince.show', Crypt::encrypt($data->id));
                $url_edit = route('apprentince.edit', Crypt::encrypt($data->id));
                $url_delete = route('apprentince.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
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

        return view('apprentince.edit', compact('data', 'apprentinces'));
    }

    public function show($id)
    {
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'user_id' => 'required',
                'unit_id' => 'required',
                'section_unit_id' => 'required',
                'division_id' => 'required',
                'section_division_id' => 'required',
                'nisn' => 'required',
                'nim' => 'required',
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
                'file' => 'required',
                'sertificate' => 'required',
                'status' => 'required',

            ]);

            // Create Data
            $input = $request->all();
            Apprentince::create($input);

              // Save file
              if ($file = $request->file('file')) {
                $destinationPath = 'assets/pengajuan/';
                $fileName = "Pengajuan" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            }

            $input['user_id'] = Auth::user()->id;
            $input['status'] = Apprentince::STATUS_NOT_CONFIRMED;

             // Create Apprentince
             $apprentince = Apprentince::create($input);

             // Create Apprentince Detail
             if ($request->department_detail) {
                 $apprentince_detail = $request->input('department_detail', []);

                 for ($i  = 0; $i < count($apprentince_detail); $i++) {
                     if ($apprentince_detail[$i] != "") {
                         ApprentinceDetail::create([
                             'apprentince_id' => $apprentince->id,
                             'nisn_nim' => $request->nisn_nim_detail[$i],
                             'name' => $request->name_detail[$i],
                             'department' => $request->department_detail[$i],
                             'gender' => $request->gender_detail[$i],
                             'birth_date' => $request->birth_date_detail[$i],
                             'birth_place' => $request->birth_place_detail[$i],
                             'address' => $request->address_detail[$i],
                             'phone_number' => $request->phone_number_detail[$i],
                         ]);
                     }
                 }
             }

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
            return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'user_id' => 'required',
                'unit_id' => 'required',
                'section_unit_id' => 'required',
                'division_id' => 'required',
                'section_division_id' => 'required',
                'nisn' => 'required',
                'nim' => 'required',
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
                'file' => 'required',
                'sertificate' => 'required',
                'status' => 'required',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $apprentince = Apprentince::find($id);

            $input = $request->all();

             // Decrypt
             $input['apprentince_id'] = Crypt::decrypt($request->apprentince_id);

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
