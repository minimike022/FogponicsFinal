<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([[
            "role"=> "user",
            "email"=> "minimike156@gmail.com",
            "password"=> bcrypt("aaaa"),
        ], 
        [
            "role" => "admin",
            "email"=>"samantha@gmail.com",
            "password"=> bcrypt("ssss"),
        ]]
    );
    }
}
