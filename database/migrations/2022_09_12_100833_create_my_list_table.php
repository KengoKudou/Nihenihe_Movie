<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_list', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned()->nullable(false);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();

            for ($i = 1; $i <= 50; $i++) {
                $table->bigInteger("like{$i}")->unsigned()->nullable(false);
                $table->foreign("like{$i}")->references('id')->on('artworks');
            }

            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('my_list');
    }
}

;
