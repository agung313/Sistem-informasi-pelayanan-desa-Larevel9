<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use App\Models\Other;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminDashboard.lembaga',[
            'title' => 'Kelembagaan Desa',
            'lembaga' => Lembaga::all(),
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
        return view('adminDashboard.createLembaga',[
            'title' => 'Tambah Lembaga',
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
            'namaLembaga' => 'required|max:255',
            'singkatan' => 'required|max:255',
            'slug' => 'max:255|unique:lembagas',
            'ketuaLembaga' => 'required|max:255',
            'desaLembaga' => 'required|max:255',
            'kecamatanLembaga' => 'required|max:255',
            'kabupatenLembaga' => 'required|max:255',
            'provinsiLembaga' => 'required|max:255',
            'jumlahAnggota' => 'required|max:255',
            'logoLembaga' => 'required|image|file|max:5024',
            'visi' => 'required',
            'misi' => 'required',
            'sejarahLembaga' => 'required',
            'tugasLembaga' => 'required'
        ]);

        if($request->file('logoLembaga')){
            $validateData['logoLembaga'] = $request->file('logoLembaga')->store('logo-images');
        }

        Lembaga::create($validateData);

        return redirect('/lembaga')->with('successCreatedLembaga', 'Lembaga has ben created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function show(Lembaga $lembaga)
    {
        return view('adminDashboard.detailLembaga',[
            'title' => 'Detail Lembaga',
            'lembaga' => $lembaga,
            'anggota' => $lembaga->anggota->load('lembaga','jabatan'),
            'jabatan' => $lembaga->jabatan->load('lembaga'),
            'kegiatan' => $lembaga->kegiatan->load('lembaga'),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id',1),
            'user' => Auth::user('lembaga')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Lembaga $lembaga)
    {
        return view('adminDashboard.editLembaga',[
            'title' => 'Update Profil Lembaga',
            'lembaga' => $lembaga,
            'profil' => ProfilDesa::firstWhere('id', 1),
            'anggota' => $lembaga->anggota->load('lembaga','jabatan'),
            'other' => Other::firstWhere('id',1),
            'user' => Auth::user('lembaga')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lembaga $lembaga)
    {
        $rules = [
            'namaLembaga' => 'required|max:255',
            'singkatan' => 'required|max:255',
            'ketuaLembaga' => 'required|max:255',
            'desaLembaga' => 'required|max:255',
            'kecamatanLembaga' => 'required|max:255',
            'kabupatenLembaga' => 'required|max:255',
            'provinsiLembaga' => 'required|max:255',
            'jumlahAnggota' => 'required|max:255',
            'logoLembaga' => 'image|file|max:5024',
            'visi' => 'required',
            'misi' => 'required',
            'sejarahLembaga' => 'required',
            'tugasLembaga' => 'required'
        ];

        if ($request->slug != $lembaga->slug) {
            $rules['slug'] = 'unique:lembagas|max:255';
        }

        $validateData = $request->validate($rules);

        if ($request->file('logoLembaga')) {
            // jika ada gambar baru, maka hapus gambar lamanya
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            // inpute ke folder
            $validateData['logoLembaga'] = $request->file('logoLembaga')->store('logo-images');
        }

        Lembaga::where('id', $lembaga->id)->update($validateData);
        return redirect()->to('/lembaga/'.$lembaga->id)->with('successUpdatedLembaga', 'Lembaga has ben updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lembaga $lembaga)
    {
        if($lembaga->logoLembaga){
            Storage::delete($lembaga->logoLembaga);
        }

        Lembaga::destroy($lembaga->id);

        return redirect('/lembaga')->with('successDeletedLembaga', 'Lembaga has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        // create slug yang mengambil data dari method post, kemudian ambil field slug, kemudian ambil title dari url, dan request tersebut ambil dari code script dari crete.blade bagian + title.value
        $slug = SlugService::createSlug(Lembaga::class, 'slug', $request->title);

        // mengirim data ke bagian createbalde bagian jsdon
        return response()->json(['slug' => $slug]);
    }
}
