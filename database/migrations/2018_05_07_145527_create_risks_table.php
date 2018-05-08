<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('unique_id')->unsigned();
            $table->foreign('unique_id')->references('unique_id')->on('uuids')->onDelete('cascade')->onupdate('cascade');
            $table->integer('preg_id')->index()->unsigned();
            $table->foreign('preg_id')->references('preg_id')->on('pregnancies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risks');
    }
}
