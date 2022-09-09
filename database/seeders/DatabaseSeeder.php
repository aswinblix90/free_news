<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $roles = ['Admin','User'];
        $categories = ['Personal', 'Work', 'Hobbies'];
        foreach($roles as $role){
            Role::create([
                'name' => $role
            ]);
        }
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }
        // Role::created([
        //     'name' => $role
        // ]);
        // Post::factory(5)->create();
        // Comment::factory(2)->create([
        //     'post_id' => 1,
        //     'user_id' => 2
        // ]);
        // Comment::factory(2)->create([
        //     'post_id' => 3,
        //     'user_id' => 4
        // ]);
    }
}
