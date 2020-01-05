<?php

use App\Models\Category;
use App\Models\Role;
use App\Models\Slide;
use App\Models\User;
use App\Models\Video;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/** @var Factory $factory */

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    ];
});

$factory->define(Role::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->name,
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'parent_id' => 0,
        'title' => $faker->unique()->name,
    ];
});

$factory->define(Video::class, function (Faker $faker) {
    return [
        'author_id' => factory(User::class)->create()->id,
        'title' => $faker->unique()->name,
        'content' => $faker->text,
        'url' => $faker->url,
        'thumbnail' => $faker->imageUrl(1000, 570),
    ];
});

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(1920, 820),
        'link' => $faker->url,
        'title' => $faker->name,
        'description' => $faker->text,
        'button' => trans('words.watch'),
    ];
});
