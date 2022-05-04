<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_availability', function (Blueprint $table) {
            $table->string("location");
            $table->string("for");

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
        Schema::table('location_availability', function (Blueprint $table) {
            $table->dropForeign('location_availability_location_foreign');
        });
        Schema::dropIfExists('location_availability');
    }
}
