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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lembaga_id')->nullable();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->date('tanggalKegiatan_at');
            $table->text('textKegiatan');
            $table->text('excerptKegiatan');
            $table->string('fotoUtamaKegiatan');
            $table->string('fotoPertamaKegiatan')->nullable();
            $table->string('fotoKeduaKegiatan')->nullable();
            $table->string('fotoKetigaKegiatan')->nullable();
            $table->string('fotoKeempatKegiatan')->nullable();
            $table->string('fotoKelimaKegiatan')->nullable();
            $table->string('fotoKeenamKegiatan')->nullable();
            $table->string('fotoKetujuhKegiatan')->nullable();
            $table->string('fotoKedelapanKegiatan')->nullable();
            $table->string('fotoKesembilanKegiatan')->nullable();
            $table->string('fotoKesepuluhKegiatan')->nullable();
            $table->string('fotoKeduabelasKegiatan')->nullable();
            $table->string('fotoKesebelahasKegiatan')->nullable();
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
        Schema::dropIfExists('kegiatans');
    }
};
