<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\User;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Usersection;


class UserStudentSeeder extends Seeder
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
          "name" => "student1",
          "email" => "student1@example.com",
          "password" => Hash::make("student1"),
          "username" => "student1",
          "isActive" => true,
          "role_id" => Role::where('name','=','Student')->first()->id
        ],
        [
          "name" => "student2",
          "email" => "student2@example.com",
          "password" => Hash::make("student2"),
          "username" => "student2",
          "isActive" => true,
          "role_id" => Role::where('name','=','Student')->first()->id
        ]
      ];

      User::insert($users);

      $section = [
          "description" => "Test: section 2",
          "section" => "2",
          "subject_id" => Subject::where('name','=','Algorithm')->first()->id,
          "user_id" => User::where('username','=','testteacher')->first()->id
      ];
      Section::create($section);

      $userSection = [
        [
          "initialLevel" => 0.0,
          "user_id" => User::where('username','student1')->first()->id,
          "section_id" => Section::where('section','1')->first()->id
        ],
        [
          "initialLevel" => 0.0,
          "user_id" => User::where('username','student1')->first()->id,
          "section_id" => Section::where('section','2')->first()->id
        ],
        [
          "initialLevel" => 0.0,
          "user_id" => User::where('username','student2')->first()->id,
          "section_id" => Section::where('section','1')->first()->id
        ],
        [
          "initialLevel" => 0.0,
          "user_id" => User::where('username','student2')->first()->id,
          "section_id" => Section::where('section','2')->first()->id
        ]
      ];

      Usersection::insert($userSection);
    }
}
