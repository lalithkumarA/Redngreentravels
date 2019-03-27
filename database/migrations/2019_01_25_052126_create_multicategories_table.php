<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMulticategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multicategories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('itinery_id')->unsigned();
            $table->foreign('itinery_id')->references('id')->on('additineraries')->onDelete('cascade');
            $table->string('category_id');
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
        Schema::dropIfExists('multicategories');
    }
}
