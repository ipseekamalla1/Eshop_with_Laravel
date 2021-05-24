<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //products::truncate();
       // Category::truncate();
        \App\Models\User::factory(10)->create();
       $category =  \App\Models\Category::create([
                'category_name' => 'Accessories',
                'category_desc' => 'This category contains accessories'
        ]);

        products::factory(5)->create([
            'category_id' => 3
        ]);
    }
}
