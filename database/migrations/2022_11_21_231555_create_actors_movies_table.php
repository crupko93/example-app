<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors_movies', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('actors_id')->unsigned();
            $table->unsignedBiginteger('movies_id')->unsigned();

            $table->foreign('actors_id')->references('id')
                 ->on('actors')->onDelete('cascade');
            $table->foreign('movies_id')->references('id')
                ->on('movies')->onDelete('cascade');

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
        Schema::dropIfExists('actors_movies');
    }
}
