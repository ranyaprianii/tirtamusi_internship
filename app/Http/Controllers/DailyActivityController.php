<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyActivity;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\Apprentince;

class DailyActivityController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('daily_activities.index');
    }

    public function datatable()
    {
        $model = DailyActivity::query();
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $dateformat = Carbon::parse($data['created_at'])->translatedFormat('d F Y - H:i');
                return $dateformat;
            })
            ->addColumn('apprentince_name', function ($data) {
                return $data->apprentince->name;
            })
            ->toJson();
    }

    public function datatable_student()
    {
        $user_id = Auth::user()->id;
        $apprentince = Apprentince::where('user_id', $user_id)->first();
        $model = DailyActivity::where('apprentince_id', $apprentince['id']);

        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $dateformat = Carbon::parse($data['created_at'])->translatedFormat('d F Y - H:i');
                return $dateformat;
            })
            ->addColumn('action', function ($data) {
                $url_edit = route('daily_activity.edit', Crypt::encrypt($data->id));
                $url_delete = route('daily_activity.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";

                return $btn;
            })
            ->toJson();
    }



    public function create()
    {
        return view('daily_activities.create');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = DailyActivity::find($id);


        return view('daily_activities.edit', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'activity' => 'required',
            ]);

            // Create Data
            $input = $request->all();
            $user_id = Auth::user()->id;

            $apprentince = Apprentince::where('user_id', $user_id)->first();
            $apprentince_id = $apprentince->id;

            $input['apprentince_id'] = $apprentince_id;
            DailyActivity::create($input);


            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('daily_activity.index');
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
                'activity' => 'required',
            ]);

            // Update Data
            $id = Crypt::decrypt($id);
            $dailyActivity = DailyActivity::find($id);

            $input = $request->all();

            $dailyActivity->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('daily_activity.index');
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
            $dailyActivity = DailyActivity::find($id);

            // Delete Data
            $dailyActivity->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('daily_activity.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
