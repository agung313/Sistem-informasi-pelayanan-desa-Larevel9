<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Lembaga;
use App\Models\Other;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminDashboard.kegiatan',[
            'title' => 'Kegiatan Desa',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'kegiatan' => Kegiatan::latest()->with('lembaga')->paginate(10),
            'other' => Other::firstWhere('id',1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Lembaga $lembaga)
    {
        return view('adminDashboard.kegiatanCreate',[
            'title' => 'Create Kegiatan',
            'lembagas' => Lembaga::all(),
            'lembaga' => $lembaga,
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
            'slug' => 'max:255|unique:kegiatans',
            'lembaga_id' => 'max:10',
            'tanggalKegiatan_at' => 'date',
            'textKegiatan' => 'required',
            'fotoUtamaKegiatan' => 'required|image|file|max:5024',
            'fotoPertamaKegiatan' => 'image|file|max:5024',
            'fotoKeduaKegiatan' => 'image|file|max:5024',
            'fotoKetigaKegiatan' => 'image|file|max:5024',
            'fotoKeempatKegiatan' => 'image|file|max:5024',
            'fotoKelimaKegiatan' => 'image|file|max:5024',
            'fotoKeenamKegiatan' => 'image|file|max:5024',
            'fotoKetujuhKegiatan' => 'image|file|max:5024',
            'fotoKedelapanKegiatan' => 'image|file|max:5024',
            'fotoKesembilanKegiatan' => 'image|file|max:5024',
            'fotoKesepuluhKegiatan' => 'image|file|max:5024',
            'fotoKesebelasKegiatan' => 'image|file|max:5024',
            'fotoKeduabelasKegiatan' => 'image|file|max:5024',
        ]);

        if ($request->file('fotoUtamaKegiatan')) {
            $validateData['fotoUtamaKegiatan'] = $request->file('fotoUtamaKegiatan')->store('kegiatan_fotoUtamaKegiatans');
        }

        if ($request->file('fotoPertamaKegiatan')) {
            $validateData['fotoPertamaKegiatan'] = $request->file('fotoPertamaKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKeduaKegiatan')) {
            $validateData['fotoKeduaKegiatan'] = $request->file('fotoKeduaKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKetigaKegiatan')) {
            $validateData['fotoKetigaKegiatan'] = $request->file('fotoKetigaKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKeempatKegiatan')) {
            $validateData['fotoKeempatKegiatan'] = $request->file('fotoKeempatKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKelimaKegiatan')) {
            $validateData['fotoKelimaKegiatan'] = $request->file('fotoKelimaKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKeenamKegiatan')) {
            $validateData['fotoKeenamKegiatan'] = $request->file('fotoKeenamKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKetujuhKegiatan')) {
            $validateData['fotoKetujuhKegiatan'] = $request->file('fotoKetujuhKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKedelapanKegiatan')) {
            $validateData['fotoKedelapanKegiatan'] = $request->file('fotoKedelapanKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKesembilanKegiatan')) {
            $validateData['fotoKesembilanKegiatan'] = $request->file('fotoKesembilanKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKesepuluhKegiatan')) {
            $validateData['fotoKesepuluhKegiatan'] = $request->file('fotoKesepuluhKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKesebelasKegiatan')) {
            $validateData['fotoKesebelasKegiatan'] = $request->file('fotoKesebelasKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKeduabelasKegiatan')) {
            $validateData['fotoKeduabelasKegiatan'] = $request->file('fotoKeduabelasKegiatan')->store('kegiatan_fotoKegiatans');
        }

        $validateData['excerptKegiatan'] = Str::limit(strip_tags($request->textKegiatan), 300);

        Kegiatan::create($validateData);

        return redirect('/kegiatan')->with('successCreatedKegiatan', 'Kegiatan has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('adminDashboard.kegiatanEdit',[
            'title' => 'Edit Kegiatan',
            'kegiatan' => $kegiatan,
            'lembagas' => Lembaga::all(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $rules = [
            'title' => 'required|max:255',
            'lembaga_id' => 'max:10',
            'tanggalKegiatan_at' => 'date',
            'textKegiatan' => 'required',
            'fotoUtamaKegiatan' => 'image|file|max:255',
            'fotoPertamaKegiatan' => 'image|file|max:255',
            'fotoKeduaKegiatan' => 'image|file|max:255',
            'fotoKetigaKegiatan' => 'image|file|max:255',
            'fotoKeempatKegiatan' => 'image|file|max:255',
            'fotoKelimaKegiatan' => 'image|file|max:255',
            'fotoKeenamKegiatan' => 'image|file|max:255',
            'fotoKetujuhKegiatan' => 'image|file|max:255',
            'fotoKedelapanKegiatan' => 'image|file|max:255',
            'fotoKesembilanKegiatan' => 'image|file|max:255',
            'fotoKesepuluhKegiatan' => 'image|file|max:255',
            'fotoKesebelasKegiatan' => 'image|file|max:255',
            'fotoKeduabelasKegiatan' => 'image|file|max:255',
        ];

        // cek jika slug yang baru sama saja dengan slug yang lama, maka loloskan saja, tapi jika beda maka update
        if ($request->slug != $kegiatan->slug) {
            $rules['slug'] = 'unique:kegiatans|max:255';
        }

        $validateData = $request->validate($rules);

        // image validation
        
        // foto utama
        if ($request->file('fotoUtamaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatan) {
                Storage::delete($request->oldImageKegiatan);
            }
            // inpute ke folder
            $validateData['fotoUtamaKegiatan'] = $request->file('fotoUtamaKegiatan')->store('kegiatan_fotoUtamaKegiatans');
        }
        
        // foto pertama
        if ($request->file('fotoPertamaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanPertama) {
                Storage::delete($request->oldImageKegiatanPertama);
            }
            // inpute ke folder
            $validateData['fotoPertamaKegiatan'] = $request->file('fotoPertamaKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kedua
        if ($request->file('fotoKeduaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKedua) {
                Storage::delete($request->oldImageKegiatanKedua);
            }
            // inpute ke folder
            $validateData['fotoKeduaKegiatan'] = $request->file('fotoKeduaKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto ketiga
        if ($request->file('fotoKetigaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKetiga) {
                Storage::delete($request->oldImageKegiatanKetiga);
            }
            // inpute ke folder
            $validateData['fotoKetigaKegiatan'] = $request->file('fotoKetigaKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto keempat
        if ($request->file('fotoKeempatKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKeempat) {
                Storage::delete($request->oldImageKegiatanKeempat);
            }
            // inpute ke folder
            $validateData['fotoKeempatKegiatan'] = $request->file('fotoKeempatKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kelima
        if ($request->file('fotoKelimaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKelima) {
                Storage::delete($request->oldImageKegiatanKelima);
            }
            // inpute ke folder
            $validateData['fotoKelimaKegiatan'] = $request->file('fotoKelimaKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto keenam
        if ($request->file('fotoKeenamKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKeenam) {
                Storage::delete($request->oldImageKegiatanKeenam);
            }
            // inpute ke folder
            $validateData['fotoKeenamKegiatan'] = $request->file('fotoKeenamKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto ketujuh
        if ($request->file('fotoKetujuhKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKetujuh) {
                Storage::delete($request->oldImageKegiatanKetujuh);
            }
            // inpute ke folder
            $validateData['fotoKetujuhKegiatan'] = $request->file('fotoKetujuhKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kedelapan
        if ($request->file('fotoKedelapanKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKedelapan) {
                Storage::delete($request->oldImageKegiatanKedelapan);
            }
            // inpute ke folder
            $validateData['fotoKedelapanKegiatan'] = $request->file('fotoKedelapanKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kesembilan
        if ($request->file('fotoKesembilanKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKesembilan) {
                Storage::delete($request->oldImageKegiatanKesembilan);
            }
            // inpute ke folder
            $validateData['fotoKesembilanKegiatan'] = $request->file('fotoKesembilanKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kesepuluh
        if ($request->file('fotoKesepuluhKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKesepuluh) {
                Storage::delete($request->oldImageKegiatanKesepuluh);
            }
            // inpute ke folder
            $validateData['fotoKesepuluhKegiatan'] = $request->file('fotoKesepuluhKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kesebelas
        if ($request->file('fotoKesebelasKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKesebelas) {
                Storage::delete($request->oldImageKegiatanKesebelas);
            }
            // inpute ke folder
            $validateData['fotoKesebelasKegiatan'] = $request->file('fotoKesebelasKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto keduabelas
        if ($request->file('fotoKeduabelasKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKeduabelas) {
                Storage::delete($request->oldImageKegiatanKeduabelas);
            }
            // inpute ke folder
            $validateData['fotoKeduabelasKegiatan'] = $request->file('fotoKeduabelasKegiatan')->store('kegiatan_fotoKegiatans');
        }

        $validateData['excerptKegiatan'] = Str::limit(strip_tags($request->textKegiatan), 300);

        Kegiatan::where('id', $kegiatan->id)->update($validateData);

        return redirect('/kegiatan')->with('successUpdatedKegiatan', 'Kegiatan has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        if($kegiatan->fotoUtamaKegiatan){
            Storage::delete($kegiatan->fotoUtamaKegiatan);
        }

        if($kegiatan->fotoPertamaKegiatan){
            Storage::delete($kegiatan->fotoPertamaKegiatan);
        }

        if($kegiatan->fotoKeduaKegiatan){
            Storage::delete($kegiatan->fotoKeduaKegiatan);
        }

        if($kegiatan->fotoKetigaKegiatan){
            Storage::delete($kegiatan->fotoKetigaKegiatan);
        }

        if($kegiatan->fotoKeempatKegiatan){
            Storage::delete($kegiatan->fotoKeempatKegiatan);
        }

        if($kegiatan->fotoKelimaKegiatan){
            Storage::delete($kegiatan->fotoKelimaKegiatan);
        }

        if($kegiatan->fotoKeenamKegiatan){
            Storage::delete($kegiatan->fotoKeenamKegiatan);
        }

        if($kegiatan->fotoKetujuhKegiatan){
            Storage::delete($kegiatan->fotoKetujuhKegiatan);
        }

        if($kegiatan->fotoKedelapanKegiatan){
            Storage::delete($kegiatan->fotoKedelapanKegiatan);
        }

        if($kegiatan->fotoKesembilanKegiatan){
            Storage::delete($kegiatan->fotoKesembilanKegiatan);
        }

        if($kegiatan->fotoKesepuluhKegiatan){
            Storage::delete($kegiatan->fotoKesepuluhKegiatan);
        }

        if($kegiatan->fotoKesebelasKegiatan){
            Storage::delete($kegiatan->fotoKesebelasKegiatan);
        }

        if($kegiatan->fotoKeduabelasKegiatan){
            Storage::delete($kegiatan->fotoKeduabelasKegiatan);
        }

        Kegiatan::destroy($kegiatan->id);

        return redirect('/kegiatan')->with('successDeletedKegiatan', 'Kegiatan has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        // create slug yang mengambil data dari method post, kemudian ambil field slug, kemudian ambil title dari url, dan request tersebut ambil dari code script dari crete.blade bagian + title.value
        $slug = SlugService::createSlug(Kegiatan::class, 'slug', $request->title);

        // mengirim data ke bagian createbalde bagian jsdon
        return response()->json(['slug' => $slug]);
    }

    public function createKegiatanLembaga(Lembaga $lembaga)
    {
        return view('adminDashboard.kegiatanCreate',[
            'title' => 'Create Kegiatan',
            'lembagas' => Lembaga::all(),
            'lembaga' => $lembaga,
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1),
            'user' => Auth::user('lembaga')
        ]);
    }

    public function storeKegiatanLembaga(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'max:255|unique:kegiatans',
            'lembaga_id' => 'max:10',
            'tanggalKegiatan_at' => 'date',
            'textKegiatan' => 'required',
            'fotoUtamaKegiatan' => 'required|image|file|max:5024',
            'fotoPertamaKegiatan' => 'image|file|max:5024',
            'fotoKeduaKegiatan' => 'image|file|max:5024',
            'fotoKetigaKegiatan' => 'image|file|max:5024',
            'fotoKeempatKegiatan' => 'image|file|max:5024',
            'fotoKelimaKegiatan' => 'image|file|max:5024',
            'fotoKeenamKegiatan' => 'image|file|max:5024',
            'fotoKetujuhKegiatan' => 'image|file|max:5024',
            'fotoKedelapanKegiatan' => 'image|file|max:5024',
            'fotoKesembilanKegiatan' => 'image|file|max:5024',
            'fotoKesepuluhKegiatan' => 'image|file|max:5024',
            'fotoKesebelasKegiatan' => 'image|file|max:5024',
            'fotoKeduabelasKegiatan' => 'image|file|max:5024',
        ]);

        if ($request->file('fotoUtamaKegiatan')) {
            $validateData['fotoUtamaKegiatan'] = $request->file('fotoUtamaKegiatan')->store('kegiatan_fotoUtamaKegiatans');
        }

        if ($request->file('fotoPertamaKegiatan')) {
            $validateData['fotoPertamaKegiatan'] = $request->file('fotoPertamaKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKeduaKegiatan')) {
            $validateData['fotoKeduaKegiatan'] = $request->file('fotoKeduaKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKetigaKegiatan')) {
            $validateData['fotoKetigaKegiatan'] = $request->file('fotoKetigaKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKeempatKegiatan')) {
            $validateData['fotoKeempatKegiatan'] = $request->file('fotoKeempatKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKelimaKegiatan')) {
            $validateData['fotoKelimaKegiatan'] = $request->file('fotoKelimaKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKeenamKegiatan')) {
            $validateData['fotoKeenamKegiatan'] = $request->file('fotoKeenamKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKetujuhKegiatan')) {
            $validateData['fotoKetujuhKegiatan'] = $request->file('fotoKetujuhKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKedelapanKegiatan')) {
            $validateData['fotoKedelapanKegiatan'] = $request->file('fotoKedelapanKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKesembilanKegiatan')) {
            $validateData['fotoKesembilanKegiatan'] = $request->file('fotoKesembilanKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKesepuluhKegiatan')) {
            $validateData['fotoKesepuluhKegiatan'] = $request->file('fotoKesepuluhKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKesebelasKegiatan')) {
            $validateData['fotoKesebelasKegiatan'] = $request->file('fotoKesebelasKegiatan')->store('kegiatan_fotoKegiatans');
        }

        if ($request->file('fotoKeduabelasKegiatan')) {
            $validateData['fotoKeduabelasKegiatan'] = $request->file('fotoKeduabelasKegiatan')->store('kegiatan_fotoKegiatans');
        }

        $validateData['excerptKegiatan'] = Str::limit(strip_tags($request->textKegiatan), 300);

        Kegiatan::create($validateData);

        return redirect()->to('/lembaga/'.$request->lembaga_id)->with('successCreatedKegiatan', 'Kegiatan has been created!');
    }

    public function deleteKegiatanLembaga(Kegiatan $kegiatan)
    {
        if($kegiatan->fotoUtamaKegiatan){
            Storage::delete($kegiatan->fotoUtamaKegiatan);
        }

        if($kegiatan->fotoPertamaKegiatan){
            Storage::delete($kegiatan->fotoPertamaKegiatan);
        }

        if($kegiatan->fotoKeduaKegiatan){
            Storage::delete($kegiatan->fotoKeduaKegiatan);
        }

        if($kegiatan->fotoKetigaKegiatan){
            Storage::delete($kegiatan->fotoKetigaKegiatan);
        }

        if($kegiatan->fotoKeempatKegiatan){
            Storage::delete($kegiatan->fotoKeempatKegiatan);
        }

        if($kegiatan->fotoKelimaKegiatan){
            Storage::delete($kegiatan->fotoKelimaKegiatan);
        }

        if($kegiatan->fotoKeenamKegiatan){
            Storage::delete($kegiatan->fotoKeenamKegiatan);
        }

        if($kegiatan->fotoKetujuhKegiatan){
            Storage::delete($kegiatan->fotoKetujuhKegiatan);
        }

        if($kegiatan->fotoKedelapanKegiatan){
            Storage::delete($kegiatan->fotoKedelapanKegiatan);
        }

        if($kegiatan->fotoKesembilanKegiatan){
            Storage::delete($kegiatan->fotoKesembilanKegiatan);
        }

        if($kegiatan->fotoKesepuluhKegiatan){
            Storage::delete($kegiatan->fotoKesepuluhKegiatan);
        }

        if($kegiatan->fotoKesebelasKegiatan){
            Storage::delete($kegiatan->fotoKesebelasKegiatan);
        }

        if($kegiatan->fotoKeduabelasKegiatan){
            Storage::delete($kegiatan->fotoKeduabelasKegiatan);
        }

        Kegiatan::destroy($kegiatan->id);

        return redirect()->to('/lembaga/'.$kegiatan->lembaga_id)->with('successDeletedKegiatan', 'Kegiatan has been deleted!');
    }

    public function editKegiatanLembaga(Kegiatan $kegiatan)
    {
        return view('adminDashboard.kegiatanLembagaEdit',[
            'title' => 'Edit Kegiatan',
            'kegiatan' => $kegiatan,
            'lembagas' => Lembaga::all(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1),
            'user' => Auth::user('lembaga')
        ]);
    }

    public function updatedKegiatanLembaga(Request $request, Kegiatan $kegiatan)
    {
        $rules = [
            'title' => 'required|max:255',
            'lembaga_id' => 'max:10',
            'tanggalKegiatan_at' => 'date',
            'textKegiatan' => 'required',
            'fotoUtamaKegiatan' => 'image|file|max:255',
            'fotoPertamaKegiatan' => 'image|file|max:255',
            'fotoKeduaKegiatan' => 'image|file|max:255',
            'fotoKetigaKegiatan' => 'image|file|max:255',
            'fotoKeempatKegiatan' => 'image|file|max:255',
            'fotoKelimaKegiatan' => 'image|file|max:255',
            'fotoKeenamKegiatan' => 'image|file|max:255',
            'fotoKetujuhKegiatan' => 'image|file|max:255',
            'fotoKedelapanKegiatan' => 'image|file|max:255',
            'fotoKesembilanKegiatan' => 'image|file|max:255',
            'fotoKesepuluhKegiatan' => 'image|file|max:255',
            'fotoKesebelasKegiatan' => 'image|file|max:255',
            'fotoKeduabelasKegiatan' => 'image|file|max:255',
        ];

        // cek jika slug yang baru sama saja dengan slug yang lama, maka loloskan saja, tapi jika beda maka update
        if ($request->slug != $kegiatan->slug) {
            $rules['slug'] = 'unique:kegiatans|max:255';
        }

        $validateData = $request->validate($rules);

        // image validation
        
        // foto utama
        if ($request->file('fotoUtamaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatan) {
                Storage::delete($request->oldImageKegiatan);
            }
            // inpute ke folder
            $validateData['fotoUtamaKegiatan'] = $request->file('fotoUtamaKegiatan')->store('kegiatan_fotoUtamaKegiatans');
        }
        
        // foto pertama
        if ($request->file('fotoPertamaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanPertama) {
                Storage::delete($request->oldImageKegiatanPertama);
            }
            // inpute ke folder
            $validateData['fotoPertamaKegiatan'] = $request->file('fotoPertamaKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kedua
        if ($request->file('fotoKeduaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKedua) {
                Storage::delete($request->oldImageKegiatanKedua);
            }
            // inpute ke folder
            $validateData['fotoKeduaKegiatan'] = $request->file('fotoKeduaKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto ketiga
        if ($request->file('fotoKetigaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKetiga) {
                Storage::delete($request->oldImageKegiatanKetiga);
            }
            // inpute ke folder
            $validateData['fotoKetigaKegiatan'] = $request->file('fotoKetigaKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto keempat
        if ($request->file('fotoKeempatKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKeempat) {
                Storage::delete($request->oldImageKegiatanKeempat);
            }
            // inpute ke folder
            $validateData['fotoKeempatKegiatan'] = $request->file('fotoKeempatKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kelima
        if ($request->file('fotoKelimaKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKelima) {
                Storage::delete($request->oldImageKegiatanKelima);
            }
            // inpute ke folder
            $validateData['fotoKelimaKegiatan'] = $request->file('fotoKelimaKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto keenam
        if ($request->file('fotoKeenamKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKeenam) {
                Storage::delete($request->oldImageKegiatanKeenam);
            }
            // inpute ke folder
            $validateData['fotoKeenamKegiatan'] = $request->file('fotoKeenamKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto ketujuh
        if ($request->file('fotoKetujuhKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKetujuh) {
                Storage::delete($request->oldImageKegiatanKetujuh);
            }
            // inpute ke folder
            $validateData['fotoKetujuhKegiatan'] = $request->file('fotoKetujuhKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kedelapan
        if ($request->file('fotoKedelapanKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKedelapan) {
                Storage::delete($request->oldImageKegiatanKedelapan);
            }
            // inpute ke folder
            $validateData['fotoKedelapanKegiatan'] = $request->file('fotoKedelapanKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kesembilan
        if ($request->file('fotoKesembilanKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKesembilan) {
                Storage::delete($request->oldImageKegiatanKesembilan);
            }
            // inpute ke folder
            $validateData['fotoKesembilanKegiatan'] = $request->file('fotoKesembilanKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kesepuluh
        if ($request->file('fotoKesepuluhKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKesepuluh) {
                Storage::delete($request->oldImageKegiatanKesepuluh);
            }
            // inpute ke folder
            $validateData['fotoKesepuluhKegiatan'] = $request->file('fotoKesepuluhKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto kesebelas
        if ($request->file('fotoKesebelasKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKesebelas) {
                Storage::delete($request->oldImageKegiatanKesebelas);
            }
            // inpute ke folder
            $validateData['fotoKesebelasKegiatan'] = $request->file('fotoKesebelasKegiatan')->store('kegiatan_fotoKegiatans');
        }
        
        // foto keduabelas
        if ($request->file('fotoKeduabelasKegiatan')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImageKegiatanKeduabelas) {
                Storage::delete($request->oldImageKegiatanKeduabelas);
            }
            // inpute ke folder
            $validateData['fotoKeduabelasKegiatan'] = $request->file('fotoKeduabelasKegiatan')->store('kegiatan_fotoKegiatans');
        }

        $validateData['excerptKegiatan'] = Str::limit(strip_tags($request->textKegiatan), 300);

        Kegiatan::where('id', $kegiatan->id)->update($validateData);

        return redirect()->to('/lembaga/'.$kegiatan->lembaga_id)->with('successUpdatedKegiatan', 'Kegiatan has been updated!');
    }
}
