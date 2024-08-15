<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('location',100);
            $table->string('price',100);
            $table->string('address',100);
            $table->string('image1',100);
            $table->string('image2',100);
            $table->enum('type',['House', 'Flat' ,'Apartment']);
            $table->string('description',100);
            $table->enum('status', ['Rent', 'Sale']);
            $table->string('area',100);
            $table->integer('beds');
            $table->integer('baths');
            $table->integer('garages');
            $table->string('amenities');
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
        Schema::dropIfExists('properties');
    }
}
