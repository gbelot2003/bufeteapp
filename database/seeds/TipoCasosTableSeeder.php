<?php

use Illuminate\Database\Seeder;

class TipoCasosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tipo_casos')->delete();
        
		\DB::table('tipo_casos')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Demanda ',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Defensa',
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'Procedimiento Administrativo',
			),
		));
	}

}
