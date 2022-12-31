<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembagas', function (Blueprint $table) {
            $table->id();
            $table->string('namaLembaga');
            $table->string('singkatan');
            $table->string('slug')->nullable()->unique();
            $table->string('ketuaLembaga');
            $table->string('desaLembaga');
            $table->string('kecamatanLembaga');
            $table->string('kabupatenLembaga');
            $table->string('provinsiLembaga');
            $table->string('jumlahAnggota');
            $table->string('logoLembaga')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('sejarahLembaga')->nullable();
            $table->text('tugasLembaga')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lembagas');
    }
};
