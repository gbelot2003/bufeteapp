<?php

use Illuminate\Database\Seeder;

class TipoContraparteTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tipo_contraparte')->delete();
        
		\DB::table('tipo_contraparte')->insert(array (
			0 => 
			array (
				'id' => 1,
			'name' => 'Demandante(s)',
			),
			1 => 
			array (
				'id' => 2,
			'name' => 'Demandado(s)',
			),
			2 => 
			array (
				'id' => 3,
			'name' => 'Terceria(s) Voluntaria',
			),
			3 => 
			array (
				'id' => 4,
			'name' => 'Terceria(s) Obligada',
			),
		));
	}

}
