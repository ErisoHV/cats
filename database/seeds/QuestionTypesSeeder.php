<?php
use App\Models\Questiontype;
use Illuminate\Database\Seeder;

class QuestionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$questionTypes = [
			["name" => "True/False",
				"description" => "In response to a question (that may include an image), 
				the respondent selects from two options: True or False.",
				"maxAnswerNo" => 2],
			["name" => "Multiple Choice (one answer)",
				"description" => "Ask your respondent to choose one answer
				from your list of answer choices.",
				"maxAnswerNo" => 10]
		];
		
		foreach ($questionTypes as $type){
			Questiontype::create($type);
		}
		
    }
}
