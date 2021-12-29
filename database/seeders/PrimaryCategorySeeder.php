<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'キッズファッション',
                'sort_order' => 1
            ],
            [
                'name' => 'ベビーカー',
                'sort_order' => 2
            ],
            [
                'name' => '出産祝い・ギフト',
                'sort_order' => 3
            ],
        ]);
    }
}
