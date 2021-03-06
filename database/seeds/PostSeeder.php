<?php
use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 7; $i++) {
          $newPost = new Post;
          $newPost->user_id = User::inRandomOrder()->first()->id;
          $newPost->title = $faker->sentence(3);
          $newPost->content = $faker->text(300);
          $newPost->slug = Str::slug($newPost->title) . rand(1, 1000);
          $newPost->updated_at = Carbon::now();
          $newPost->save();
        }
    }
}
