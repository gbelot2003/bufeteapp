<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTribunalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribunales', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
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
        Schema::table('tribunales', function (Blueprint $table) {
			Schema::drop('tribunales');
        });
    }
}
