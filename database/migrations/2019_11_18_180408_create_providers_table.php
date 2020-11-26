<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('phone', 16);
            $table->string('phone1', 16);
            $table->string('email', 100);
            $table->string('zipcode', 10);
            $table->string('street', 255);
            $table->string('number', 11);
            $table->string('complement', 255);
            $table->string('district', 255);
            $table->string('city', 100);
            $table->string('uf', 255);
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
        Schema::dropIfExists('providers');
    }
}
