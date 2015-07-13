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
				'remember_token' => '8J9zbAuYZ1rOHfrCi4kPAoJSbXzDGXo22bHi3x4Y5ez4C9qMlNSeud3bZybV',
				'created_at' => '2015-07-06 09:46:45',
				'updated_at' => '2015-07-13 10:31:14',
			],
			1 => 
			[
				'id' => '2',
				'userstatus_id' => '1',
				'name' => 'Luis Alberto Tejada',
				'email' => 'tejada@yahoo.com',
				'password' => '$2y$10$I/pzFWJj/NbDdivQBVyte.wc3IX24rIoOyxfL3Rkh5Z8MWarx8agy',
				'remember_token' => NULL,
				'created_at' => '2015-07-13 09:39:39',
				'updated_at' => '2015-07-13 10:33:43',
			],
		]);
		$user = User::find(1); $user->roles()->attach(2);
		$user = User::find(2); $user->roles()->attach(11);
	}

}
