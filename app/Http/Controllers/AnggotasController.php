<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotasController extends Controller
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
            'jabatan_id' => 'required',
            'namaAnggota' => 'required|max:255',
            'alamatAnggota' => 'required|max:255',
            'pendidikanAnggota' => 'required|max:255',
            'pekerjaanAnggota' => 'required|max:255',
            'fotoAnggota' => 'image|file|max:5024'
        ]);

        if($request->file('fotoAnggota')){
            $validateData['fotoAnggota'] = $request->file('fotoAnggota')->store('fotoAnggota');
        }

        Anggota::create($validateData);

        return redirect()->to('/lembaga/'.$request->lembaga_id)->with('successCreatedAnggota', 'Anggota has ben created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        $rules = [
            'jabatan_id' => 'required',
            'namaAnggota' => 'required|max:255',
            'alamatAnggota' => 'required|max:255',
            'pendidikanAnggota' => 'required|max:255',
            'pekerjaanAnggota' => 'required|max:255',
            'fotoAnggota' => 'image|file|max:5024'
        ];

        $validateData = $request->validate($rules);

        if($request->file('fotoAnggota')){
            if($request->oldFotoAnggota){
                Storage::delete($request->oldFotoAnggota);
            }
            $validateData['fotoAnggota'] = $request->file('fotoAnggota')->store('fotoAnggota');
        }

        Anggota::where('id', $anggota->id)->update($validateData);

        return redirect()->to('/lembaga/'.$anggota->lembaga_id)->with('successUpdatedAnggota', 'Anggota has ben updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        if($anggota->fotoAnggota){
            Storage::delete($anggota->fotoAnggota);
        }

        Anggota::destroy($anggota->id);

        return redirect()->to('/lembaga/'.$anggota->lembaga_id)->with('successDeletedAnggota', 'Anggota has ben deleted!');
    }
}
