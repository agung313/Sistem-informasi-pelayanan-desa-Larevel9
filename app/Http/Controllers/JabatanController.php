<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Other;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validateData = $request->validate([
            'lembaga_id' => 'required',
            'posisiJabatan' => 'required|max:255',
            'fungsiJabatan' => 'required'
        ]);

        Jabatan::create($validateData);
        return redirect()->to('/lembaga/'.$request->lembaga_id)->with('successCreatedJabatan', 'Jabatan has ben created!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        return view('adminDashboard.editJabatan',[
            'title' => 'Edit Jabatan',
            'jabatan' => $jabatan,
            'other' => Other::firstWhere('id',1),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'user' => Auth::user('lembaga')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        $validateData = $request->validate([
            'posisiJabatan' => 'required|max:255',
            'fungsiJabatan' => 'required'
        ]);

        Jabatan::where('id', $jabatan->id)->update($validateData);

        return redirect()->to('/lembaga/'.$jabatan->lembaga_id)->with('successUpdatedJabatan', 'Jabatan has ben updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        Jabatan::destroy($jabatan->id);

        return redirect()->to('/lembaga/'.$jabatan->lembaga_id)->with('successDeletedJabatan', 'Jabatan has ben deleted!');
    }
}
