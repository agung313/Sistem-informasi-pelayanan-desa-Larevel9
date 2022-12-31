<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::create([
            'title' => 'Pencurian Sawit',
            'tempatKejadian' => 'Kebun sawit P12',
            'textPengaduan' => 'Telah terjadi pencurian buah sawit, atau ninja sawit di perkebunan jalur p.12 ujung, yang dilakukan oleh masyarakat luar desa'
        ]);
    }
}
