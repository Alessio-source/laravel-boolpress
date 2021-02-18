<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\InfoPost;

class InfoPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 4; $i++) {
            $info = new InfoPost();
            $info->post_id = $i;
            $info->save();
        }
    }
}
