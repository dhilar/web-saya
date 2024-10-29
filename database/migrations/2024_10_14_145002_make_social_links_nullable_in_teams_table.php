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
    Schema::table('teams', function (Blueprint $table) {
        $table->string('facebook_link')->nullable()->change();
        $table->string('twitter_link')->nullable()->change();
        $table->string('instagram_link')->nullable()->change();
    });
}

public function down()
{
    Schema::table('teams', function (Blueprint $table) {
        $table->string('facebook_link')->nullable(false)->change();
        $table->string('twitter_link')->nullable(false)->change();
        $table->string('instagram_link')->nullable(false)->change();
    });
}
};
