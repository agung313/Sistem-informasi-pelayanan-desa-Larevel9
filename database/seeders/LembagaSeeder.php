<?php

namespace Database\Seeders;

use App\Models\Lembaga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lembaga::create([
            'namaLembaga' => 'Susunan Organisasi Tatakerja Desa',
            'singkatan' => 'SOTK DESA',
            'slug' => 'sotk_desa',
            'ketuaLembaga' => 'H. Ahmad Said Wahyudi, S.H',
            'desaLembaga' => 'Tapung Jaya',
            'kecamatanLembaga' => 'Tandun',
            'kabupatenLembaga' => 'Rokan Hulu',
            'provinsiLembaga' => 'Riau',
            'jumlahAnggota' => '10',
            'logoLembaga' => 'logo-images/DUh5gDK4rXNijXn2nyDam7hg4ToZGWk4kPg0b2Li.png',
            'visi' => 'Mewujudkan Desa Tapung Jaya menjadi desa yang adil dan makmur',
            'misi' => '<p>1. Menciptakan pemerintah desa yang bersih dan berwibawa</p><p>2. Menciptakan pelayanan yang maksimal</p><p>3. Membangun desa yang berkesinambungan</p>',
            'sejarahLembaga' => '<p>Desa Tapung Jaya terletak di kecamatan Tandun, kabupaten Rokan Hulu,provinsi Riau. Desa Tapung Jaya merupakan salah satu desa yang termasuk dalam daerah Eks Trans UPT 1, dan menjadi desa definitive pertama kali pada tahun 1984. Pada awalnya desa ini termasuk dalam daerah kabupaten Kampar, kemudian terjadi pemekaran pada 12 oktober 1999 dan tergabung ke dalam daerah kabupaten Rokan Hulu.</p><p>Sebelum menjadi desa secara definitive, desa ini dipimpin oleh Kepala Unit Pemukiman Transmigrasi (KUPT) Bapak Darmansya. Setelah menjadi desa definitive pada tahun 1984, pemilihan pertama kepala desa dilakukan tanpa dipilih oleh masyarakat, alim ulama, tokoh masyarakat, atau tokoh agama, melainkan ditunjuk secara langsung, dan terpilih Bapak Nurhadi sebagai kepala desa pertama. Pemilihan kepala desa setelah itu dilakukan secara demokratis melalui pemilu, terpilihlah Bapak Rusman sebagai kepala desa kedua, Bapak Muhammad Yusuf sebagai kepala desa ketiga, Bapak kusnadi sebagai kepala desa keempat, dan Bapak H. Ahmad Said Wahyudi sebagai kepala desa kelima.</p><p>Desa Tapung Jaya Sebagian besar penduduknya didominasi oleh suku Jawa tidak terkecuali pula suku lainnya. Desa tapung jaya terdiri dari tiga dusun, yaitu Dusun Harapan Maju, Dusun Harapan Makmur, dan Dusun Harapan Jaya. Jumlah penduduk Desa Tapung Jaya berdasarkan data tahun 2021 sebanyak 2.857 jiwa, dengan jumlah kepala keluarga (KK) sebanyak 931 KK</p>',
            'tugasLembaga' => '<p>1. Membantu orang-orang tidak mampu secara finansial, dengan memberikan mereka pekerjaan. Dalam hal ini karang taruna berperan pada perekonomian warganya. Mereka begitu membantu orang-orang yang tidak mampu,dengan memberikan pekerjaan. Sasaran pemberian bantuan lapangan kerja ini disasarkan pada mereka yang tak memiliki pekerjaan (tentunya), bahkan untuk kalian yang tidak memiliki pendidikan tinggi diakibatkan putus sekolah.</p><p>2. Menciptakan rasa tanggung jawab kepada sesama makhluk sosial yang tak bernasib baik dari kita. Juga mengatasi berbagai masalah-masalah sosial. Dengan keberadaan organisasi ini, para anggotanya mempunyai tugas untuk mengatasi segala macam masalah tersebut. Jadi dengan demikian, ketika suatu lingkungan tempat tinggal terdapat berbagai masalah sosial, masalahnya ada yang menyelesaikan, jadi tidak hanya didiamkan masalahnya lalu dibiarkan mengendap. </p>'
        ]);

        Lembaga::create([
            'namaLembaga' => 'Badan Perwakilan Desa',
            'singkatan' => 'BPD',
            'slug' => 'bpd',
            'ketuaLembaga' => 'H. Ahmad Said Wahyudi, S.H',
            'desaLembaga' => 'Tapung Jaya',
            'kecamatanLembaga' => 'Tandun',
            'kabupatenLembaga' => 'Rokan Hulu',
            'provinsiLembaga' => 'Riau',
            'jumlahAnggota' => '10',
            'logoLembaga' => 'logo-images/0yzZ56v5CllugmE2XNNsllQPyewoQgAqwKA9OeA9.png',
            'visi' => 'Mewujudkan Desa Tapung Jaya menjadi desa yang adil dan makmur',
            'misi' => '<p>1. Menciptakan pemerintah desa yang bersih dan berwibawa</p><p>2. Menciptakan pelayanan yang maksimal</p><p>3. Membangun desa yang berkesinambungan</p>',
            'sejarahLembaga' => '<p>Desa Tapung Jaya terletak di kecamatan Tandun, kabupaten Rokan Hulu,provinsi Riau. Desa Tapung Jaya merupakan salah satu desa yang termasuk dalam daerah Eks Trans UPT 1, dan menjadi desa definitive pertama kali pada tahun 1984. Pada awalnya desa ini termasuk dalam daerah kabupaten Kampar, kemudian terjadi pemekaran pada 12 oktober 1999 dan tergabung ke dalam daerah kabupaten Rokan Hulu.</p><p>Sebelum menjadi desa secara definitive, desa ini dipimpin oleh Kepala Unit Pemukiman Transmigrasi (KUPT) Bapak Darmansya. Setelah menjadi desa definitive pada tahun 1984, pemilihan pertama kepala desa dilakukan tanpa dipilih oleh masyarakat, alim ulama, tokoh masyarakat, atau tokoh agama, melainkan ditunjuk secara langsung, dan terpilih Bapak Nurhadi sebagai kepala desa pertama. Pemilihan kepala desa setelah itu dilakukan secara demokratis melalui pemilu, terpilihlah Bapak Rusman sebagai kepala desa kedua, Bapak Muhammad Yusuf sebagai kepala desa ketiga, Bapak kusnadi sebagai kepala desa keempat, dan Bapak H. Ahmad Said Wahyudi sebagai kepala desa kelima.</p><p>Desa Tapung Jaya Sebagian besar penduduknya didominasi oleh suku Jawa tidak terkecuali pula suku lainnya. Desa tapung jaya terdiri dari tiga dusun, yaitu Dusun Harapan Maju, Dusun Harapan Makmur, dan Dusun Harapan Jaya. Jumlah penduduk Desa Tapung Jaya berdasarkan data tahun 2021 sebanyak 2.857 jiwa, dengan jumlah kepala keluarga (KK) sebanyak 931 KK</p>',
            'tugasLembaga' => '<p>1. Membantu orang-orang tidak mampu secara finansial, dengan memberikan mereka pekerjaan. Dalam hal ini karang taruna berperan pada perekonomian warganya. Mereka begitu membantu orang-orang yang tidak mampu,dengan memberikan pekerjaan. Sasaran pemberian bantuan lapangan kerja ini disasarkan pada mereka yang tak memiliki pekerjaan (tentunya), bahkan untuk kalian yang tidak memiliki pendidikan tinggi diakibatkan putus sekolah.</p><p>2. Menciptakan rasa tanggung jawab kepada sesama makhluk sosial yang tak bernasib baik dari kita. Juga mengatasi berbagai masalah-masalah sosial. Dengan keberadaan organisasi ini, para anggotanya mempunyai tugas untuk mengatasi segala macam masalah tersebut. Jadi dengan demikian, ketika suatu lingkungan tempat tinggal terdapat berbagai masalah sosial, masalahnya ada yang menyelesaikan, jadi tidak hanya didiamkan masalahnya lalu dibiarkan mengendap. </p>'
        ]);

        Lembaga::create([
            'namaLembaga' => 'Pemberdayaan Kesejahteraan Keluarga',
            'singkatan' => 'PKK',
            'slug' => 'pkk',
            'ketuaLembaga' => 'H. Ahmad Said Wahyudi, S.H',
            'desaLembaga' => 'Tapung Jaya',
            'kecamatanLembaga' => 'Tandun',
            'kabupatenLembaga' => 'Rokan Hulu',
            'provinsiLembaga' => 'Riau',
            'jumlahAnggota' => '10',
            'logoLembaga' => 'logo-images/eQ7nQfnE170nHEg0akxaPKQED5gn2yMif7gCE32l.png',
            'visi' => 'Mewujudkan Desa Tapung Jaya menjadi desa yang adil dan makmur',
            'misi' => '<p>1. Menciptakan pemerintah desa yang bersih dan berwibawa</p><p>2. Menciptakan pelayanan yang maksimal</p><p>3. Membangun desa yang berkesinambungan</p>',
            'sejarahLembaga' => '<p>Desa Tapung Jaya terletak di kecamatan Tandun, kabupaten Rokan Hulu,provinsi Riau. Desa Tapung Jaya merupakan salah satu desa yang termasuk dalam daerah Eks Trans UPT 1, dan menjadi desa definitive pertama kali pada tahun 1984. Pada awalnya desa ini termasuk dalam daerah kabupaten Kampar, kemudian terjadi pemekaran pada 12 oktober 1999 dan tergabung ke dalam daerah kabupaten Rokan Hulu.</p><p>Sebelum menjadi desa secara definitive, desa ini dipimpin oleh Kepala Unit Pemukiman Transmigrasi (KUPT) Bapak Darmansya. Setelah menjadi desa definitive pada tahun 1984, pemilihan pertama kepala desa dilakukan tanpa dipilih oleh masyarakat, alim ulama, tokoh masyarakat, atau tokoh agama, melainkan ditunjuk secara langsung, dan terpilih Bapak Nurhadi sebagai kepala desa pertama. Pemilihan kepala desa setelah itu dilakukan secara demokratis melalui pemilu, terpilihlah Bapak Rusman sebagai kepala desa kedua, Bapak Muhammad Yusuf sebagai kepala desa ketiga, Bapak kusnadi sebagai kepala desa keempat, dan Bapak H. Ahmad Said Wahyudi sebagai kepala desa kelima.</p><p>Desa Tapung Jaya Sebagian besar penduduknya didominasi oleh suku Jawa tidak terkecuali pula suku lainnya. Desa tapung jaya terdiri dari tiga dusun, yaitu Dusun Harapan Maju, Dusun Harapan Makmur, dan Dusun Harapan Jaya. Jumlah penduduk Desa Tapung Jaya berdasarkan data tahun 2021 sebanyak 2.857 jiwa, dengan jumlah kepala keluarga (KK) sebanyak 931 KK</p>',
            'tugasLembaga' => '<p>1. Membantu orang-orang tidak mampu secara finansial, dengan memberikan mereka pekerjaan. Dalam hal ini karang taruna berperan pada perekonomian warganya. Mereka begitu membantu orang-orang yang tidak mampu,dengan memberikan pekerjaan. Sasaran pemberian bantuan lapangan kerja ini disasarkan pada mereka yang tak memiliki pekerjaan (tentunya), bahkan untuk kalian yang tidak memiliki pendidikan tinggi diakibatkan putus sekolah.</p><p>2. Menciptakan rasa tanggung jawab kepada sesama makhluk sosial yang tak bernasib baik dari kita. Juga mengatasi berbagai masalah-masalah sosial. Dengan keberadaan organisasi ini, para anggotanya mempunyai tugas untuk mengatasi segala macam masalah tersebut. Jadi dengan demikian, ketika suatu lingkungan tempat tinggal terdapat berbagai masalah sosial, masalahnya ada yang menyelesaikan, jadi tidak hanya didiamkan masalahnya lalu dibiarkan mengendap. </p>'
        ]);

        Lembaga::create([
            'namaLembaga' => 'Karang Taruna',
            'singkatan' => 'karang taruna',
            'slug' => 'karang_taruna',
            'ketuaLembaga' => 'Muhammad Agung Sholihhudin, S.T',
            'desaLembaga' => 'Tapung Jaya',
            'kecamatanLembaga' => 'Tandun',
            'kabupatenLembaga' => 'Rokan Hulu',
            'provinsiLembaga' => 'Riua',
            'jumlahAnggota' => '20',
            'logoLembaga' => 'logo-images/qtKinWKv6Q0Wmir264aOvL6ygXf7j6dxB4sfusg4.png',
            'visi' => 'Mewujudkan Desa Tapung Jaya menjadi desa yang adil dan makmur',
            'misi' => '<p>1. Menciptakan pemerintah desa yang bersih dan berwibawa</p><p>2. Menciptakan pelayanan yang maksimal</p><p>3. Membangun desa yang berkesinambungan</p>',
            'sejarahLembaga' => '<p>Desa Tapung Jaya terletak di kecamatan Tandun, kabupaten Rokan Hulu,provinsi Riau. Desa Tapung Jaya merupakan salah satu desa yang termasuk dalam daerah Eks Trans UPT 1, dan menjadi desa definitive pertama kali pada tahun 1984. Pada awalnya desa ini termasuk dalam daerah kabupaten Kampar, kemudian terjadi pemekaran pada 12 oktober 1999 dan tergabung ke dalam daerah kabupaten Rokan Hulu.</p><p>Sebelum menjadi desa secara definitive, desa ini dipimpin oleh Kepala Unit Pemukiman Transmigrasi (KUPT) Bapak Darmansya. Setelah menjadi desa definitive pada tahun 1984, pemilihan pertama kepala desa dilakukan tanpa dipilih oleh masyarakat, alim ulama, tokoh masyarakat, atau tokoh agama, melainkan ditunjuk secara langsung, dan terpilih Bapak Nurhadi sebagai kepala desa pertama. Pemilihan kepala desa setelah itu dilakukan secara demokratis melalui pemilu, terpilihlah Bapak Rusman sebagai kepala desa kedua, Bapak Muhammad Yusuf sebagai kepala desa ketiga, Bapak kusnadi sebagai kepala desa keempat, dan Bapak H. Ahmad Said Wahyudi sebagai kepala desa kelima.</p><p>Desa Tapung Jaya Sebagian besar penduduknya didominasi oleh suku Jawa tidak terkecuali pula suku lainnya. Desa tapung jaya terdiri dari tiga dusun, yaitu Dusun Harapan Maju, Dusun Harapan Makmur, dan Dusun Harapan Jaya. Jumlah penduduk Desa Tapung Jaya berdasarkan data tahun 2021 sebanyak 2.857 jiwa, dengan jumlah kepala keluarga (KK) sebanyak 931 KK</p>',
            'tugasLembaga' => '<p>1. Membantu orang-orang tidak mampu secara finansial, dengan memberikan mereka pekerjaan. Dalam hal ini karang taruna berperan pada perekonomian warganya. Mereka begitu membantu orang-orang yang tidak mampu,dengan memberikan pekerjaan. Sasaran pemberian bantuan lapangan kerja ini disasarkan pada mereka yang tak memiliki pekerjaan (tentunya), bahkan untuk kalian yang tidak memiliki pendidikan tinggi diakibatkan putus sekolah.</p><p>2. Menciptakan rasa tanggung jawab kepada sesama makhluk sosial yang tak bernasib baik dari kita. Juga mengatasi berbagai masalah-masalah sosial. Dengan keberadaan organisasi ini, para anggotanya mempunyai tugas untuk mengatasi segala macam masalah tersebut. Jadi dengan demikian, ketika suatu lingkungan tempat tinggal terdapat berbagai masalah sosial, masalahnya ada yang menyelesaikan, jadi tidak hanya didiamkan masalahnya lalu dibiarkan mengendap. </p>'
        ]);

        Lembaga::create([
            'namaLembaga' => 'Koperasi Unit Desa',
            'singkatan' => 'KUD',
            'slug' => 'kud',
            'ketuaLembaga' => 'Muhammad Agung Sholihhudin, S.T',
            'desaLembaga' => 'Tapung Jaya',
            'kecamatanLembaga' => 'Tandun',
            'kabupatenLembaga' => 'Rokan Hulu',
            'provinsiLembaga' => 'Riua',
            'jumlahAnggota' => '20',
            'logoLembaga' => 'logo-images/gKOX0igEG2l8yhXwuiiLvHsAMZUecSLah1lCx5vV.png',
            'visi' => 'Mewujudkan Desa Tapung Jaya menjadi desa yang adil dan makmur',
            'misi' => '<p>1. Menciptakan pemerintah desa yang bersih dan berwibawa</p><p>2. Menciptakan pelayanan yang maksimal</p><p>3. Membangun desa yang berkesinambungan</p>',
            'sejarahLembaga' => '<p>Desa Tapung Jaya terletak di kecamatan Tandun, kabupaten Rokan Hulu,provinsi Riau. Desa Tapung Jaya merupakan salah satu desa yang termasuk dalam daerah Eks Trans UPT 1, dan menjadi desa definitive pertama kali pada tahun 1984. Pada awalnya desa ini termasuk dalam daerah kabupaten Kampar, kemudian terjadi pemekaran pada 12 oktober 1999 dan tergabung ke dalam daerah kabupaten Rokan Hulu.</p><p>Sebelum menjadi desa secara definitive, desa ini dipimpin oleh Kepala Unit Pemukiman Transmigrasi (KUPT) Bapak Darmansya. Setelah menjadi desa definitive pada tahun 1984, pemilihan pertama kepala desa dilakukan tanpa dipilih oleh masyarakat, alim ulama, tokoh masyarakat, atau tokoh agama, melainkan ditunjuk secara langsung, dan terpilih Bapak Nurhadi sebagai kepala desa pertama. Pemilihan kepala desa setelah itu dilakukan secara demokratis melalui pemilu, terpilihlah Bapak Rusman sebagai kepala desa kedua, Bapak Muhammad Yusuf sebagai kepala desa ketiga, Bapak kusnadi sebagai kepala desa keempat, dan Bapak H. Ahmad Said Wahyudi sebagai kepala desa kelima.</p><p>Desa Tapung Jaya Sebagian besar penduduknya didominasi oleh suku Jawa tidak terkecuali pula suku lainnya. Desa tapung jaya terdiri dari tiga dusun, yaitu Dusun Harapan Maju, Dusun Harapan Makmur, dan Dusun Harapan Jaya. Jumlah penduduk Desa Tapung Jaya berdasarkan data tahun 2021 sebanyak 2.857 jiwa, dengan jumlah kepala keluarga (KK) sebanyak 931 KK</p>',
            'tugasLembaga' => '<p>1. Membantu orang-orang tidak mampu secara finansial, dengan memberikan mereka pekerjaan. Dalam hal ini karang taruna berperan pada perekonomian warganya. Mereka begitu membantu orang-orang yang tidak mampu,dengan memberikan pekerjaan. Sasaran pemberian bantuan lapangan kerja ini disasarkan pada mereka yang tak memiliki pekerjaan (tentunya), bahkan untuk kalian yang tidak memiliki pendidikan tinggi diakibatkan putus sekolah.</p><p>2. Menciptakan rasa tanggung jawab kepada sesama makhluk sosial yang tak bernasib baik dari kita. Juga mengatasi berbagai masalah-masalah sosial. Dengan keberadaan organisasi ini, para anggotanya mempunyai tugas untuk mengatasi segala macam masalah tersebut. Jadi dengan demikian, ketika suatu lingkungan tempat tinggal terdapat berbagai masalah sosial, masalahnya ada yang menyelesaikan, jadi tidak hanya didiamkan masalahnya lalu dibiarkan mengendap. </p>'
        ]);

        Lembaga::create([
            'namaLembaga' => 'Badan Usaha Milik Desa',
            'singkatan' => 'BUMDES',
            'slug' => 'bumdes',
            'ketuaLembaga' => 'Muhammad Agung Sholihhudin, S.T',
            'desaLembaga' => 'Tapung Jaya',
            'kecamatanLembaga' => 'Tandun',
            'kabupatenLembaga' => 'Rokan Hulu',
            'provinsiLembaga' => 'Riau',
            'jumlahAnggota' => '20',
            'logoLembaga' => 'logo-images/nvcyF4bbEh2zAuYlQSgFvJkz40ET4H4A8lLbtOLu.png',
            'visi' => 'Mewujudkan Desa Tapung Jaya menjadi desa yang adil dan makmur',
            'misi' => '<p>1. Menciptakan pemerintah desa yang bersih dan berwibawa</p><p>2. Menciptakan pelayanan yang maksimal</p><p>3. Membangun desa yang berkesinambungan</p>',
            'sejarahLembaga' => '<p>Desa Tapung Jaya terletak di kecamatan Tandun, kabupaten Rokan Hulu,provinsi Riau. Desa Tapung Jaya merupakan salah satu desa yang termasuk dalam daerah Eks Trans UPT 1, dan menjadi desa definitive pertama kali pada tahun 1984. Pada awalnya desa ini termasuk dalam daerah kabupaten Kampar, kemudian terjadi pemekaran pada 12 oktober 1999 dan tergabung ke dalam daerah kabupaten Rokan Hulu.</p><p>Sebelum menjadi desa secara definitive, desa ini dipimpin oleh Kepala Unit Pemukiman Transmigrasi (KUPT) Bapak Darmansya. Setelah menjadi desa definitive pada tahun 1984, pemilihan pertama kepala desa dilakukan tanpa dipilih oleh masyarakat, alim ulama, tokoh masyarakat, atau tokoh agama, melainkan ditunjuk secara langsung, dan terpilih Bapak Nurhadi sebagai kepala desa pertama. Pemilihan kepala desa setelah itu dilakukan secara demokratis melalui pemilu, terpilihlah Bapak Rusman sebagai kepala desa kedua, Bapak Muhammad Yusuf sebagai kepala desa ketiga, Bapak kusnadi sebagai kepala desa keempat, dan Bapak H. Ahmad Said Wahyudi sebagai kepala desa kelima.</p><p>Desa Tapung Jaya Sebagian besar penduduknya didominasi oleh suku Jawa tidak terkecuali pula suku lainnya. Desa tapung jaya terdiri dari tiga dusun, yaitu Dusun Harapan Maju, Dusun Harapan Makmur, dan Dusun Harapan Jaya. Jumlah penduduk Desa Tapung Jaya berdasarkan data tahun 2021 sebanyak 2.857 jiwa, dengan jumlah kepala keluarga (KK) sebanyak 931 KK</p>',
            'tugasLembaga' => '<p>1. Membantu orang-orang tidak mampu secara finansial, dengan memberikan mereka pekerjaan. Dalam hal ini karang taruna berperan pada perekonomian warganya. Mereka begitu membantu orang-orang yang tidak mampu,dengan memberikan pekerjaan. Sasaran pemberian bantuan lapangan kerja ini disasarkan pada mereka yang tak memiliki pekerjaan (tentunya), bahkan untuk kalian yang tidak memiliki pendidikan tinggi diakibatkan putus sekolah.</p><p>2. Menciptakan rasa tanggung jawab kepada sesama makhluk sosial yang tak bernasib baik dari kita. Juga mengatasi berbagai masalah-masalah sosial. Dengan keberadaan organisasi ini, para anggotanya mempunyai tugas untuk mengatasi segala macam masalah tersebut. Jadi dengan demikian, ketika suatu lingkungan tempat tinggal terdapat berbagai masalah sosial, masalahnya ada yang menyelesaikan, jadi tidak hanya didiamkan masalahnya lalu dibiarkan mengendap. </p>'
        ]);

        Lembaga::create([
            'namaLembaga' => 'Lembaga Pemberdayaan Masyarakat Desa',
            'singkatan' => 'LPMD',
            'slug' => 'lpmd',
            'ketuaLembaga' => 'Muhammad Agung Sholihhudin, S.T',
            'desaLembaga' => 'Tapung Jaya',
            'kecamatanLembaga' => 'Tandun',
            'kabupatenLembaga' => 'Rokan Hulu',
            'provinsiLembaga' => 'Riau',
            'jumlahAnggota' => '20',
            'logoLembaga' => 'logo-images/ZgxOiWMu1KkcfQYZmZIScDM1ldSjicTMc1B6JoPv.png',
            'visi' => 'Mewujudkan Desa Tapung Jaya menjadi desa yang adil dan makmur',
            'misi' => '<p>1. Menciptakan pemerintah desa yang bersih dan berwibawa</p><p>2. Menciptakan pelayanan yang maksimal</p><p>3. Membangun desa yang berkesinambungan</p>',
            'sejarahLembaga' => '<p>Desa Tapung Jaya terletak di kecamatan Tandun, kabupaten Rokan Hulu,provinsi Riau. Desa Tapung Jaya merupakan salah satu desa yang termasuk dalam daerah Eks Trans UPT 1, dan menjadi desa definitive pertama kali pada tahun 1984. Pada awalnya desa ini termasuk dalam daerah kabupaten Kampar, kemudian terjadi pemekaran pada 12 oktober 1999 dan tergabung ke dalam daerah kabupaten Rokan Hulu.</p><p>Sebelum menjadi desa secara definitive, desa ini dipimpin oleh Kepala Unit Pemukiman Transmigrasi (KUPT) Bapak Darmansya. Setelah menjadi desa definitive pada tahun 1984, pemilihan pertama kepala desa dilakukan tanpa dipilih oleh masyarakat, alim ulama, tokoh masyarakat, atau tokoh agama, melainkan ditunjuk secara langsung, dan terpilih Bapak Nurhadi sebagai kepala desa pertama. Pemilihan kepala desa setelah itu dilakukan secara demokratis melalui pemilu, terpilihlah Bapak Rusman sebagai kepala desa kedua, Bapak Muhammad Yusuf sebagai kepala desa ketiga, Bapak kusnadi sebagai kepala desa keempat, dan Bapak H. Ahmad Said Wahyudi sebagai kepala desa kelima.</p><p>Desa Tapung Jaya Sebagian besar penduduknya didominasi oleh suku Jawa tidak terkecuali pula suku lainnya. Desa tapung jaya terdiri dari tiga dusun, yaitu Dusun Harapan Maju, Dusun Harapan Makmur, dan Dusun Harapan Jaya. Jumlah penduduk Desa Tapung Jaya berdasarkan data tahun 2021 sebanyak 2.857 jiwa, dengan jumlah kepala keluarga (KK) sebanyak 931 KK</p>',
            'tugasLembaga' => '<p>1. Membantu orang-orang tidak mampu secara finansial, dengan memberikan mereka pekerjaan. Dalam hal ini karang taruna berperan pada perekonomian warganya. Mereka begitu membantu orang-orang yang tidak mampu,dengan memberikan pekerjaan. Sasaran pemberian bantuan lapangan kerja ini disasarkan pada mereka yang tak memiliki pekerjaan (tentunya), bahkan untuk kalian yang tidak memiliki pendidikan tinggi diakibatkan putus sekolah.</p><p>2. Menciptakan rasa tanggung jawab kepada sesama makhluk sosial yang tak bernasib baik dari kita. Juga mengatasi berbagai masalah-masalah sosial. Dengan keberadaan organisasi ini, para anggotanya mempunyai tugas untuk mengatasi segala macam masalah tersebut. Jadi dengan demikian, ketika suatu lingkungan tempat tinggal terdapat berbagai masalah sosial, masalahnya ada yang menyelesaikan, jadi tidak hanya didiamkan masalahnya lalu dibiarkan mengendap. </p>'
        ]);
    }
}
