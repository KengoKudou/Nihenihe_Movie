<?php

use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable(false)->unique();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
    }
};
