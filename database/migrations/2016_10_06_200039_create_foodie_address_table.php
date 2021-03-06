<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodieAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodie_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->string('unit');
            $table->string('bldg');
            $table->string('street');
            $table->string('brgy');
            $table->char('type', 1); //Either R or O
            $table->string('company');
            $table->string('landmark');
            $table->string('remarks');
            $table->integer('foodie_id')->unsigned();
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
        Schema::dropIfExists('foodies_address');
    }
}
