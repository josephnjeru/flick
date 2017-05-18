<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flicks', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('caption');
            $table -> string('path');
            $table -> integer('author_id')->unsigned();
            $table -> foreign('author_id')->references('id')->on('users');
            $table -> integer('likes');
            $table -> boolean('status');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flicks', function (Blueprint $table) {
            $table -> dropIfExists('flicks');
        });
    }
}
