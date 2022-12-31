<?php

namespace Database\Seeders;

use App\Models\Demografi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemografiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Demografi::create([
            'titleDemografi'=> 'Titik Kordinat',
            'isiTitleDemografi'=>'N : 0,669893 E : 100.530425'
        ]);

        Demografi::create([
            'titleDemografi'=> 'Luas Desa',
            'isiTitleDemografi'=>'6,89 Km <sup>2</sup>'
        ]);

        Demografi::create([
            'titleDemografi'=> 'Jarak Ke Ibu Kota Kecamatan',
            'isiTitleDemografi'=>'25 Km'
        ]);

        Demografi::create([
            'titleDemografi'=> 'Jarak Ke Ibu Kota Kabupaten',
            'isiTitleDemografi'=>'50 Km'
        ]);

        Demografi::create([
            'titleDemografi'=> 'Jarak Ke Ibu Kota Provinsi',
            'isiTitleDemografi'=>'190 Km'
        ]);

        Demografi::create([
            'titleDemografi'=> 'Perbatasan Sebelah Utara',
            'isiTitleDemografi'=>'Desa Ujung Batu Timur'
        ]);

        Demografi::create([
            'titleDemografi'=> 'Perbatasan Sebelah Selatan',
            'isiTitleDemografi'=>'Desa Dayo'
        ]);

        Demografi::create([
            'titleDemografi'=> 'Perbatasan Sebelah Barat',
            'isiTitleDemografi'=>'Desa Lubuk Bendahara'
        ]);

        Demografi::create([
            'titleDemografi'=> 'Perbatasan Sebelah Timur',
            'isiTitleDemografi'=>'Desa Tandun Barat'
        ]);
    }
}
