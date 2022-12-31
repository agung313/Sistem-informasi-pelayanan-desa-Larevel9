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
        Schema::create('pengajuan_surats', function (Blueprint $table) {
            $table->id();
            $table->string('nomorSurat')->nullable();
            $table->string('tanggalTerbit')->nullable();
            $table->string('nama');
            $table->string('nik');
            $table->string('jenisKelamin');
            $table->string('tempatLahir');
            $table->string('tanggalLahir');
            $table->string('agama');
            $table->string('negara');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('statusSurat');
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
        Schema::dropIfExists('pengajuan_surats');
    }
};
