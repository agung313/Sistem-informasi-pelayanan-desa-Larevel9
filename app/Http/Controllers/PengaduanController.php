<?php

namespace App\Http\Controllers;

use App\Models\Other;
use App\Models\Pengaduan;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminDashboard.pengaduan',[
            'title' => 'Pengaduan',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1),
            'pengaduan' => Pengaduan::latest()->paginate(10)
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

    }

    public function aduan(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'tempatKejadian' => 'max:255',
            'fotoPertama' => 'image|file|max:5024',
            'fotoKedua' => 'image|file|max:5024',
            'fotoKetiga' => 'image|file|max:5024',
            'textPengaduan' => 'required'
        ]);
        
        if($request->file('fotoPertama')){
            $validateData['fotoPertama'] = $request->file('fotoPertama')->store('foto-Pengaduan');
        }
        
        if($request->file('fotoKedua')){
            $validateData['fotoKedua'] = $request->file('fotoKedua')->store('foto-Pengaduan');
        }
        
        if($request->file('fotoKetiga')){
            $validateData['fotoKetiga'] = $request->file('fotoKetiga')->store('foto-Pengaduan');
        }

        Pengaduan::create($validateData);

        return redirect('/pelayananPublic/pengaduan')->with('successCreatePengaduan', 'Pengaduan berhasil diajukan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        return view('adminDashboard.pengaduanView',[
            'title' => 'Detail Pengaduan',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1),
            'pengaduan' => $pengaduan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        
        if($pengaduan->fotoPertama){
            Storage::delete($pengaduan->fotoPertama);
        }

        if($pengaduan->fotoKedua){
            Storage::delete($pengaduan->fotoKedua);
        }

        if($pengaduan->fotoKetiga){
            Storage::delete($pengaduan->fotoKetiga);
        }

        Pengaduan::destroy($pengaduan->id);

        return redirect('/pengaduan')->with('successDeletedPengaduan', 'Pengaduan has ben deleted!!');
    }
}
