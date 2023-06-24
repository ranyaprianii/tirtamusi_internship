<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternshipScore;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
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

        return view('internship_scores.index');
    }

    public function datatable()
    {
        $model = InternshipScore::query();
        return DataTables::of($model)
        ->editColumn('created_at', function($data){
            $dateformat = Carbon::parse($data['created_at'])->translatedFormat('d F Y - H:i');
            return $dateformat;
        })
            ->addColumn('action', function ($data) {
                $url_show = route('internship_score.show', Crypt::encrypt($data->id));
                $url_edit = route('internship_score.edit', Crypt::encrypt($data->id));
                $url_delete = route('internship_score.destroy', Crypt::encrypt($data->id));

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
        $internship_score = InternshipScore::all();
        return view('internship_scores.create', compact('internship_score'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = InternshipScore::find($id);
        $internship_score = InternshipScore::all();

        return view('internship_scores.edit', compact('data', 'internship_score'));
    }

    public function show($id)
    {
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'name' => 'required',
                'description' => 'required',

            ]);

            // Create Data
            $input = $request->all();


            InternshipScore::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('internship_score.index');
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
                'name' => 'required',
                'description' => 'required',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $internship_score = InternshipScore::find($id);

            $input = $request->all();



            $internship_score->update($input);

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
