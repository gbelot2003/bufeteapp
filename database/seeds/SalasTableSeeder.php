<?php

use Illuminate\Database\Seeder;

class SalasTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('salas')->delete();
        
		\DB::table('salas')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Sala Civil',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Sala Penal',
			),
		));
	}

}
