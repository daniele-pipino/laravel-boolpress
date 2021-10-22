<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // categorie di post da inserire nel db
        $categories = [
            ['name' => 'Photography', 'color' => 'info'],
            ['name' => 'Food', 'color' => 'warning'],
            ['name' => 'RealEstate', 'color' => 'warning'],
            ['name' => 'stylistics', 'color' => 'primary'],
            ['name' => 'Automotive', 'color' => 'secondary'],
            ['name' => 'Tech', 'color' => 'dark']
        ];

        foreach ($categories as $category) {
            $new_category = new Category();

            $new_category->name = $category['name'];
            $new_category->color = $category['color'];
            $new_category->save();
        }
    }
}
