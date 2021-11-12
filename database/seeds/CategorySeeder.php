<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=> "Beverages",
                'description'=>'All drinkable items',
            ],
            [
                'category'=> "Medicine",
                'description'=>'All drinkable items',
            ],
            [
                'category'=> "Food",
                'description'=>'All food items',
            ],
            [
                'category'=> "Accessories",
                'description'=>'All personal accessories items',
            ],
            [
                'category'=> "Condiments",
                'description'=>'All condiment items',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
