<?php

use Illuminate\Database\Seeder;

class InsertBurger extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        DB::table('burgers')->insert(
            ['img'=>'burger_meat.png',
            'topic'=>'Double Cheese Burger',
            'price'=>5,
            'type_burger'=>1,
            'ingredients'=>json_encode(['tomate','onion','pepee','garlic']),
            'description'=>'this is description 1',
            'qty'=>1,

            ]);
            DB::table('burgers')->insert(
                ['img'=>'burger_meat.png',
                'topic'=>'garlic Cheese Burger',
                'price'=>5,
                'type_burger'=>1,
                'ingredients'=>json_encode(['tomate','onion','pelic','garlic']),
                'description'=>'this is description 2',
                'qty'=>1,
    
                ]);
                DB::table('burgers')->insert(
                    ['img'=>'burger_meat.png',
                    'topic'=>'Simple Cheese Burger',
                    'price'=>5,
                    'type_burger'=>1,
                    'ingredients'=>json_encode(['tomate','onion','anans','garlic']),
                    'description'=>'this is description 3',
                    'qty'=>1
        
                    ]);
                    DB::table('burgers')->insert(
                        ['img'=>'burger_meat.png',
                        'topic'=>'fries Cheese Burger',
                        'price'=>5,
                        'type_burger'=>1,
                        'ingredients'=>json_encode(['tomate','onion','anans','garlic']),
                        'description'=>'this is description 4',
                        'qty'=>1
            
                        ]);
                        DB::table('burgers')->insert(
                            ['img'=>'burger_meat.png',
                            'topic'=>'vegan Cheese Burger',
                            'price'=>5,
                            'type_burger'=>1,
                            'ingredients'=>json_encode(['tomate','onion','anans','garlic']),
                            'description'=>'this is description 5',
                            'qty'=>1
                
                            ]);
           
    }
}
