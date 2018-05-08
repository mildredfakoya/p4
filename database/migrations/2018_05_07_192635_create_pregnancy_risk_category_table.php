<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePregnancyRiskCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnancy_risk_category', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('pregnancy_id')->unsigned()->index();
            $table->integer('risk_category_id')->unsigned()->index();

            # Make foreign keys
            $table->foreign('pregnancy_id')->references('id')->on('pregnancies');
            $table->foreign('risk_category_id')->references('id')->on('risk_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregnancy_risk_category');
    }
}
