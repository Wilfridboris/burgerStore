<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class InsertTypeBurger extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('type_burgers')->insert(
            ['img_burger'=>'burger_meat.png',
            'topic_burger'=>'Fish Burger',
            ]);
            DB::table('type_burgers')->insert(
                ['img_burger'=>'burger_meat.png',
                'topic_burger'=>'Meat Burger',
                ]);
        DB::table('type_burgers')->insert(
                ['img_burger'=>'burger_meat.png',
                'topic_burger'=>'Vegan Burger',
                ]);
       
        DB::table('type_burgers')->insert(
                        ['img_burger'=>'drink.png',
                        'topic_burger'=>'Drink ',
                        ]);
                        DB::table('type_burgers')->insert(
                            ['img_burger'=>'fries.png',
                            'topic_burger'=>'Fries ',
                            ]);
                            DB::table('type_burgers')->insert(
                                ['img_burger'=>'combo.png',
                                'topic_burger'=>'Combo ',
                                ]);
           
       
    }
}
