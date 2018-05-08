<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePregnanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnancies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('unique_id')->index()->unsigned();
            $table->foreign('unique_id')->references('unique_id')->on('uuids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('preg_id')->index()->unsigned()->onDelete('cascade')->onUpdate('cascade');
            $table->string('lmp')->nullable();
            $table->string('edd')->nullable();
            $table->string('risks')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregnancies');
    }
}
