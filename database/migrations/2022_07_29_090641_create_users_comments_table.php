<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users_comments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreign('name')->references('name')->on('users');
            $table->string('comment')->default('よろしくお願いします。')->nullable(false);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users_comments');
    }
};
