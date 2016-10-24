<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualizacioncasos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualizacioncasos', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('caso_id')->index()->unsigned();
			$table->foreign('caso_id')->references('id')->on('casos')->onDelete('cascade');
			$table->integer('user_id');
			$table->integer('importancia');
			$table->text('descripcion')->nullable();
			$table->timestamp('date')->nullable();
			$table->timestamp('created_at')->nullable();
			$table->timestamp('updated_at')->nullable();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actualizacioncasos', function (Blueprint $table) {
			Schema::drop('actualizacioncasos');
        });
    }
}
