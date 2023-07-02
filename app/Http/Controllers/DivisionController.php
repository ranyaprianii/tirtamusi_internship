<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\SectionDivision;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class DivisionController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('divisions.index');
    }

    public function datatable()
    {
        $model = Division::query();
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $dateformat = Carbon::parse($data['created_at'])->translatedFormat('d F Y - H:i');
                return $dateformat;
            })
            ->addColumn('action', function ($data) {
                // $url_show = route('division.show', Crypt::encrypt($data->id));
                $url_edit = route('division.edit', Crypt::encrypt($data->id));
                $url_delete = route('division.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                // $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";

                return $btn;
            })
            ->addColumn('section_division', function ($data) {
                if ($data->section_divisions->count()) {
                    $sectionDivisionList = [];
                    foreach ($data->section_divisions as $item) {
                        $name = $item->name;
                        array_push($sectionDivisionList, $name);
                    }
                    return $sectionDivisionList;
                }
            })
            ->toJson();
    }

    public function create()
    {
        $division = Division::all();
        return view('divisions.create', compact('division'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Division::find($id);
        $division = Division::all();

        return view('divisions.edit', compact('data', 'division'));
    }

    // public function show($id)
    // {
    //     $id = Crypt::decrypt($id);
    //     $data = Division::find($id);

    //       return view('divisions.show', compact('data'));
    // }

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


            $division = Division::create($input);


            // Create Questionnaire Option
            if ($subdivision = $request->sub_name) {
                for ($i  = 0; $i < count($subdivision); $i++) {
                    SectionDivision::create([
                        'division_id' => $division->id,
                        'name' => $request->sub_name[$i],
                        'description' => $request->sub_description[$i]
                    ]);
                }
            }

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('division.index');
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
            $division = Division::find($id);

            $input = $request->all();

            $division->update($input);

            $getSectionDivision = $request->section_division;

            for ($i  = 0; $i < count($getSectionDivision); $i++) {
                if ($getSectionDivision[$i] !== null) {
                    $sectionDivision = SectionDivision::where('division_id',$id)->first();
                    $sectionDivision->update([
                        'division_id' => $division->id,
                        'name' => $request->sub_name[$i],
                        'description' => $request->sub_description[$i]
                    ]);

                    // Delete Data
                    SectionDivision::where('division_id', $id)
                        ->whereNotIn('id', $sectionDivision)
                        ->delete();
                } else {
                    SectionDivision::create([
                        'division_id' => $division->id,
                        'name' => $request->sub_name[$i],
                        'description' => $request->sub_description[$i]
                    ]);
                }
            }

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('unit.index');
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
            $division = Division::find($id);

            // Delete Data
            $division->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('division.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
