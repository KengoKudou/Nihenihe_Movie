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
            $table->foreign('name')->references('name')->on('users')->cascadeOnDelete();
            $table->integer('artwork_num')->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('comment')->nullable(false);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('artworks');
    }
};
