<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alumni;
use Faker\Generator as Faker;

$factory->define(Alumni::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'jenis_kelamin' => $faker->word,
        'agama' => $faker->word,
        'alamat' => $faker->text,
        'nomer_handphone' => $faker->word,
        'email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'users_id' => $faker->randomDigitNotNull
    ];
});
