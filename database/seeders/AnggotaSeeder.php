<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>1,
            'namaAnggota' =>'H. Ahmad Said Wahyudi, S.H',
            'pendidikanAnggota' => 'Sarjana S1 Hukum',
            'alamatAnggota' =>'Jln Pelita 1',
            'pekerjaanAnggota' =>'wirausaha'
        ]);
        
        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>2,
            'namaAnggota' =>'Jumal, S.T',
            'pendidikanAnggota' => 'Sarjana S1 Teknik Informatika',
            'alamatAnggota' =>'Jln Pelita 2',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>3,
            'namaAnggota' =>'Bahrul Huda',
            'pendidikanAnggota' => '-',
            'alamatAnggota' =>'Jln Pelita 2',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>4,
            'namaAnggota' =>'Rina Marlina',
            'pendidikanAnggota' => '-',
            'alamatAnggota' =>'Jln Pelita 2',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>5,
            'namaAnggota' =>'H. Ahmad Afipudin',
            'pendidikanAnggota' => '-',
            'alamatAnggota' =>'Jln Pelita 2',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>6,
            'namaAnggota' =>'Samsu',
            'pendidikanAnggota' => '-',
            'alamatAnggota' =>'Jln Pelita 6',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>7,
            'namaAnggota' =>'Yanti, S.P',
            'pendidikanAnggota' => 'Sarjana S1 Pertanian',
            'alamatAnggota' =>'Jln Pelita 2',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>8,
            'namaAnggota' =>'Yulia Setiawati',
            'pendidikanAnggota' => '-',
            'alamatAnggota' =>'Jln Pelita 2',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 1,
            'jabatan_id' =>9,
            'namaAnggota' =>'Sukron',
            'pendidikanAnggota' => '-',
            'alamatAnggota' =>'Jln Pelita 12',
            'pekerjaanAnggota' =>'wirausaha'
        ]);


        Anggota::create([
            'lembaga_id' => 2,
            'jabatan_id' =>10,
            'namaAnggota' =>'Muhammad Agung Sholihhudin',
            'pendidikanAnggota' => 'Sarjana S1 Teknik Informatika',
            'alamatAnggota' =>'Jln Pelita 12',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 3,
            'jabatan_id' =>11,
            'namaAnggota' =>'Muhammad Agung Sholihhudin',
            'pendidikanAnggota' => 'Sarjana S1 Teknik Informatika',
            'alamatAnggota' =>'Jln Pelita 12',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 4,
            'jabatan_id' =>12,
            'namaAnggota' =>'Muhammad Agung Sholihhudin',
            'pendidikanAnggota' => 'Sarjana S1 Teknik Informatika',
            'alamatAnggota' =>'Jln Pelita 12',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 5,
            'jabatan_id' =>13,
            'namaAnggota' =>'Muhammad Agung Sholihhudin',
            'pendidikanAnggota' => 'Sarjana S1 Teknik Informatika',
            'alamatAnggota' =>'Jln Pelita 12',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 6,
            'jabatan_id' =>14,
            'namaAnggota' =>'Muhammad Agung Sholihhudin',
            'pendidikanAnggota' => 'Sarjana S1 Teknik Informatika',
            'alamatAnggota' =>'Jln Pelita 12',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        Anggota::create([
            'lembaga_id' => 7,
            'jabatan_id' =>15,
            'namaAnggota' =>'Muhammad Agung Sholihhudin',
            'pendidikanAnggota' => 'Sarjana S1 Teknik Informatika',
            'alamatAnggota' =>'Jln Pelita 12',
            'pekerjaanAnggota' =>'wirausaha'
        ]);

        
    }
}
