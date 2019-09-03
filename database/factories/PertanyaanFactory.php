<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pertanyaan;
use Faker\Generator as Faker;

$factory->define(Pertanyaan::class, function (Faker $faker) {

    return [
        'isi_pertanyaan' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
