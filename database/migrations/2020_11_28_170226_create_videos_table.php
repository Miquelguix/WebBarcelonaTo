<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name',128);
            $table->string('slug',128)->unique();
            $table->foreignId('country_id')->nullable();
            $table->mediumText('excerpt')->nullable();
            $table->mediumText('body')->nullable();
            $table->string('link', 128);
            $table->string('img', 128)->nullable();
            $table->timestamp('date');
            $table->string('duration', 8)->nullable();
            $table->string('visual', 128)->nullable();
            $table->string('lat', 32)->nullable();
            $table->string('lon', 32)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
