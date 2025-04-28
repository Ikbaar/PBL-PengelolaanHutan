<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('akreditasi', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('deskripsi');
        $table->string('sertifikat_path');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('akreditasi');
}

};
