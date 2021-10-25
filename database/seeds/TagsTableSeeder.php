<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['like4like', 'instastories', 'sea', 'city', 'houses', 'devlife', 'devops', 'frontend'];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
        }
    }
}
