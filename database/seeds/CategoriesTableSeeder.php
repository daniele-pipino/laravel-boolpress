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
        $category_names = ['Photography', 'Food', 'RealEstate', 'stylistics', 'Automotive', 'Tech'];

        foreach ($category_names as $name) {
            $category = new Category();

            $category->name = $name;

            $category->save();
        }
    }
}
