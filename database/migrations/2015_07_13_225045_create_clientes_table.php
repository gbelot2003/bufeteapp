<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('phone');
			$table->string('movil');
			$table->string('email');
			$table->text('details');
			$table->string('slug', 255);
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
        Schema::table('clientes', function (Blueprint $table) {
			Schema::drop('clientes');
        });
    }
}
