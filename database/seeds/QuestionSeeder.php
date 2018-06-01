<?php

use Illuminate\Database\Seeder;
use App\Model\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'What type of Refrigerator do you have?', 
            'What animal would be cutest if scaled down to the size of a cat?', 
            'What weird food combinations do you really enjoy?', 
            'What are some red flags to watch out for in daily life?'
        ];

        $options =  json_encode([
            ['lable' => 'One', 'value' => 1 ],
            ['lable' => 'two',  'value' => 2 ],
            ['lable' => 'three', 'value' => 3 ]
        ]);

        foreach ($datas as $key => $value) {
        	
        	Question::create(['title'=> $value, 'options' => $options]);

        }
    }
}
