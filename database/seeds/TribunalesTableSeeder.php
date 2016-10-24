<?php

use Illuminate\Database\Seeder;

class TribunalesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tribunales')->delete();
        
		\DB::table('tribunales')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Juzgado de Tegucigalpa',
				'created_at' => '2015-08-31 18:40:47',
				'updated_at' => '2015-08-31 18:40:47',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Juzgado de Paz de Tegucigalpa',
				'created_at' => '2015-08-31 18:40:47',
				'updated_at' => '2015-08-31 18:40:47',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Sala Constitucional',
				'created_at' => '2015-08-31 18:40:47',
				'updated_at' => '2015-08-31 18:40:47',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Juzgado de Paz, San Pedro Sula',
				'created_at' => '2015-08-31 18:40:35',
				'updated_at' => '2015-08-31 18:40:35',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'Juzgado de Paz, Comayagua',
				'created_at' => '2015-08-31 18:40:47',
				'updated_at' => '2015-08-31 18:40:47',
			),
		));
	}

}
