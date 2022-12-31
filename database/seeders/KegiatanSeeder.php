<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kegiatan::create([
            'lembaga_id' => 1,
            'title' => 'Maulid Nabi Muhammad SAW dan syukuran peresmian surau suluk Al-Muqarrobah  Desa Tapung Jaya',
            'slug' =>'maulid-nabi-muhammad-saw-dan-syukuran-peresmian-surau-suluk-al-muqarrobah-desa-tapung-jaya',
            'tanggalKegiatan_at' => '2022-09-20',
            'textKegiatan' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere sunt ipsa vitae deleniti harum unde porro quos non labore quaerat dicta distinctio saepe voluptate, ipsam aliquid facilis nihil officia voluptatem libero a quas et voluptatibus. Ad quaerat commodi reiciendis, ipsam quod dicta. Natus voluptas qui quod similique consectetur nesciunt, totam voluptate animi, dignissimos, accusamus accusantium soluta earum numquam ad itaque mollitia consequatur nihil nostrum distinctio at? Voluptates id eum nam cumque ex ipsa architecto provident minima alias exercitationem asperiores deserunt doloribus molestias sed minus sit consequuntur, error optio doloremque corporis vel aspernatur velit temporibus! Reprehenderit sequi nihil suscipit modi deleniti reiciendis repellat impedit nostrum eius aspernatur itaque, totam, quia fuga. Nesciunt labore illum ex minus <p>explicabo, maiores nulla consequuntur dolorem, quod eveniet maxime laboriosam autem reiciendis nemo officia aperiam facilis itaque quidem cum consequatur molestias ratione! Omnis nam ipsum voluptatum officia neque maxime esse cupiditate repellat, ullam, temporibus harum autem error consequatur, dolorum earum. Aliquid tempora voluptatum accusamus aperiam, nihil cum quam, asperiores recusandae doloremque fugiat laudantium veritatis odit consectetur blanditiis suscipit nobis perferendis quibusdam dolor ad quis sint. Officia et deserunt sequi ipsum vitae iusto voluptatibus omnis nisi suscipit voluptas! Soluta neque, aut esse minima ratione, laudantium adipisci saepe fugit cum sit, explicabo provident omnis dignissimos dicta. Consequuntur rem quod, mollitia nisi aut assumenda tempore inventore adipisci ea in sed repellendus maiores dignissimos quaerat sequi culpa, unde possimus. Nulla qui explicabo distinctio necessitatibus nihil vel quo, a ipsam. Ratione consectetur veritatis quaerat pariatur aut sed velit illum? Tempore veritatis voluptatum repudiandae esse mollitia natus nihil commodi reiciendis ipsa adipisci ea dolores pariatur aperiam sequi iure cumque explicabo eos libero nam odio dolore, asperiores totam sunt! Laudantium dolores fugiat assumenda consequuntur rem! Similique quam veritatis nesciunt voluptates ea modi voluptatem minus cum totam nam pariatur in ab ipsa quasi saepe, explicabo molestias nemo sunt, tempora deleniti praesentium vitae? Veritatis facilis facere in excepturi cum mollitia, dicta optio laudantium voluptate eligendi sunt. Quod, cumque. Laboriosam cum omnis vero exercitationem id repellat obcaecati ad nemo reprehenderit in perspiciatis, magni quae iusto unde aperiam enim sint consequuntur ex dicta libero dolore officiis? Voluptate dolorem fugit, impedit iure libero odit harum ipsum! Ratione culpa quisquam, perspiciatis sint repudiandae natus perferendis enim veniam amet obcaecati nulla temporibus, error cum voluptas ipsa ab nemo. Culpa repellendus, praesentium labore quibusdam,</p> est laboriosam debitis cumque, vero minima obcaecati ex eius voluptates aut modi exercitationem omnis sunt dignissimos explicabo id velit dolorum officia? Accusantium perspiciatis architecto, autem exercitationem veniam optio? Voluptatibus repudiandae eos consequuntur dolore repellendus. Vero dolor cum quia quasi blanditiis optio facere possimus enim aperiam, quidem voluptatibus maiores esse vitae quas nostrum id a natus neque! Incidunt, adipisci. Tempora quaerat libero vero quis voluptas id laudantium ipsum nisi! Beatae, eos omnis corporis nulla numquam in iure mollitia nam debitis blanditiis corrupti veritatis, perspiciatis rem aliquid soluta excepturi modi iusto? Soluta maxime ipsum hic quas cumque, voluptatem fugit dolorem officia ex possimus. Assumenda maxime tempora consequatur veniam, sed laboriosam aspernatur commodi cupiditate? Nam commodi nobis minima ratione!</p>',
            'excerptKegiatan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere sunt ipsa vitae deleniti harum unde porro quos non labore quaerat dicta distinctio saepe voluptate, ipsam aliquid facilis nihil officia voluptatem libero a quas et voluptatibus. Ad quaerat commodi reiciendis, ipsam quod dicta. Natus voluptas qui quod similique consectetur nesciunt, totam voluptate animi, dignissimos, accusamus accusantium soluta earum numquam ad itaque mollitia consequatur nihil nostrum distinctio at? Voluptates id eum nam cumque ex ipsa architecto provident minima alias exercitationem asperiores deserunt doloribus molestias sed minus sit consequuntur, error optio doloremque corporis vel aspernatur',
            'fotoUtamaKegiatan' => 'kegiatan_fotoUtamaKegiatans/MvTpGzhdl2TMBqwADOa3DgR1ldsy3xS1gBM1bQyE.jpg'
        ]);

    }
}
