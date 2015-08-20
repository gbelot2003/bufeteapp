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
			$table->string('demandado')->nullable();
			$table->string('demandante')->nullable();
			$table->string('juez_id');
			$table->string('csj')->nullable();
			$table->string('ca')->nullable();
			$table->text('descripcion')->nullable();
			$table->string('estado');
			$table->integer('user_id');
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
        Schema::table('casos', function (Blueprint $table) {
			Schema::drop('casos');
		});
    }
}
