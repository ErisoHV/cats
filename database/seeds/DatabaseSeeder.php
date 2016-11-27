<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  		Eloquent::unguard();
  		$this->call("RoleSeeder");
  		$this->call("QuestionTypesSeeder");
  		$this->call("UserSeeder");
      $this->call("SubjectSeeder");
      $this->call("SectionSeeder");
  		Eloquent::reguard();
    }
}
