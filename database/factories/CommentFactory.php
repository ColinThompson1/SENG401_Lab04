<?php

use Faker\Generator as Faker;


/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Comment::class, function (Faker $faker, $attrib = array ('book_id')) {
    $user = App\Models\User::all()->random();
    return [
        'book_id' => $attrib['book_id'],
        'user_id' => $user['id'],
        'text' => $faker->paragraph($nbSentences = 1),
    ];
});
