<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert([
			0 => 
			[
				'id' => '1',
				'userstatus_id' => '1',
				'name' => 'Gerardo Belot',
				'email' => 'gbelot2003@hotmail.com',
				'password' => '$2y$10$OpcKFzqU1hgb53IIKvkKUu3yj9T7OQw5gbPqEN/CjNAGagL5NNUEq',
				'remember_token' => 'wqkKOjK5LEDZnmlBqZWKkSTEqcNlHhEvXNWB77ekdH018tATdkDAsrPE8MsP',
				'created_at' => '2015-07-06 09:46:45',
				'updated_at' => '2015-07-06 11:29:18',
			],
		]);

		$user = User::find(1); $user->roles()->attach(2);
	}

}
