<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->nullable();
            $table->string('imgPath',128)->nullable(); 
            $table->string('country',32)->nullable();
            $table->string('region',64)->nullable();
            $table->string('city',32)->nullable();
            $table->string('street',64)->nullable();
            $table->integer('numHouse')->nullable();
            $table->integer('numPhone')->nullable();
            $table->string('email',64)->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
