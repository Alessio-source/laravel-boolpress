<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $arr = [
            "HTML",
            "CSS",
            "JavaScript",
            "PHP",
            "Laravel"
        ];

        foreach ($arr as $item) {
            $tag = new Tag();
            $tag->name = $item;
            $tag->slug = strtolower($item);

            $tag->save();
        }
    }
}
