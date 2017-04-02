<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Concept;


class ConceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $topic = Topic::where('name','=','Topic 1: Algorithm')->
                      first()->id;

      $concepts =[
        ["name" => "Concept 1: What is Algorithms?",
        "description" => "Algorithm",
        "topic_id" => $topic
        ],
        ["name" => "Concept 2: 	Computer algorithms",
        "description" => "	Computer algorithms",
        "topic_id" => $topic
        ]
      ];

      foreach ($concepts as $concept) {
        Concept::create($concept);
      }

    }
}
