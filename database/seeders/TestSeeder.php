<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'id' => $i,
                'name' => rand(5,20),
                'surname' => rand(5, 20),
                'phone' => rand(0, 10),
                'password' => rand(0, 10),
            ]);
        }
    }
}
