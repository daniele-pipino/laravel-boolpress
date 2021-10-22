<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // recupero categories id
        $categories_id = Category::select('id')->pluck('id')->toArray();

        // riempire db
        for ($i = 0; $i < 20; $i++) {
            // istanziamo un nuovo post
            $new_post = new Post();

            // informazioni db
            $new_post->category_id = Arr::random($categories_id);
            $new_post->title = $faker->text(50);
            $new_post->content = $faker->paragraph(2, true);
            $new_post->author = $faker->word(15);

            // salviamo su database
            $new_post->save();
        }
    }
}
