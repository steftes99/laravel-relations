<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            $newPost = new Post();

            $newPost->title = 'Post numero ' . ($i + 1);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->content = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias deserunt, 
                                consequatur recusandae aut eaque fugit, impedit, omnis explicabo magnam ratione culpa vitae 
                                tempora minus tenetur ad. Laboriosam voluptatibus optio soluta.';

            $newPost->save();
        }
    }
}
