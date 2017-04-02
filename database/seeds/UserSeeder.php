<?php

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
			[
				"name" => "SuperUser",
				"email" => "superuser@example.com",
				"password" => Hash::make("superuser"),
				"username" => "SuperUser",
				"isActive" => true,
				"role_id" => Role::where('name','=','Administrator')->first()->id
			],
      [
        "name" => "TestTeacher",
				"email" => "TestTeacher@example.com",
				"password" => Hash::make("testteacher"),
				"username" => "testteacher",
				"isActive" => true,
				"role_id" => Role::where('name','=','Instructor')->first()->id
      ]
		];
		foreach ($users as $user){
			User::create($user);
		}
    }
}
