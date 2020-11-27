<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('employees');
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->string("name");
            $table->string("cpf")->unique();
            $table->string("rg")->unique();
            $table->string("phone")->unique();
            $table->string("email")->unique();
            $table->date("birthday");
            $table->string("mother_name");
            $table->string("father_name");
            $table->string("level_of_schooling");
            $table->string("gender");
            $table->foreignId("shop_id")->constrained("shops","id")->onDelete('cascade')->default("1");
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
        Schema::dropIfExists('employees');
    }
}
