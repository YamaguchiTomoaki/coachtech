<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => '1',
            'item_id' => '1',
            'comment' => '使いやすいキーボードです。
配送も問題無くありがたいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '1',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '2',
            'comment' => '画像通りの商品です。
配送も問題無くありがたいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '2',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '3',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '3',
            'comment' => '他の色も出品して頂きたいです。
配送も問題無くありがたいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '4',
            'comment' => '問題無く使えました。
配送も特に文句は無いです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '4',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '5',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '5',
            'comment' => '画像通りの商品です。
配送も特に文句は無いです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '6',
            'comment' => '持ち運び安く便利です。
配送も問題無くありがたいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '6',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '7',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '7',
            'comment' => '画像通りの商品です。
配送も特に文句は無いです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '8',
            'comment' => '画像通りの商品です。
配送も特に文句は無いです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '8',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '9',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '9',
            'comment' => '画像通りの商品です。
配送も特に文句は無いです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '2',
            'item_id' => '10',
            'comment' => '画像通りの商品です。
配送も特に文句は無いです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => '1',
            'item_id' => '10',
            'comment' => '今後も利用したいです。',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('comments')->insert($param);
    }
}
