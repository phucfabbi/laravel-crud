<?php
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
    	'user_id' => factory(App\User::class)->create()->id, //Foreign Key Constraints
        'title' => $faker->state,
        'content' => Str::random(3),
    ];
});
