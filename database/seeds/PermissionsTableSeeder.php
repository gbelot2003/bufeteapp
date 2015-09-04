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
				'id' => 14,
				'name' => 'user-full',
				'display_name' => 'User Full',
				'description' => 'Permiso para administración de usuario',
				'created_at' => '2015-07-07 17:03:55',
				'updated_at' => '2015-07-08 01:11:16',
			),
			1 => 
			array (
				'id' => 21,
				'name' => 'user-own',
				'display_name' => 'User own',
				'description' => 'Permiso para editar perfil propio',
				'created_at' => '2015-07-08 01:13:00',
				'updated_at' => '2015-07-08 01:13:00',
			),
			2 => 
			array (
				'id' => 22,
				'name' => 'rol-full',
				'display_name' => 'Rol Full',
				'description' => 'Permisos totales de administración de Roles',
				'created_at' => '2015-07-08 01:13:48',
				'updated_at' => '2015-07-08 01:13:48',
			),
			3 => 
			array (
				'id' => 23,
				'name' => 'permisos-full',
				'display_name' => 'Permisos Full',
				'description' => 'Permisos Totales para administrar "Permisos"',
				'created_at' => '2015-07-08 01:14:24',
				'updated_at' => '2015-07-08 01:57:21',
			),
			4 => 
			array (
				'id' => 24,
				'name' => 'contactos-full',
				'display_name' => 'Contactos Full',
				'description' => 'Permisos de creación, edición y eliminación de contactos',
				'created_at' => '2015-09-03 15:53:33',
				'updated_at' => '2015-09-03 15:53:33',
			),
			5 => 
			array (
				'id' => 25,
				'name' => 'clientes-full',
				'display_name' => 'Clientes Full',
				'description' => 'Permisos para creación, edición y eliminación de clientes',
				'created_at' => '2015-09-03 15:54:23',
				'updated_at' => '2015-09-03 15:54:23',
			),
			6 => 
			array (
				'id' => 26,
				'name' => 'casos-full',
				'display_name' => 'Casos Full',
				'description' => 'Permisos de creación, edición y eliminación de casos y actualizaciones',
				'created_at' => '2015-09-03 15:55:21',
				'updated_at' => '2015-09-03 15:55:21',
			),
			7 => 
			array (
				'id' => 27,
				'name' => 'casos-usuario',
				'display_name' => 'Casos Usuario',
				'description' => 'Permiso para creación y edición de casos y actualizaciones',
				'created_at' => '2015-09-03 15:56:18',
				'updated_at' => '2015-09-03 15:56:18',
			),
			8 => 
			array (
				'id' => 28,
				'name' => 'contactos-usuario',
				'display_name' => 'Contactos Usuario',
				'description' => 'Permisos para creación y edición de contactos',
				'created_at' => '2015-09-03 15:56:44',
				'updated_at' => '2015-09-03 15:56:44',
			),
		));
	}

}
