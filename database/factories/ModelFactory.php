<?php

use Bitporch\Forum\Models\Discussion;
use Bitporch\Forum\Models\Group;
use Bitporch\Forum\Models\Post;
use Bitporch\Tests\Stubs\Models\User;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Discussion::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6),
        'slug'  => $faker->word,
    ];
});

$factory->define(Group::class, function (Faker\Generator $faker) {
    return [
        'name'  => $faker->word,
        'slug'  => $faker->word,
        'color' => $faker->hexcolor,
    ];
});

$factory->define(Post::class, function (Faker\Generator $faker) {
    return [
        'discussion_id' => factory(Discussion::class),
        'user_id'       => factory(config('forum.user')),
        'content'       => $faker->text,
    ];
});

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
