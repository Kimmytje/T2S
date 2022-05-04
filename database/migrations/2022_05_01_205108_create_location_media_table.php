<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LocationImagesVideosTable extends Migration
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
            $table->string("media")->default("/media/locations/noimage.png");

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
        Schema::table("location", function (Blueprint $table) {
            $table->dropColumn("image");
        });
    }
}
