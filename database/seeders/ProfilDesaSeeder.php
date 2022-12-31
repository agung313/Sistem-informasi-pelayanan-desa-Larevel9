<?php

namespace Database\Seeders;

use App\Models\ProfilDesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfilDesa::create([
            'namaDesa'=>'Desa Tapung Jaya',
            'kepalaDesa' => 'H. Ahmad Said Wahyudi, S.H',
            'kecamatan' =>'Tandun',
            'kabupaten' =>'Rokan Hulu',
            'provinsi' => 'Riau',
            'luasDesa' => '6,89',
            'jumlahDusun' => '3',
            'jumlahKeluarga'=>'931',
            'jumlahJiwa' => '2.857',
            'sejarah'=>
            '<p>Desa Tapung Jaya terletak di kecamatan Tandun, kabupaten Rokan Hulu,provinsi Riau. Desa Tapung Jaya merupakan salah satu desa yang termasuk dalam daerah Eks Trans UPT 1, dan menjadi desa definitive pertama kali pada tahun 1984. Pada awalnya desa ini termasuk dalam daerah kabupaten Kampar, kemudian terjadi pemekaran pada 12 oktober 1999 dan tergabung ke dalam daerah kabupaten Rokan Hulu.</p>
            <p>Sebelum menjadi desa secara definitive, desa ini dipimpin oleh Kepala Unit Pemukiman  Transmigrasi  (KUPT)  Bapak  Darmansya.  Setelah  menjadi  desa definitive pada tahun 1984, pemilihan pertama kepala desa dilakukan tanpa dipilih oleh masyarakat, alim ulama, tokoh masyarakat, atau tokoh agama, melainkan ditunjuk secara langsung, dan terpilih Bapak Nurhadi sebagai kepala desa pertama. Pemilihan kepala desa setelah itu dilakukan secara demokratis melalui pemilu, terpilihlah Bapak Rusman sebagai kepala desa kedua, Bapak Muhammad Yusuf sebagai kepala desa ketiga, Bapak kusnadi sebagai kepala desa keempat, dan Bapak H. Ahmad Said Wahyudi sebagai kepala desa kelima.</p>
            <p>Desa Tapung Jaya Sebagian besar penduduknya didominasi oleh suku Jawa tidak terkecuali pula suku lainnya. Desa tapung jaya terdiri dari tiga dusun, yaitu Dusun Harapan Maju, Dusun Harapan Makmur, dan Dusun Harapan Jaya. Jumlah penduduk Desa Tapung Jaya berdasarkan data tahun 2021 sebanyak 2.857 jiwa, dengan jumlah kepala keluarga (KK) sebanyak 931 KK</p>',
            'logoDesa' => 'logo-images/EVCKKVfCAUnFSM59Ehn95ZGsPFj8kvFEOlkli6sV.png',
            
        ]);
    }
}
