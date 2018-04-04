<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Post::create([
       'name' => 'Abigail',
       'image' => '/image/m4.jpeg',
       'city' => 'Kurukshetra',
       'created_at' => date('Y-m-d H:i:s'),
       'updated_at' => date('Y-m-d H:i:s'),
      ]);

    }
}
