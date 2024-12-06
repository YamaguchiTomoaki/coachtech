<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'condition' => '良好',
        ];
        DB::table('conditions')->insert($param);

        $param = [
            'condition' => '普通',
        ];
        DB::table('conditions')->insert($param);

        $param = [
            'condition' => '悪い',
        ];
        DB::table('conditions')->insert($param);
    }
}
