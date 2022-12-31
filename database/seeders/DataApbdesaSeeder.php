<?php

namespace Database\Seeders;

use App\Models\DataApbdesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataApbdesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataApbdesa::create([
            'titleData' => 'Pendapatan',
            'isiData' => '1.823.659.906,00',
            'colorData' => 'primary'
        ]);

        DataApbdesa::create([
            'titleData' => '1. Pendapatan Asli Desa (PAD)',
        ]);
    }
    
}
