<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_media', function (Blueprint $table) {
            $table->unsignedBigInteger("user");
            $table->string("media")->default("/media/Users/noimage.png");

            $table->foreign("user")->references("accountID")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_media', function (Blueprint $table) {
            $table->dropForeign('user_media_user_foreign');
        });

        Schema::dropIfExists('user_media');
    }
}
