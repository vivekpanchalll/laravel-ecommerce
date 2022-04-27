<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
                'price'=>'500',
                'description'=>'a smartphone with 8gb with much more features',
                'category'=>'mobile',
                'gallery'=>'https://www.shutterstock.com/image-photo/bangkok-thailand-oppo-launch-new-smartphone-1665709831',
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'1500',
                'description'=>'a smart tv with much more feature',
                'category'=>'tv',
                'gallery'=>'https://www.shutterstock.com/image-photo/flatscreen-tv-set-displaying-logo-panasonic-1906816321',
            ],
            [
                'name'=>'Sony tv',
                'price'=>'2000',
                'description'=>'a smartphone with much more features',
                'category'=>'mobile',
                'gallery'=>'https://www.shutterstock.com/image-photo/poznan-pol-feb-04-2020-flatscreen-1785293561',
            ],
            [
                'name'=>'LG fridge',
                'price'=>'100',
                'description'=>'a fridge with much more features',
                'category'=>'fridge',
                'gallery'=>'https://image3.mouthshut.com/images/Restaurant/Photo/-41093_182696.jpg',
            ],
        ]);
    }
}
