<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('artwork_tags', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('artwork_id')->unsigned();
            $table->foreign('artwork_id')->references('id')->on('artworks')->cascadeOnDelete();

            $table->bigInteger('tag1')->unsigned();
            $table->foreign('tag1')->references('id')->on('tags');

            $table->bigInteger('tag2')->unsigned();
            $table->foreign('tag2')->references('id')->on('tags');

            $table->bigInteger('tag3')->unsigned();
            $table->foreign('tag3')->references('id')->on('tags');

            $table->bigInteger('tag4')->unsigned();
            $table->foreign('tag4')->references('id')->on('tags');

            $table->bigInteger('tag5')->unsigned();
            $table->foreign('tag5')->references('id')->on('tags');

            $table->bigInteger('tag6')->unsigned();
            $table->foreign('tag6')->references('id')->on('tags');

            $table->bigInteger('tag7')->unsigned();
            $table->foreign('tag7')->references('id')->on('tags');

            $table->bigInteger('tag8')->unsigned();
            $table->foreign('tag8')->references('id')->on('tags');

            $table->bigInteger('tag9')->unsigned();
            $table->foreign('tag9')->references('id')->on('tags');

            $table->bigInteger('tag10')->unsigned();
            $table->foreign('tag10')->references('id')->on('tags');

            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('artwork_tags');
    }
};
