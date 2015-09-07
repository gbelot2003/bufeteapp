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


			$table->integer('tipocaso_id');
			$table->string('tipojuicio');
			$table->integer('tribunal_id');
			$table->string('instancia');
			$table->string('salas_id');
			$table->string('juez_id');

			$table->string('honorarios')->nullable();
			$table->string('csj')->nullable();
			$table->string('ca')->nullable();

			$table->boolean('estado');

			$table->integer('user_id');

			$table->string('slug', 255);
			$table->timestamps();
        });


		Schema::create('casos_contrapartes', function(Blueprint $table){
			$table->integer('caso_id')->unsigned()->index();
			$table->foreign('caso_id')->references('id')->on('casos')->onDelete('cascade');

			$table->integer('contacto_id')->unsigned()->index();
			$table->foreign('contacto_id')->references('id')->on('contactos');

			$table->integer('tipo_contraparte')->unsigned();

			$table->timestamps();
		});

		Schema::create('tipo_contraparte', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 30);
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

			Schema::drop('casos_contrapartes');
			Schema::drop('tipo_contraparte');
			Schema::drop('casos');
		});
    }
}
