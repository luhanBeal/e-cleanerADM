<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->decimal('value_min', 10, 2); //12345678,90
            $table->integer('hours_min');
            $table->decimal('percent'); //comission

            $table->decimal('value_bedroom');
            $table->integer('hours_bedroom');
            $table->decimal('value_living_room');
            $table->integer('hours_living_room');
            $table->decimal('value_bathroom');
            $table->integer('hours_bathroom');
            $table->decimal('value_kitchen');
            $table->integer('hours_kitchen');
            $table->decimal('value_yard');
            $table->integer('hours_yard');
            $table->decimal('value_others');
            $table->integer('hours_others');

            $table->string('icon');
            $table->integer('position');

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
        Schema::dropIfExists('services');
    }
}
