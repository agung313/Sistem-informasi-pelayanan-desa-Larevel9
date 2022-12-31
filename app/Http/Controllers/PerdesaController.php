<?php

namespace App\Http\Controllers;

use App\Models\Other;
use App\Models\Perdesa;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerdesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminDashboard.perdesa',[
            'title' => 'Perdesa',
            'perdesa' => Perdesa::all(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1)
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
        $validateData = $request->validate([
            'titlePerdes' => 'required|max:255',
            'tanggalPerdes_at' => 'date',
            'filePerdes' => 'required|mimes:pdf|file|max:5024'
        ]);

        if($request->file('filePerdes')){
            $validateData['filePerdes'] = $request->file('filePerdes')->store('file-perdes');
        }

        Perdesa::create($validateData);

        return redirect('/perdesa')->with('successCreatePerdesa', 'Data PERDES has ben created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perdesa  $perdesa
     * @return \Illuminate\Http\Response
     */
    public function show(Perdesa $perdesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perdesa  $perdesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Perdesa $perdesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perdesa  $perdesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perdesa $perdesa)
    {
        $rules = [
            'titlePerdes' => 'required|max:255',
            'tanggalPerdes_at' => 'date',
            'filePerdes' => 'required|mimes:pdf|file|max:5024'
        ];

        $validateData = $request->validate($rules);

        if($request->file('filePerdes')){
            if($request->oldPerdes){
                Storage::delete($request->oldPerdes);
            }
            $validateData['filePerdes'] = $request->file('filePerdes')->store('file-perdes');
        }

        Perdesa::where('id', $perdesa->id)->update($validateData);

        return redirect('/perdesa')->with('successUpdatedPerdesa', 'Data PERDES has ben Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perdesa  $perdesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perdesa $perdesa)
    {
        if($perdesa->filePerdes){
            Storage::delete($perdesa->filePerdes);
        }

        Perdesa::destroy($perdesa->id);

        return redirect('/perdesa')->with('successDeletedPerdesa', 'Data PERDES has ben deleted!');
    }
}
