<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
        	'Home Cleaning', 'Mechanic', 'Beautician', 'Dancers', 'Carpenter', 'Computer Technician', 'CCTV Install', 'Pest Control', 'Sweeping', 'Toilet Cleaning', 'Window Mirror', 'Sink Cleaning', 'Wedding Photography', 'Pre Wedding Shoot', 'Wedding Planner', 'Bridal Makeup'
        ];

        foreach ($datas as $key => $value) {
        	
        	Category::create(['name'=>$value, 'slug' => str_slug($value, '-')]);

        }

    }
}
