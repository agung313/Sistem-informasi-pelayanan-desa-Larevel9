<?php

namespace Database\Seeders;

use App\Models\Apbdesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApbdesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Apbdesa::create([
            'titleApbdes' => 'Rincian apbdes desa tapung jaya',
            'fotoApbdes' => 'foto-apbdesa/cboCjjL9vLahpJEXkEVdtXrqvh0op86zqYPRgedx.png',
        ]);
    }
}
