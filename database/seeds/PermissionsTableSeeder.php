<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('permissions')->delete();
        
		\DB::table('permissions')->insert(array (
			0 => 
			array (
				'id' => '14',
				'name' => 'user-full',
				'display_name' => 'User Full',
				'description' => 'Permiso para administración de usuario',
				'created_at' => '2015-07-07 17:03:55',
				'updated_at' => '2015-07-08 01:11:16',
			),
			1 => 
			array (
				'id' => '21',
				'name' => 'user-own',
				'display_name' => 'User own',
				'description' => 'Permiso para editar perfil propio',
				'created_at' => '2015-07-08 01:13:00',
				'updated_at' => '2015-07-08 01:13:00',
			),
			2 => 
			array (
				'id' => '22',
				'name' => 'rol-full',
				'display_name' => 'Rol Full',
				'description' => 'Permisos totales de administración de Roles',
				'created_at' => '2015-07-08 01:13:48',
				'updated_at' => '2015-07-08 01:13:48',
			),
			3 => 
			array (
				'id' => '23',
				'name' => 'permisos-full',
				'display_name' => 'Permisos Full',
				'description' => 'Permisos Totales para administrar "Permisos"',
				'created_at' => '2015-07-08 01:14:24',
				'updated_at' => '2015-07-08 01:57:21',
			),
		));
	}

}
