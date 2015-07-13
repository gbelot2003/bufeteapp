<?php

use Illuminate\Database\Seeder;

class UserstatusesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('userstatuses')->delete();
        
		\DB::table('userstatuses')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'activo',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'suspendido',
			),
		));
	}

}
