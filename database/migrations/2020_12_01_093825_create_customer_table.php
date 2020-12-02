<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("birthday");
            $table->string("phone_conjugate");
            $table->string("state_civil");
            $table->string("company");
            $table->string("income");
            $table->string("conjugate");
            $table->string("dependents");
            $table->string("cpf")->unique();
            $table->string("rg")->unique();
            $table->string("phone");
            $table->string("phone_residential");
            $table->string("phone_commercial");
            $table->string("phone_complementary");
            $table->string("mother_name");
            $table->string("father_name");
            $table->string("gender");
            $table->string("level_of_schooling");
            $table->string("email")->unique();
            $table->string("state");
            $table->string("cit");
            $table->string("phone");
            $table->string("neighborhood");
            $table->string("street");
            $table->string("zipcode");
            $table->string("number");
            $table->string("additional_information");
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
        Schema::dropIfExists('customer');
    }
}
