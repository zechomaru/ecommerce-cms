<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('rut');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('company');
            $table->string('rut_invoce');
            $table->string('direction');
            $table->string('direction_ext');
            $table->string('country_id');
            $table->string('state');
            $table->string('city');
            $table->string('commune');
            $table->string('zip_code');
            $table->string('password');
            $table->tinyInteger('newsletter')->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
