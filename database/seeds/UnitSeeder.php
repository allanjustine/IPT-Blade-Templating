<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=> "kilograms",
                'description'=>'English weight Unit',
            ],
            [
                'unit_type'=> "pieces",
                'description'=>'Piece by piece items',
            ],
            [
                'unit_type'=> "bottles",
                'description'=>'Unit for the bottled beverages',
            ],
            [
                'unit_type'=> "dozens",
                'description'=>'Units of group of twelve',
            ],
            [
                'unit_type'=> "bunch",
                'description'=>'Unit of items in bunch',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}