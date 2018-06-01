<?php

use Illuminate\Database\Seeder;
use App\Model\MainCategory;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
        	'Recommended Services', 'Health & Wellness', 'Home Cleaning', 'Repairs', 'Shifting Homes', 'Home Design & Construction', 'Wedding Services', 'Party and Event Services', 'Help For Your Business'
        ];

        foreach ($datas as $key => $value) {
        	
        	MainCategory::create(['name'=> $value, 'slug' => str_slug($value, '-')]);

        }
    }
}
