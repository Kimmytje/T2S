<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals_media', function (Blueprint $table) {
            $table->unsignedBigInteger("animal");
            $table->string("media")->default("/media/Animals/noimage.png");

            $table->foreign("animal")->references("animalID")->on("animals");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals_media', function (Blueprint $table) {
            $table->dropForeign('animals_media_animal_foreign');
        });

        Schema::dropIfExists('animals_media');
    }
}
