<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('postalcode');
            $table->string('prefecture');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('phone');
            $table->mediumText('pr');
            $table->mediumText('keireki');
            $table->string('bunya1');
            $table->string('bunya2');
            $table->string('bunya3');
            $table->string('price');
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
        Schema::drop('mcs');
    }
}
