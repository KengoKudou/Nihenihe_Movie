<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreign('name')->references('name')->on('users');
            $table->string('title', 29)->nullable(false);
            $table->string('comment', 511)->nullable(false);
            $table->string('data_path', 255)->nullable(false);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('artworks');
    }
};
