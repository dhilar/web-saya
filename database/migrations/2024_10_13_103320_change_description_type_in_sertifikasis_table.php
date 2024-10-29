<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDescriptionTypeInSertifikasisTable extends Migration
{
    public function up()
    {
        Schema::table('sertifikasis', function (Blueprint $table) {
            $table->text('description')->change(); // Mengubah kolom description menjadi TEXT
        });
    }

    public function down()
    {
        Schema::table('sertifikasis', function (Blueprint $table) {
            $table->string('description', 255)->change(); // Mengembalikan ke VARCHAR dengan panjang 255 karakter jika perlu
        });
    }
}
