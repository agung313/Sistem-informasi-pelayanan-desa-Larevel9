<?php

namespace Database\Seeders;

use App\Models\Other;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Other::create([
            'shortTitle' => 'SIP',
            'fullTitle' => 'Sistem Informasi dan Pelayanan',
            'informationSystem' => 'Sistem Informasi dan Pelayanan Desa Tapung Jaya, merupakan sistem yang dibangun guna memberikan berbagai informasi mengenai Desa Tapung Jaya, sekaligus memberikan pelayanan kepada masyarakat Desa Tapung Jaya.',
            'contactUsTelpon' => '082388514449',
            'contactUsEmail' => 'Tapungjaya@gmail.com',
            'operationDay' => 'Senin - Sabtu',
            'operationTime' => '08.00 - 17.00',
            'youtubeLink' => 'https://www.youtube.com/channel/UCOtzRAVgxLlGdmUOYTL6tlA',
            'googleLink' => 'https://www.google.com/search?gs_ssp=eJzj4tZP1zc0Msg1iC8wM2D0EkhJLU5UKEksKM1LV8hKrEwEAIygCaw&q=desa+tapung+jaya&rlz=1C1YTUH_enID1003ID1003&oq=Desa+Tapung+Jaya&aqs=chrome.0.46i512j69i57j0i22i30j69i60l3.4064j0j4&sourceid=chrome&ie=UTF-8',
            'fotoPertama' => 'image-slide/OD1bIr2mbkNNevdlQQ8DEvGuFsqMbjhC297NH1Kb.jpg',
            'fotoKedua' => 'image-slide/iAZyR9eq957eAwUJs2FSJwYViVOljcmR15sd1IAA.jpg',
            'fotoKetiga' => 'image-slide/MK6vY8lh9f1e23HFQplbmk3kYy3CXn4EyThBZ6xK.jpg'
        ]);
    }
}
