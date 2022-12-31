<?php

namespace App\Http\Controllers;

use App\Models\Apbdesa;
use App\Models\DataApbdesa;
use App\Models\Demografi;
use App\Models\Jabatan;
use App\Models\Kegiatan;
use App\Models\Lembaga;
use App\Models\Musyawarah;
use App\Models\Other;
use App\Models\Perdesa;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    
    
    // home view
    public function index(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);
        return view('publicDashboard.index',[
            'title' => $short->shortTitle .' '. $desa->namaDesa,
            'lembaga' => Lembaga::all()->firstWhere('id',1),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }


    public function apbdes(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.apbdes',[
            'title' => $short->shortTitle .' '. $desa->namaDesa. ' - APBDES',
            'apbdes' => Apbdesa::firstWhere('id', 1),
            'dataApbdes' => DataApbdesa::all(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }

    public function profil(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.profil',[
            'title' => $short->shortTitle .' '. $desa->namaDesa. ' - Profil',
            // 'profil' =>ProfilDesa::all()
            'profil' => ProfilDesa::firstWhere('id', 1),
            'demografis' => Demografi::all(),
            'lembaga' => Lembaga::firstWhere('id', 1),
            'jabatan' => Jabatan::all(),
            'other' => Other::firstWhere('id', 1)
        ]);
    }

    public function perdes(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.perdes',[
            'title' => $short->shortTitle .' '. $desa->namaDesa. ' - PERDES',
            'perdess' =>Perdesa::all(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }

    public function kegiatan(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.kegiatan',[
            'title' => $short->shortTitle .' '. $desa->namaDesa. ' - Kegiatan',
            'kegiatan' => Kegiatan::latest()->filter(request(['search']))->paginate(9)->withQueryString(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }
    
    public function detailKegiatan(Kegiatan $kegiatan){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.detailKegiatan',[
            'title' => $short->shortTitle .' '. $desa->namaDesa. ' - Detail Kegiatan',
            'kegiatan'=>$kegiatan,
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }

    public function musyawarah(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.musyawarah',[
            'title' => $short->shortTitle .' '. $desa->namaDesa. ' - Musyawarah',
            'musyawarah' =>Musyawarah::latest()->filter(request(['search']))->paginate(9)->withQueryString(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }

    public function detailMusyawarah(Musyawarah $musyawarah){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.detailMusyawarah',[
            'title' => $short->shortTitle .' '. $desa->namaDesa. ' - Detail Musyawarah',
            'musyawarah'=>$musyawarah,
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }

    public function kelembagaan(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.kelembagaan',[
            'title' => $short->shortTitle .' '. $desa->namaDesa.  ' - Kelembagaan',
            'lembaga' =>Lembaga::all(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }

    public function profilKelembagaan(Lembaga $lembaga){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.organisasi',[
            'title' => $short->shortTitle .' '. $desa->namaDesa.  ' - Profil Kelembagaan',
            // 'lembaga' => $lembaga->load('visiMisi.lembaga')
            'lembaga' => $lembaga,
            'contact' => $lembaga->anggota->load('lembaga','jabatan'),
            'kegiatan' => $lembaga->kegiatan->load('lembaga'),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }

    // PELAYANAN
    
    public function surat(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.surat',[
            'title' => $short->shortTitle .' '. $desa->namaDesa.  ' - Pengajuan Surat',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'lembaga' => Lembaga::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }
    
    public function pengaduan(){
        $short = Other::firstWhere('id', 1);
        $desa = ProfilDesa::firstWhere('id', 1);

        return view('publicDashboard.pengaduan',[
            'title' => $short->shortTitle .' '. $desa->namaDesa.  ' - Pengaduan',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
    }
}
