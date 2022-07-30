<?php

namespace Database\Seeders;

use App\Models\api\v1\Category;
use App\Models\api\v1\Post;
use App\Models\api\v1\Tag;
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
         \App\Models\User::factory(10)->create();
         Category::factory(10)->create();
         Tag::factory(10)->create();
         Post::factory(10)->create();
    }
}
