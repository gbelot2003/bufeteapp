<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    	$this->call('DepartamentoTableSeeder');
    	$this->call('MunicipioTableSeeder');
    	$this->call('UserstatusesTableSeeder');
		$this->call('TipoCasosTableSeeder');
		$this->call('PermissionsTableSeeder');
		$this->call('RolesTableSeeder');
    	$this->call('UsersTableSeeder');
		$this->call('ClientesTableSeeder');
		$this->call('TribunalesTableSeeder');
	}

}
