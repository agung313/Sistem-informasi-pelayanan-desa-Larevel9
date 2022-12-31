<?php

namespace App\Http\Controllers;

use App\Models\Apbdesa; 
use App\Models\DataApbdesa;
use App\Models\Other;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApbdesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminDashboard.apbdes',[
            'title' => 'APBDES Desa',
            'apbdesa' => Apbdesa::all()->firstWhere('id', 1),
            'dataApbdesa' => DataApbdesa::all(),
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apbdes  $apbdes
     * @return \Illuminate\Http\Response
     */
    public function show(Apbdesa $apbdesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apbdes  $apbdes
     * @return \Illuminate\Http\Response
     */
    public function edit(Apbdesa $apbdesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apbdes  $apbdes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apbdesa $apbdesa)
    {
        $rules = [
            'titleApbdes' => 'required|max:255',
            'fotoApbdes' => 'image|file|max:5024'
        ];

        $validateData = $request->validate($rules);

        if($request->file('fotoApbdes')){
            if($request->oldImageApbdesa){
                Storage::delete($request->oldImageApbdesa);
            }

            $validateData['fotoApbdes'] = $request->file('fotoApbdes')->store('foto-apbdesa');
        }

        Apbdesa::where('id', $apbdesa->id)->update($validateData);

        return redirect('/apbdesa')->with('successUpdatedApbdes', 'Data APBDES Desa has ben Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apbdes  $apbdes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apbdesa $apbdesa)
    {
        //
    }
}
