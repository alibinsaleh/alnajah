<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalespointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salespoints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salespoint_code');
            $table->string('name');
            $table->string('latitude');
            $table->string('lognitude');
            $table->text('address');
            $table->string('mobile');
            $table->string('telephone');
            $table->integer('salespoint_owner_id');
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
        Schema::drop('salespoints');
    }
}
