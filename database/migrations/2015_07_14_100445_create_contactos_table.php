<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
			$table->increments('id');
			$table->string('type');
			$table->string('name');
			$table->string('cargo')->nullable();
			$table->string('phone')->nullable();
			$table->string('movil')->nullable();
			$table->string('email')->nullable();
			$table->string('notes')->nullable();
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
        Schema::table('contactos', function (Blueprint $table) {
			Schema::drop('contactos');
        });
    }
}
