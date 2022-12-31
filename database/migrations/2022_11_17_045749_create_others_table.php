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
        Schema::create('others', function (Blueprint $table) {
            $table->id();
            $table->string('shortTitle')->nullable();
            $table->string('fullTitle')->nullable();
            $table->text('informationSystem')->nullable();
            $table->string('contactUsTelpon')->nullable();
            $table->string('contactUsEmail')->nullable();
            $table->string('operationDay')->nullable();
            $table->string('operationTime')->nullable();
            $table->string('youtubeLink')->nullable();
            $table->string('facebookLink')->nullable();
            $table->string('instagramLink')->nullable();
            $table->string('googleLink')->nullable();
            $table->string('whatsAppLink')->nullable();
            $table->string('fotoPertama')->nullable();
            $table->string('fotoKedua')->nullable();
            $table->string('fotoKetiga')->nullable();
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
        Schema::dropIfExists('others');
    }
};
