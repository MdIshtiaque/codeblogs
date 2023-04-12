<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = [
            [

                'title' => 'How to define route group name in laravel',
                'describtion' => 'Is there any way to define the name of route group in laravel?
                                  What Im trying to accomplish by this is to know that the current
                                  request belongs to which group so I can make active the main menu
                                  and sub menu by the current route action: ',
                'image' => 'example.png',
                'amount' => 20.0
            ]
        ];

        Post::insert($post);
    }
}
