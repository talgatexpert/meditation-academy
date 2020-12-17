<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => str_replace(['@example.com', '@example.org', '@example.net'], '@asyakin.ru', $faker->unique()->safeEmail),
        'password' => '123456',
        'active' => Arr::random([0, 1]),
        'role' => Arr::random([User::ROLE_ADMIN, User::ROLE_MANAGER, User::ROLE_CURATOR, User::ROLE_GUEST, User::ROLE_ADMINISTRATOR]),
        'name' => $faker->firstName . ' ' . $faker->lastName,
    ];
});
