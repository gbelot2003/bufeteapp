<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualizacionCasos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualizacion_casos', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('caso_id');
			$table->integer('user_id');
			$table->string('title');
			$table->text('body');
			$table->timestamp('date');
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
        Schema::table('actualizacion_casos', function (Blueprint $table) {
			Schema::drop('actualizacion_casos');
        });
    }
}
