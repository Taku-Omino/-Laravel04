<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Apple'
            ],
            [
                'name' => 'Microsoft'
            ],
            [
                'name' => 'Facebook'
            ],
            [
                'name' => 'Amazon'
            ],
            [
                'name' => 'Google'
            ],
            [
                'name' => 'Google'
            ],
            [
                'name' => 'Tesla'
            ],
            [
                'name' => 'Alibaba'
            ],
            [
                'name' => 'Softbank'
            ],
            [
                'name' => 'Rakuten'
            ]
        ]);
    }
}
