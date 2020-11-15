<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('countrySlug', 64);
            $table->string('continent', 64);
            $table->string('continentSlug', 64);
            $table->string('gob_id', 16);
            $table->longText('importante')->nullable();
            $table->longText('visados')->nullable();
            $table->longText('seguridad')->nullable();
            $table->longText('sanidad')->nullable();
            $table->longText('divisas')->nullable();
            $table->longText('otros')->nullable();
            $table->longText('direcciones')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
