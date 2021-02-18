<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 4; $i++) {
            $comment = new Comment();
            $comment->post_id = $i;
            $comment->comment = $faker->text(50);
            $comment->author = $faker->name();
            $comment->save();
        }
    }
}
