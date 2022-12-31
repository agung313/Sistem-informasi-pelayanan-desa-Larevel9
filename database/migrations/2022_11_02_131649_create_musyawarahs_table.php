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
        Schema::create('musyawarahs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->date('tanggalMusyawarah_at');
            $table->text('textMusyawarah');
            $table->text('excerptMusyawarah')->nullable();
            $table->string('fotoUtamaMusyawarah');
            $table->string('fotoPertamaMusyawarah')->nullable();
            $table->string('fotoKeduaMusyawarah')->nullable();
            $table->string('fotoKetigaMusyawarah')->nullable();
            $table->string('fotoKeempatMusyawarah')->nullable();
            $table->string('fotoKelimaMusyawarah')->nullable();
            $table->string('fotoKeenamMusyawarah')->nullable();
            $table->string('fotoKetujuhMusyawarah')->nullable();
            $table->string('fotoKedelapanMusyawarah')->nullable();
            $table->string('fotoKesembilanMusyawarah')->nullable();
            $table->string('fotoKesepuluhMusyawarah')->nullable();
            $table->string('fotoKesebelahasMusyawarah')->nullable();
            $table->string('fotoKeduabelasMusyawarah')->nullable();
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
        Schema::dropIfExists('musyawarahs');
    }
};
