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

        str_random(10);

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
            ['name' => "Телевизор 102", 'price' => 10000],
            ['name' => "Холодильник 5 камерный", 'price' => 15000],
            ['name' => "Тостер ручной", 'price' => 5000],
            ['name' => "Утюг 1Вт", 'price' => 8000],
            ['name' => "Кофемашнка капсульная", 'price' => 10000],
        ]);

        DB::table('qb_raiting')->insert([
            ['product_id' => 4, 'comment_id' => 1 , 'raiting' => 3],
            ['product_id' => 5, 'comment_id' => 4 , 'raiting' => 4],
            ['product_id' => 6, 'comment_id' => 3 , 'raiting' => 3],
            ['product_id' => 7, 'comment_id' => 4 , 'raiting' => 5],
            ['product_id' => 8, 'comment_id' => 5 , 'raiting' => 3],
            ['product_id' => 9, 'comment_id' => 4 , 'raiting' => 5],
            ['product_id' => 4, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 5, 'comment_id' => 1 , 'raiting' => 4],
            ['product_id' => 6, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 7, 'comment_id' => 8 , 'raiting' => 5],
            ['product_id' => 8, 'comment_id' => 5 , 'raiting' => 3],
            ['product_id' => 9, 'comment_id' => 4 , 'raiting' => 5],
            ['product_id' => 9, 'comment_id' => 4 , 'raiting' => 5],
            ['product_id' => 4, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 5, 'comment_id' => 5 , 'raiting' => 4],
            ['product_id' => 6, 'comment_id' => 5 , 'raiting' => 3],
            ['product_id' => 7, 'comment_id' => 4 , 'raiting' => 5],
            ['product_id' => 8, 'comment_id' => 5 , 'raiting' => 3],
            ['product_id' => 9, 'comment_id' => 5 , 'raiting' => 5],
            ['product_id' => 4, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 5, 'comment_id' => 4 , 'raiting' => 4],
            ['product_id' => 6, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 7, 'comment_id' => 6 , 'raiting' => 5],
            ['product_id' => 8, 'comment_id' => 5 , 'raiting' => 3],
            ['product_id' => 9, 'comment_id' => 4 , 'raiting' => 5],
            ['product_id' => 4, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 5, 'comment_id' => 4 , 'raiting' => 4],
            ['product_id' => 6, 'comment_id' => 5 , 'raiting' => 3],
            ['product_id' => 7, 'comment_id' => 4 , 'raiting' => 5],
            ['product_id' => 8, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 9, 'comment_id' => 3 , 'raiting' => 5],
            ['product_id' => 9, 'comment_id' => 5 , 'raiting' => 5],
            ['product_id' => 4, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 5, 'comment_id' => 4 , 'raiting' => 4],
            ['product_id' => 6, 'comment_id' => 5 , 'raiting' => 3],
            ['product_id' => 7, 'comment_id' => 4 , 'raiting' => 5],
            ['product_id' => 8, 'comment_id' => 4 , 'raiting' => 3],
            ['product_id' => 9, 'comment_id' => 5 , 'raiting' => 5],
        ]);

        DB::table('qb_comment')->insert([
            ['user_id' => 3, 'product_id' => 4, 'comment' => 'доволен'  , 'like' => 0],
            ['user_id' => 4, 'product_id' => 5, 'comment' => 'так себе' , 'like' => 11],
            ['user_id' => 5, 'product_id' => 5, 'comment' => 'очень плохо'  , 'like' => 0],
            ['user_id' => 6, 'product_id' => 6, 'comment' => 'средне' , 'like' => 0],
            ['user_id' => 7, 'product_id' => 7, 'comment' => 'можно было лучше' , 'like' => 12],

        ]);

    }
}
