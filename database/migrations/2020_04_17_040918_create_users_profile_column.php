<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProfileColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname');
            $table->string('lastname');
            $table->longText('address')->nullable();
            $table->longText('img_path')->nullable();
            $table->date('birthdate')->nullable();
            $table->json('hobby')->default(
                json_encode(
                    [
                     "sport" => false,
                     "game" => false,
                     "reading" => false,
                     "gardening" => false,
                     "movie" => false,
                    ]
                )
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
