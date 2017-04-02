<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject =
          ["name" => "Algorithm",
          "description" => "Algorithm",
          "sectionsNo" => 2,
          "isActive" => 1];

          Subject::create($subject);
    }
}
