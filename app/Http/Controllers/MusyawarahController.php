<?php

namespace App\Http\Controllers;

use App\Models\Musyawarah;
use App\Models\Other;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MusyawarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminDashboard.musyawarah',[
            'title' => 'Musyawarah Desa',
            'musyawarah' => Musyawarah::all(),
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
        return view('adminDashboard.musyawarahCreate',[
            'title' => 'Create Kegiatan',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1)
        ]);
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
            'title' => 'required|max:255',
            'slug' => 'max:255',
            'tanggalMusyawarah_at' => 'date',
            'textMusyawarah' => 'required',
            'fotoUtamaMusyawarah' => 'image|file|max:255',
            'fotoPertamaMusyawarah' => 'image|file|max:255',
            'fotoKeduaMusyawarah' => 'image|file|max:255',
            'fotoKetigaMusyawarah' => 'image|file|max:255',
            'fotoKeempatMusyawarah' => 'image|file|max:255',
            'fotoKelimaMusyawarah' => 'image|file|max:255',
            'fotoKeenamMusyawarah' => 'image|file|max:255',
            'fotoKetujuhMusyawarah' => 'image|file|max:255',
            'fotoKedelapanMusyawarah' => 'image|file|max:255',
            'fotoKesembilanMusyawarah' => 'image|file|max:255',
            'fotoKesepuluhMusyawarah' => 'image|file|max:255',
            'fotoKesebelasMusyawarah' => 'image|file|max:255',
            'fotoKeduabelasMusyawarah' => 'image|file|max:255',
        ]);

        if ($request->file('fotoUtamaMusyawarah')) {
            $validateData['fotoUtamaMusyawarah'] = $request->file('fotoUtamaMusyawarah')->store('Musyawarah_fotoUtamaMusyawarahs');
        }

        if ($request->file('fotoPertamaMusyawarah')) {
            $validateData['fotoPertamaMusyawarah'] = $request->file('fotoPertamaMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKeduaMusyawarah')) {
            $validateData['fotoKeduaMusyawarah'] = $request->file('fotoKeduaMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKetigaMusyawarah')) {
            $validateData['fotoKetigaMusyawarah'] = $request->file('fotoKetigaMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKeempatMusyawarah')) {
            $validateData['fotoKeempatMusyawarah'] = $request->file('fotoKeempatMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKelimaMusyawarah')) {
            $validateData['fotoKelimaMusyawarah'] = $request->file('fotoKelimaMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKeenamMusyawarah')) {
            $validateData['fotoKeenamMusyawarah'] = $request->file('fotoKeenamMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKetujuhMusyawarah')) {
            $validateData['fotoKetujuhMusyawarah'] = $request->file('fotoKetujuhMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKedelapanMusyawarah')) {
            $validateData['fotoKedelapanMusyawarah'] = $request->file('fotoKedelapanMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKesembilanMusyawarah')) {
            $validateData['fotoKesembilanMusyawarah'] = $request->file('fotoKesembilanMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKesepuluhMusyawarah')) {
            $validateData['fotoKesepuluhMusyawarah'] = $request->file('fotoKesepuluhMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKesebelasMusyawarah')) {
            $validateData['fotoKesebelasMusyawarah'] = $request->file('fotoKesebelasMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        if ($request->file('fotoKeduabelasMusyawarah')) {
            $validateData['fotoKeduabelasMusyawarah'] = $request->file('fotoKeduabelasMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        $validateData['excerptMusyawarah'] = Str::limit(strip_tags($request->textMusyawarah), 300);

        Musyawarah::create($validateData);

        return redirect('/musyawarah')->with('successCreatedMusyawarah', 'Musyawarah has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Musyawarah  $musyawarah
     * @return \Illuminate\Http\Response
     */
    public function show(Musyawarah $musyawarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musyawarah  $musyawarah
     * @return \Illuminate\Http\Response
     */
    public function edit(Musyawarah $musyawarah)
    {
        return view('adminDashboard.musyawarahEdit',[
            'title' => 'Edit Musyawarah',
            'musyawarah' => $musyawarah,
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Musyawarah  $musyawarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musyawarah $musyawarah)
    {
        $rules = [
            'title' => 'required|max:255',
            'tanggalMusyawarah_at' => 'date',
            'textMusyawarah' => 'required',
            'fotoUtamaMusyawarah' => 'image|file|max:255',
            'fotoPertamaMusyawarah' => 'image|file|max:255',
            'fotoKeduaMusyawarah' => 'image|file|max:255',
            'fotoKetigaMusyawarah' => 'image|file|max:255',
            'fotoKeempatMusyawarah' => 'image|file|max:255',
            'fotoKelimaMusyawarah' => 'image|file|max:255',
            'fotoKeenamMusyawarah' => 'image|file|max:255',
            'fotoKetujuhMusyawarah' => 'image|file|max:255',
            'fotoKedelapanMusyawarah' => 'image|file|max:255',
            'fotoKesembilanMusyawarah' => 'image|file|max:255',
            'fotoKesepuluhMusyawarah' => 'image|file|max:255',
            'fotoKesebelasMusyawarah' => 'image|file|max:255',
            'fotoKeduabelasMusyawarah' => 'image|file|max:255',
        ];

        // cek jika slug yang baru sama saja dengan slug yang lama, maka loloskan saja, tapi jika beda maka update
        if ($request->slug != $musyawarah->slug) {
            $rules['slug'] = 'unique:musyawarahs|max:255';
        }

        $validateData = $request->validate($rules);

        // image validation
        
        // foto utama
        if ($request->file('fotoUtamaMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarah) {
                Storage::delete($request->oldImageMusyawarah);
            }
            // inpute ke folder
            $validateData['fotoUtamaMusyawarah'] = $request->file('fotoUtamaMusyawarah')->store('Musyawarah_fotoUtamaMusyawarahs');
        }
        
        // foto pertama
        if ($request->file('fotoPertamaMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahPertama) {
                Storage::delete($request->oldImageMusyawarahPertama);
            }
            // inpute ke folder
            $validateData['fotoPertamaMusyawarah'] = $request->file('fotoPertamaMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto kedua
        if ($request->file('fotoKeduaMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKedua) {
                Storage::delete($request->oldImageMusyawarahKedua);
            }
            // inpute ke folder
            $validateData['fotoKeduaMusyawarah'] = $request->file('fotoKeduaMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto ketiga
        if ($request->file('fotoKetigaMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKetiga) {
                Storage::delete($request->oldImageMusyawarahKetiga);
            }
            // inpute ke folder
            $validateData['fotoKetigaMusyawarah'] = $request->file('fotoKetigaMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto keempat
        if ($request->file('fotoKeempatMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKeempat) {
                Storage::delete($request->oldImageMusyawarahKeempat);
            }
            // inpute ke folder
            $validateData['fotoKeempatMusyawarah'] = $request->file('fotoKeempatMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto kelima
        if ($request->file('fotoKelimaMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKelima) {
                Storage::delete($request->oldImageMusyawarahKelima);
            }
            // inpute ke folder
            $validateData['fotoKelimaMusyawarah'] = $request->file('fotoKelimaMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto keenam
        if ($request->file('fotoKeenamMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKeenam) {
                Storage::delete($request->oldImageMusyawarahKeenam);
            }
            // inpute ke folder
            $validateData['fotoKeenamMusyawarah'] = $request->file('fotoKeenamMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto ketujuh
        if ($request->file('fotoKetujuhMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKetujuh) {
                Storage::delete($request->oldImageMusyawarahKetujuh);
            }
            // inpute ke folder
            $validateData['fotoKetujuhMusyawarah'] = $request->file('fotoKetujuhMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto kedelapan
        if ($request->file('fotoKedelapanMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKedelapan) {
                Storage::delete($request->oldImageMusyawarahKedelapan);
            }
            // inpute ke folder
            $validateData['fotoKedelapanMusyawarah'] = $request->file('fotoKedelapanMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto kesembilan
        if ($request->file('fotoKesembilanMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKesembilan) {
                Storage::delete($request->oldImageMusyawarahKesembilan);
            }
            // inpute ke folder
            $validateData['fotoKesembilanMusyawarah'] = $request->file('fotoKesembilanMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto kesepuluh
        if ($request->file('fotoKesepuluhMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKesepuluh) {
                Storage::delete($request->oldImageMusyawarahKesepuluh);
            }
            // inpute ke folder
            $validateData['fotoKesepuluhMusyawarah'] = $request->file('fotoKesepuluhMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto kesebelas
        if ($request->file('fotoKesebelasMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKesebelas) {
                Storage::delete($request->oldImageMusyawarahKesebelas);
            }
            // inpute ke folder
            $validateData['fotoKesebelasMusyawarah'] = $request->file('fotoKesebelasMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }
        
        // foto keduabelas
        if ($request->file('fotoKeduabelasMusyawarah')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageMusyawarahKeduabelas) {
                Storage::delete($request->oldImageMusyawarahKeduabelas);
            }
            // inpute ke folder
            $validateData['fotoKeduabelasMusyawarah'] = $request->file('fotoKeduabelasMusyawarah')->store('Musyawarah_fotoMusyawarahs');
        }

        $validateData['excerptMusyawarah'] = Str::limit(strip_tags($request->textMusyawarah), 300);

        Musyawarah::where('id', $musyawarah->id)->update($validateData);

        return redirect('/musyawarah')->with('successUpdatedMusyawarah', 'Musyawarah has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musyawarah  $musyawarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musyawarah $musyawarah)
    {
        if($musyawarah->fotoUtamaMusyawarah){
            Storage::delete($musyawarah->fotoUtamaMusyawarah);
        }

        if($musyawarah->fotoPertamaMusyawarah){
            Storage::delete($musyawarah->fotoPertamaMusyawarah);
        }

        if($musyawarah->fotoKeduaMusyawarah){
            Storage::delete($musyawarah->fotoKeduaMusyawarah);
        }

        if($musyawarah->fotoKetigaMusyawarah){
            Storage::delete($musyawarah->fotoKetigaMusyawarah);
        }

        if($musyawarah->fotoKeempatMusyawarah){
            Storage::delete($musyawarah->fotoKeempatMusyawarah);
        }

        if($musyawarah->fotoKelimaMusyawarah){
            Storage::delete($musyawarah->fotoKelimaMusyawarah);
        }

        if($musyawarah->fotoKeenamMusyawarah){
            Storage::delete($musyawarah->fotoKeenamMusyawarah);
        }

        if($musyawarah->fotoKetujuhMusyawarah){
            Storage::delete($musyawarah->fotoKetujuhMusyawarah);
        }

        if($musyawarah->fotoKedelapanMusyawarah){
            Storage::delete($musyawarah->fotoKedelapanMusyawarah);
        }

        if($musyawarah->fotoKesembilanMusyawarah){
            Storage::delete($musyawarah->fotoKesembilanMusyawarah);
        }

        if($musyawarah->fotoKesepuluhMusyawarah){
            Storage::delete($musyawarah->fotoKesepuluhMusyawarah);
        }

        if($musyawarah->fotoKesebelasMusyawarah){
            Storage::delete($musyawarah->fotoKesebelasMusyawarah);
        }

        if($musyawarah->fotoKeduabelasMusyawarah){
            Storage::delete($musyawarah->fotoKeduabelasMusyawarah);
        }

        Musyawarah::destroy($musyawarah->id);

        return redirect('/musyawarah')->with('successDeletedMusyawarah', 'Musyawarah has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        // create slug yang mengambil data dari method post, kemudian ambil field slug, kemudian ambil title dari url, dan request tersebut ambil dari code script dari crete.blade bagian + title.value
        $slug = SlugService::createSlug(Musyawarah::class, 'slug', $request->title);

        // mengirim data ke bagian createbalde bagian jsdon
        return response()->json(['slug' => $slug]);
    }
}
