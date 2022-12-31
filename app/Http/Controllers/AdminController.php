<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Lembaga;
use App\Models\masyarakat;
use App\Models\Musyawarah;
use App\Models\Other;
use App\Models\Pengaduan;
use App\Models\Perdesa;
use App\Models\ProfilDesa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('AdminDashboard.index',[
            'title' => 'Dashboard',
            // 'lembaga' => Lembaga::all(),
            'jumlahPerdes' => Perdesa::all()->count(),
            'jumlahKegiatan' => Kegiatan::all()->count(),
            'jumlahMusyawarah' => Musyawarah::all()->count(),
            'jumlahLembaga' => Lembaga::all()->count(),
            'jumlahAcount' => User::all()->count(),
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' =>  Other::firstWhere('id',1),
            'jumlahPengaduan' => Pengaduan::all()->count(),
            'jumlahMasyarakat' => masyarakat::all()->count(),
            'user' => Auth::user('lembaga')
        ]);
    }

    public function login(){
        return view('adminDashboard.login',[
            'title' => 'Login',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' =>  Other::firstWhere('id',1),
        ]);
    }

    public function authenticate(Request $request)
    {
        // melakukan validasi terhadap email
        $credentials = $request->validate([
            'userName' => 'required',
            'password' => 'required'
        ]);

        // melakukan pengecekan, apakah data yang diinputkan sudah valid atau belum
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('loginSuccess', 'Welcome back to dashboard system');
        }

        // jika tidak valid
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        // akases logout
        Auth::logout();

        // berguna agar session berakhir
        $request->session()->invalidate();

        // membuat session baru
        $request->session()->regenerateToken();

        // arahkan view
        return redirect('/');
    }
}
