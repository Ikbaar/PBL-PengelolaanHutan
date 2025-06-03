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
    Schema::create('kurikulums', function (Blueprint $table) {
        $table->id();
        $table->string('kode');
        $table->string('mata_kuliah');
        $table->integer('sks');
        $table->tinyInteger('semester'); // 1–6
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurikulum');
    }
};
