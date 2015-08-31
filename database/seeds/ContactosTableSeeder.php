<?php

use Illuminate\Database\Seeder;

class ContactosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('contactos')->delete();
        
		\DB::table('contactos')->insert(array (
			0 => 
			array (
				'id' => 1,
				'type' => 'Relacionado a Caso',
				'name' => 'Luis Alberto Quiñones',
				'cargo' => '',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 14:54:29',
				'updated_at' => '2015-08-31 14:54:47',
			),
			1 => 
			array (
				'id' => 2,
				'type' => 'Relacionado a Caso',
				'name' => 'José Luis Lopez Guitierrez',
				'cargo' => '',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 14:55:02',
				'updated_at' => '2015-08-31 14:55:02',
			),
			2 => 
			array (
				'id' => 3,
				'type' => 'Juez',
				'name' => 'Alberto Escobar',
				'cargo' => '',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 14:55:19',
				'updated_at' => '2015-08-31 14:55:19',
			),
			3 => 
			array (
				'id' => 4,
				'type' => 'Juez',
				'name' => 'Luis Manzanares',
				'cargo' => '',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 14:55:40',
				'updated_at' => '2015-08-31 14:55:40',
			),
			4 => 
			array (
				'id' => 5,
				'type' => 'Relacionado a Caso',
				'name' => 'Felipe Urquia',
				'cargo' => '',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 14:55:53',
				'updated_at' => '2015-08-31 14:56:53',
			),
			5 => 
			array (
				'id' => 6,
				'type' => 'Relacionado a Caso',
				'name' => 'Luis Toro',
				'cargo' => '',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 14:56:08',
				'updated_at' => '2015-08-31 14:56:48',
			),
			6 => 
			array (
				'id' => 7,
				'type' => 'Relacionado a Caso',
				'name' => 'Mario Turcios',
				'cargo' => '',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 14:56:22',
				'updated_at' => '2015-08-31 14:56:45',
			),
			7 => 
			array (
				'id' => 8,
				'type' => 'Juez',
				'name' => 'Efrain Amador',
				'cargo' => '',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 14:56:39',
				'updated_at' => '2015-08-31 14:56:39',
			),
			8 => 
			array (
				'id' => 9,
				'type' => 'Juez',
				'name' => 'Johani Fonzeca',
				'cargo' => 'Juez',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 18:42:41',
				'updated_at' => '2015-08-31 18:42:41',
			),
			9 => 
			array (
				'id' => 10,
				'type' => 'Juez',
				'name' => 'Mariano Tejada',
				'cargo' => 'Juez',
				'phone' => '',
				'movil' => '',
				'email' => '',
				'notes' => '',
				'created_at' => '2015-08-31 18:43:00',
				'updated_at' => '2015-08-31 18:43:00',
			),
		));
	}

}
