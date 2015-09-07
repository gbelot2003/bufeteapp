<?php

use Illuminate\Database\Seeder;

class CasosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('casos')->delete();
        
		\DB::table('casos')->insert(array (
			0 => 
			array (
				'id' => 1,
				'caso' => '1251-ad ',
				'cliente_id' => '1',
				'tipocaso_id' => 1,
				'tipojuicio' => 'Ordinario',
				'tribunal_id' => 5,
				'instancia' => 'Primera Instancia ',
				'salas_id' => 1,
				'juez_id' => '9',
				'honorarios' => NULL,
				'csj' => '',
				'ca' => '',
				'estado' => 1,
				'user_id' => 1,
				'slug' => '1251-ad',
				'created_at' => '2015-08-31 17:55:17',
				'updated_at' => '2015-08-31 17:55:17',
			),
			1 => 
			array (
				'id' => 2,
				'caso' => '123455-das',
				'cliente_id' => '1',
				'tipocaso_id' => 2,
				'tipojuicio' => 'Ordinario',
				'tribunal_id' => 5,
				'instancia' => 'Primera Instancia ',
				'salas_id' => 1,
				'juez_id' => '4',
				'honorarios' => NULL,
				'csj' => '',
				'ca' => '',
				'estado' => 1,
				'user_id' => 1,
				'slug' => '123455-das',
				'created_at' => '2015-08-31 18:24:16',
				'updated_at' => '2015-08-31 18:24:16',
			),
			2 => 
			array (
				'id' => 3,
				'caso' => '123455s',
				'cliente_id' => '2',
				'tipocaso_id' => 1,
				'tipojuicio' => 'Ordinario ',
				'tribunal_id' => 3,
				'instancia' => 'Primera Instancia ',
				'salas_id' => 1,
				'juez_id' => '8',
				'honorarios' => NULL,
				'csj' => '',
				'ca' => '',
				'estado' => 1,
				'user_id' => 1,
				'slug' => '123455s',
				'created_at' => '2015-08-31 18:26:22',
				'updated_at' => '2015-08-31 18:26:22',
			),
			3 => 
			array (
				'id' => 4,
				'caso' => '123455sw',
				'cliente_id' => '1',
				'tipocaso_id' => 2,
				'tipojuicio' => 'Ordinario ',
				'tribunal_id' => 5,
				'instancia' => 'Primera Instancia',
				'salas_id' => 1,
				'juez_id' => '4',
				'honorarios' => NULL,
				'csj' => '',
				'ca' => '',
				'estado' => 1,
				'user_id' => 1,
				'slug' => '123455sw',
				'created_at' => '2015-08-31 18:33:48',
				'updated_at' => '2015-08-31 18:33:48',
			),
		));
	}

}
