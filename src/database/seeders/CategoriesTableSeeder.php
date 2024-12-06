<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'category' => '衣類',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '男性用衣類',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '女性用衣類',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'ジャケット',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'シャツ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'パンツ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '精密機器',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'スマートフォン',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'パソコン',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'パソコン周辺機器',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'イヤホン',
        ];
        DB::table('categories')->insert($param);
    }
}
