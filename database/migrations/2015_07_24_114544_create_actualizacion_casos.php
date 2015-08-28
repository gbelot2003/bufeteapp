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
			$table->integer('caso_id');
			$table->integer('user_id');
			$table->text('descripcion')->nullable();
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
