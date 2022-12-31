<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Anggota;
use App\Models\DataApbdes;
use App\Models\DataApbdesa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ProfilDesaSeeder::class,
            LembagaSeeder::class,
            DemografiSeeder::class,
            PerdesaSeeder::class,
            JabatanSeeder::class,
            AnggotaSeeder::class,
            MusyawarahSeeder::class,
            KegiatanSeeder::class,
            ApbdesaSeeder::class,
            DataApbdesaSeeder::class,
            OtherSeeder::class,
            PengaduanSeeder::class,
            UserSeeder::class
        ]);
    }
}
