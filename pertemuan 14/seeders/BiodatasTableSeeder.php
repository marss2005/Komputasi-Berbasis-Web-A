<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('biodata')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'gender' => 'male',
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'gender' => 'female',
                'updated_at' => now(),
            ],
        ]);
    }
}