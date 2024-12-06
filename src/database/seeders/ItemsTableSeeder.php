<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => 1,
            'condition_id' => 1,
            'name' => 'キーボード',
            'description' => 'PC用キーボード(黒)
新品
商品の状態は良好です。
購入後、即配送いたします。',
            'price' => '3000',
            'image' => 'キーボード.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'condition_id' => 2,
            'name' => 'シンプルなパンツ',
            'description' => 'パンツ(灰色)
未使用品
商品の状態は普通です。
購入後、即配送いたします。',
            'price' => '2500',
            'image' => 'シンプルなパンツ.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'condition_id' => 3,
            'name' => 'スマートフォン',
            'description' => 'スマートフォン(赤)
中古品
商品の状態は悪いです。
購入後、1,2週間後に発送いたします。',
            'price' => '20000',
            'image' => 'スマートフォン.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'condition_id' => 1,
            'name' => 'モニター',
            'description' => 'デスクトップ用モニター
新品
商品の状態は良好です。
購入後、1週間後に発送いたします。',
            'price' => '35000',
            'image' => 'デスクトップ用モニター.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'condition_id' => 2,
            'name' => 'デニム',
            'description' => 'デニム
未使用品
商品の状態は普通です。
購入後、即配送いたします。',
            'price' => '4000',
            'image' => 'デニム.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 2,
            'condition_id' => 1,
            'name' => 'ノートパソコン',
            'description' => 'ノートパソコン
新品
商品の状態は良好です。
購入後、1週間後に発送いたします。',
            'price' => '70000',
            'image' => 'ノートパソコン.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 2,
            'condition_id' => 2,
            'name' => 'レディースシャツ',
            'description' => 'レディースシャツ(ピンク)
未使用品
商品の状態は普通です。
購入後、即配送いたします。',
            'price' => '3300',
            'image' => 'レディースシャツピンク.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 2,
            'condition_id' => 1,
            'name' => 'ワイヤレスイヤホン',
            'description' => 'ワイヤレスイヤホン(黒)
新品
商品の状態は良好です。
購入後、1ヶ月以内に発送いたします。',
            'price' => '30000',
            'image' => 'ワイヤレスイヤホン.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 2,
            'condition_id' => 1,
            'name' => '女性用ジャケット',
            'description' => '女性用ジャケット
新品
商品の状態は良好です。
購入後、1ヶ月以内に発送いたします。',
            'price' => '7000',
            'image' => '女性用ジャケット.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 2,
            'condition_id' => 3,
            'name' => 'シャツ',
            'description' => 'シャツ(白)
中古品
商品の状態は悪いです。
購入後、1週間後に発送いたします。',
            'price' => '1000',
            'image' => '白いシャツ.jpg',
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('items')->insert($param);
    }
}
