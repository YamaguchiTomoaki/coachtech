<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Item_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'item_id' => 1,
            'category_id' => 7,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 1,
            'category_id' => 10,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 2,
            'category_id' => 1,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 2,
            'category_id' => 6,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 3,
            'category_id' => 7,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 3,
            'category_id' => 8,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 4,
            'category_id' => 7,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 4,
            'category_id' => 10,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 5,
            'category_id' => 1,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 6,
            'category_id' => 7,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 6,
            'category_id' => 9,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 7,
            'category_id' => 1,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 7,
            'category_id' => 3,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 7,
            'category_id' => 5,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 8,
            'category_id' => 7,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 8,
            'category_id' => 11,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 9,
            'category_id' => 1,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 9,
            'category_id' => 3,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 9,
            'category_id' => 4,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 10,
            'category_id' => 1,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);

        $param = [
            'item_id' => 10,
            'category_id' => 5,
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('item_category')->insert($param);
    }
}
