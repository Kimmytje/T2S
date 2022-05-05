<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id("animalID");
            $table->string("name");
            $table->integer("age");
            $table->string("kind");
            $table->unsignedBigInteger("owner");
            $table->longText("note");

            $table->foreign("kind")->references("kind")->on("kind_of_animals");
            $table->foreign("owner")->references('id')->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropForeign('animals_kind_foreign');
            $table->dropForeign('animals_owner_foreign');
        });
        Schema::dropIfExists('animals');
    }
}
