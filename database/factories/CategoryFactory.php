<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->words(3, true);
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'), //встроенный метод для замены недопустивых в URL адресе символов
        'img' => 'https://loremflickr.com/320/240'
    ];
});

//php artisan make:model Product -mf   создаем сразу модель, фабрику и миграцию
