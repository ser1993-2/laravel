<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('qb_users')->insert([
            ['name' => "Иван", 'lastname' => 'Петров', 'city' => 'Волгоград'],
            ['name' => "Игорь", 'lastname' => 'Иванов', 'city' => 'Астрахань'],
            ['name' => "Степан", 'lastname' => 'Рябцев', 'city' => 'Волгоград'],
            ['name' => "Никита", 'lastname' => 'Степнов', 'city' => 'Самара'],
            ['name' => "Сергей", 'lastname' => 'Сидоров', 'city' => 'Волгоград'],
            ['name' => "Наташа", 'lastname' => 'Сергеева', 'city' => 'Москва'],
            ['name' => "Оксана", 'lastname' => 'Степцова', 'city' => 'Волгоград'],
            ['name' => "Лера", 'lastname' => 'Огородова', 'city' => 'Владивосток'],
            ['name' => "Виктор", 'lastname' => 'Береза', 'city' => 'Волгоград'],
            ['name' => "Николай", 'lastname' => 'Медведев', 'city' => 'Самара'],
        ]);

        DB::table('qb_products')->insert([
            ['name' => "Чайник простой", 'price' => 4000],
            ['name' => "Самовар на углях", 'price' => 5000],
            ['name' => "Телевизор 102", 'price' => 2000],
            ['name' => "Холодильник 5 камерный", 'price' => 15000],
            ['name' => "Тостер ручной", 'price' => 5000],
            ['name' => "Утюг 1Вт", 'price' => 8000],
            ['name' => "Кофемашнка капсульная", 'price' => 2000],
        ]);


        for ($i = 1 ; $i < 100 ; $i++) {

            $userId = rand(1, 10);

            DB::table('qb_raiting')->insert([
                ['product_id' => rand(1, 7), 'comment_id' => $i, 'user_id' => $userId, 'raiting' => rand(3, 5)],

            ]);

            DB::table('qb_comment')->insert([
                ['user_id' => $userId, 'product_id' => rand(1, 7), 'comment' => str_random(20), 'like' => rand(1, 10)],

            ]);
        }

    }
}