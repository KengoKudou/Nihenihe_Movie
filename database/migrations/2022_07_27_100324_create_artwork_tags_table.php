<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('artwork_tags', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('artwork_id')->unsigned()->nullable(false);
            $table->foreign('artwork_id')->references('id')->on('artworks')->cascadeOnDelete()->cascadeOnUpdate();

            for ($i = 1; $i <= 10; $i++) {
                $table->bigInteger("tag{$i}")->unsigned()->nullable(false);
                $table->foreign("tag{$i}")->references('id')->on('tags');
            }

            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('artwork_tags');
    }
};
