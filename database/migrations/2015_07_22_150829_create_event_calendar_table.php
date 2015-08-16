<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_models', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->boolean('allday');
			$table->datetime('start');
			$table->datetime('end');
			$table->text('details')->nullable();
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
        Schema::table('event_models', function (Blueprint $table) {
			Schema::drop('event_models');
        });
    }
}
