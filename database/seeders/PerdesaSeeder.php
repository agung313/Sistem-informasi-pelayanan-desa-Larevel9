<?php

namespace Database\Seeders;

use App\Models\Perdesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerdesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Perdesa::create([
            'titlePerdes' => 'Draft PERDES APBD DESA',
            'tanggalPerdes_at' => '2022-11-07',
            'filePerdes' => 'file-perdes/MJPreZRZkqIVbJjwj3BljvRmxZN3UkcIJ21NNvEh.pdf'
        ]);

    }
}
