<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Section;
use App\Models\User;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $section = [
            "description" => "Test: section 1",
            "section" => "1",
            "subject_id" => Subject::where('name','=','Algorithm')->first()->id,
            "user_id" => User::where('username','=','testteacher')->first()->id
        ];
        Section::create($section);
    }
}
