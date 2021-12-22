<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test2',
                'email' => 'test2@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test3',
                'email' => 'test3@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test4',
                'email' => 'test4@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test5',
                'email' => 'test5@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test6',
                'email' => 'test6@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test7',
                'email' => 'test7@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test8',
                'email' => 'test8@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test9',
                'email' => 'test9@example.com',
                'password' => Hash::make('Password01'),
                'created_at' => '2021/01/01 11:11:11',
            ],
        ]);
    }
}
