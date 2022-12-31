<?php

namespace App\Http\Controllers;

use App\Exports\MasyarakatExport;
use App\Imports\MasyarakatImport;
use App\Models\masyarakat;
use App\Models\Other;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminDashboard.masyarakat', [
            'title' => 'Data Masyarakat',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1),
            'masyarakat' => masyarakat::orderBy('alamat', 'asc')->paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|max:16',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'rentangUmur' => 'required|max:255',
            'penghasilan' => 'required|max:255',
        ]);

        masyarakat::create($validatedData);

        return redirect('/masyarakat')->with('successCreatedMasyarakat', 'Data has ben created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\masyarakat  $masyarakat
     * @return \Illuminate\Http\Response
     */
    public function show(masyarakat $masyarakat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\masyarakat  $masyarakat
     * @return \Illuminate\Http\Response
     */
    public function edit(masyarakat $masyarakat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\masyarakat  $masyarakat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, masyarakat $masyarakat)
    {
        $rules = [
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'rentangUmur' => 'required|max:255',
            'penghasilan' => 'required|max:255',
        ];

        if ($request->nik != $masyarakat->nik) {
            $rules['nik'] = 'required|max:16';
        }

        $validatedData = $request->validate($rules);

        masyarakat::where('id', $masyarakat->id)->update($validatedData);

        return redirect('/masyarakat')->with('successUpdatedMasyarakat', 'Data has ben updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masyarakat  $masyarakat
     * @return \Illuminate\Http\Response
     */
    public function destroy(masyarakat $masyarakat)
    {
        masyarakat::destroy($masyarakat->id);
        return redirect('/masyarakat')->with('successDeletedMasyarakat', 'Data has ben deleted');
    }

    public function importData(Request $request)
    {
        $data = $request->file('dataMasyarakat');

        $nameFile = $data->getClientOriginalName();

        $data->move('DataMasyarakat', $nameFile);

        Excel::import(new MasyarakatImport, \public_path('/DataMasyarakat/' . $nameFile));

        return redirect('/masyarakat')->with('successImportData', 'Data has ben imported');
    }

    public function exportData()
    {
        return Excel::download(new MasyarakatExport, 'DataMasyrakat.xlsx');
    }

    public function detail()
    {
        return view('adminDashboard.detailDataMasyarakat', [
            'title' => 'Detail Data Masyarakat',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1),
            'masyarakat' => masyarakat::all()
        ]);
    }

    public function deleteAllMasyarakat()
    {
        DB::table('masyarakats')->truncate();
        return redirect('/masyarakat')->with('successDeletedAllData', 'All data has been successfully deleted');
    }
}
