<?php

namespace App\Http\Controllers;

use App\Models\Apprentince;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use illuminate\http\Request;

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
            ->addColumn('action', function ($data) {
                $url_show = route('apprentince.show', Crypt::encrypt($data->id));
                $url_edit = route('apprentince.edit', Crypt::encrypt($data->id));
                $url_delete = route('apprentince.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";
            })
            ->toJson();
    }

    public function create()
    {
        $apprentince = Apprentince::all();
        return view('apprentinces.create', compact('apprentince'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Apprentince::find($id);
        $apprentince = Apprentince::all();

        return view('apprentince.edit', compact('data', 'apprentince'));
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

            // Decrypt Meeting Room Id
            $input['user_id'] = Crypt::decrypt($request->user_id);
            // Create Status



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

            // Decrypt Meeting Room Id
            $input['user_id'] = Crypt::decrypt($request->user_id);

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
