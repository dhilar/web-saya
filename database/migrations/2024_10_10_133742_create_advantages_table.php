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
        Schema::create('advantages', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul keunggulan
            $table->text('description'); // Deskripsi keunggulan
            
            // 4 gambar
            $table->string('image_1')->nullable(); // Gambar 1 (opsional)
            $table->string('image_2')->nullable(); // Gambar 2 (opsional)
            $table->string('image_3')->nullable(); // Gambar 3 (opsional)
            $table->string('image_4')->nullable(); // Gambar 4 (opsional)
            
            // 4 fitur, masing-masing untuk gambar terkait
            $table->string('feature_1')->nullable(); // Fitur 1 untuk Gambar 1
            $table->string('feature_2')->nullable(); // Fitur 2 untuk Gambar 2
            $table->string('feature_3')->nullable(); // Fitur 3 untuk Gambar 3
            $table->string('feature_4')->nullable(); // Fitur 4 untuk Gambar 4
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('advantages');
    }
};
