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
			$table->datetime('start_date');
			$table->string('start_hour');
			$table->datetime('end');
			$table->datetime('end_date');
			$table->string('end_hour');
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
