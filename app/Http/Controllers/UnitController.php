<?php

namespace App\Http\Controllers;

use App\Models\SectionUnit;
use Illuminate\Http\Request;
use App\Models\Unit;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UnitController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('units.index');
    }

    public function datatable()
    {
        $model = Unit::query();
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $dateformat = Carbon::parse($data['created_at'])->translatedFormat('d F Y - H:i');
                return $dateformat;
            })
            ->addColumn('action', function ($data) {
                // $url_show = route('unit.show', Crypt::encrypt($data->id));
                $url_edit = route('unit.edit', Crypt::encrypt($data->id));
                $url_delete = route('unit.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                // $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";

                return $btn;
            })
            ->addColumn('section_unit', function ($data) {
                if ($data->section_units->count()) {
                    $sectionUnitList = [];
                    foreach ($data->section_units as $item) {
                        $name = $item->name;
                        array_push($sectionUnitList, $name);
                    }
                    return $sectionUnitList;
                }
            })
            ->toJson();
    }

    public function create()
    {
        $unit = Unit::all();
        return view('units.create', compact('unit'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Unit::find($id);
        $unit = Unit::all();

        return view('units.edit', compact('data', 'unit'));
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'name' => 'required',


            ]);

            // Create Data
            $input = $request->all();


            $unit = Unit::create($input);


            // Create Questionnaire Option
            if ($subunit = $request->sub_name) {
                for ($i  = 0; $i < count($subunit); $i++) {
                    SectionUnit::create([
                        'unit_id' => $unit->id,
                        'name' => $request->sub_name[$i],
                        'description' => $request->sub_description[$i]
                    ]);
                }
            }

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('unit.index');
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
               
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $unit = Unit::find($id);

            $input = $request->all();

            $unit->update($input);

            $getSectionUnit = $request->section_unit;

            for ($i  = 0; $i < count($getSectionUnit); $i++) {
                if ($getSectionUnit[$i] !== null) {
                    $sectionUnit = SectionUnit::where('unit_id',$id)->first();
                    $sectionUnit->update([
                        'unit_id' => $unit->id,
                        'name' => $request->sub_name[$i],
                        'description' => $request->sub_description[$i]
                    ]);

                    // Delete Data
                    SectionUnit::where('unit_id', $id)
                        ->whereNotIn('id', $sectionUnit)
                        ->delete();
                } else {
                    SectionUnit::create([
                        'unit_id' => $unit->id,
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
            $unit = Unit::find($id);

            // Delete Data
            $unit->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('unit.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
