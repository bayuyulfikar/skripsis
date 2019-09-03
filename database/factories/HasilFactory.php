<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hasil;
use Faker\Generator as Faker;

$factory->define(Hasil::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'pertanyaan_id' => $faker->randomDigitNotNull,
        'jawaban_id' => $faker->randomDigitNotNull,
        'users_id' => $faker->randomDigitNotNull
    ];
});
