<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('roles')->delete();
        
		\DB::table('roles')->insert([
			0 => 
			[
				'id' => '2',
				'name' => 'administradores',
				'display_name' => 'Administradores',
				'description' => 'Prueba de creación de administrador',
				'created_at' => '2015-07-11 22:16:35',
				'updated_at' => '2015-07-12 19:26:08',
			],
			1 => 
			[
				'id' => '11',
				'name' => 'abogados',
				'display_name' => 'Abogados',
				'description' => 'Rol de Abogados',
				'created_at' => '2015-07-12 19:26:44',
				'updated_at' => '2015-07-12 19:26:44',
			],
		]);

		$rol = Role::findOrFail(2); $rol->perms()->sync(array(14, 21, 22, 23));
		$rol = Role::findOrFail(11); $rol->perms()->sync(array(22, 23));

	}

}
