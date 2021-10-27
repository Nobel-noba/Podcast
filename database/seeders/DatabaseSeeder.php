<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\About::factory(1)->create();
        \App\Models\Blog::factory(100)->create();
        \App\Models\Channel::factory(10)->create();
        \App\Models\Comment::factory(300)->create();
        \App\Models\Feedback::factory(100)->create();
        \App\Models\Podcast::factory(100)->create();
        \App\Models\Reply::factory(1000)->create();
        \App\Models\Saved::factory(100)->create();
        \App\Models\Subscribe::factory(100)->create();
        
    }
}
