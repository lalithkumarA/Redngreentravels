<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additineraries', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('type')->nullable();
            $table->longText('trending')->nullable();
            $table->longText('packagename')->nullable();
            $table->longText('date')->nullable();
            $table->longText('cost')->nullable();
            $table->longText('duration')->nullable();
            $table->longText('highlights')->nullable();
            $table->longText('overview')->nullable();
            $table->longText('complementary')->nullable();
            $table->longText('itinerary')->nullable();
            $table->longText('Package_Excludes')->nullable();
            $table->longText('Package_includes')->nullable();
            $table->longText('Terms_and_conditions')->nullable();
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
        Schema::dropIfExists('additineraries');
    }
}
