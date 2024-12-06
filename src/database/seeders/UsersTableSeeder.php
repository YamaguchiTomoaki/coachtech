<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => '出品者太郎',
            'email' => 'seller@gmail.com',
            'password' => Hash::make('seller1'),
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '出品者次郎',
            'email' => 'seller2@gmail.com',
            'password' => Hash::make('seller2'),
            'created_at' => '2024-01-01 11:11:11',
            'updated_at' => '2024-01-01 11:11:11',
        ];
        DB::table('users')->insert($param);
    }
}
