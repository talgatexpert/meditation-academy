<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Participant;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Participant::class, function (Faker $faker) {
    // Формируем список доступных кураторов только один раз
    static $curators = null;
    if (is_null($curators)) {
        $curators = User::active()->curator()->pluck('id')->toArray();
    }

    $isVerified = Arr::random([0, 1]);
    $hasCurator = $isVerified && is_array($curators) && count($curators) ? Arr::random([0, 1]) : 0;

    return [
        'name' => $faker->unique()->firstName,
        'email' => str_replace(['@example.com', '@example.org', '@example.net'], '@asyakin.ru', $faker->unique()->safeEmail),
        'avatar' => url('assets/img/avatar-' . rand(1, 24) . '.svg'),
        'step' => $isVerified ? Arr::random([1, 2, 3, 4, 5, 6, 7]) : 0,
        'step_assigned_at' => $isVerified ? now() : null,
        'curator_id' => $hasCurator ? Arr::random($curators) : null,
        'curator_assigned_at' => $hasCurator ? now() : null,
        'verified_at' => $isVerified ? now() : null,
    ];
});
