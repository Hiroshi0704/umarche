<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => '店名が入ります',
                'information' => 'お店の情報が入ります。お店の情報が入ります。お店の情報が入ります。お店の情報が入ります。お店の情報が入ります。お店の情報が入ります。',
                'filename' => '',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => '店名が入ります',
                'information' => 'お店の情報が入ります。お店の情報が入ります。お店の情報が入ります。お店の情報が入ります。お店の情報が入ります。お店の情報が入ります。',
                'filename' => '',
                'is_selling' => true,
            ],
        ]);
        //
    }
}
