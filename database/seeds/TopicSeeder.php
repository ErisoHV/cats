<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Topic;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $topic =
        ["name" => "Topic 1: Algorithm",
        "description" => "Algorithm",
        "subject_id" => Subject::where('name','=','Algorithm')->first()->id
      ];

        Topic::create($topic);
    }
}
