<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Jawaban;
use Faker\Generator as Faker;

$factory->define(Jawaban::class, function (Faker $faker) {

    return [
        'isi_jawaban' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'pertanyaan_id' => $faker->randomDigitNotNull
    ];
});
