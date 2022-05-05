<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_media', function (Blueprint $table) {
            $table->string("location");
            $table->string("media")->default("/media/Locations/noimage.png");

            $table->foreign("location")->references("address")->on("location");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location_media', function (Blueprint $table) {
            $table->dropForeign('location_media_location_foreign');
        });

        Schema::dropIfExists('location_media');
    }
}
