<?php

use App\Models\Role;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
			["name" => "Administrator",
			 "description" => ""],
			["name" => "Instructor",
			 "description" => ""],
			["name" => "Student",
			 "description" => ""]
		];
		
		foreach ($roles as $role){
			Role::create($role);
		}
    }
}
