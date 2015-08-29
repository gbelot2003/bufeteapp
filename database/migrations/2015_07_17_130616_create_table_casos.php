<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCasos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
			$table->increments('id');
			$table->string('caso');
			$table->string('cliente_id');
			$table->string('demandado')->nullable();
			$table->string('demandante')->nullable();
			$table->integer('tipocaso_id');
			$table->string('tipojuicio');
			$table->integer('tribunal_id');
			$table->string('instancia');
			$table->string('salas_id');
			$table->string('juez_id');
			$table->string('csj')->nullable();
			$table->string('ca')->nullable();
			$table->boolean('estado');
			$table->integer('user_id');
			$table->string('slug', 255);
			$table->timestamps();
        });

		Schema::create('casos_contacto', function(Blueprint $table){
			$table->integer('casos_id')->unsigned()->index();
			$table->foreign('casos_id')->references('id')->on('casos')->onDelete('cascade');

			$table->integer('contacto_id')->unsigned()->index();
			$table->foreign('contacto_id')->references('id')->on('contactos');
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
        Schema::table('casos', function (Blueprint $table) {

			Schema::drop('casos_contacto');
			Schema::drop('casos');
		});
    }
}
