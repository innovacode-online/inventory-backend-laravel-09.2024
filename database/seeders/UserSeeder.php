<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "Mattias Duarte",
                "email" => "mattias@correo.com",
                "password" => Hash::make("Admin123"),
                "created_at" => Carbon::now(), 
                "updated_at" => Carbon::now(), 
            ],
            [
                "name" => "Innova Code",
                "email" => "innovacode@correo.com",
                "password" => Hash::make("Admin123"),
                "created_at" => Carbon::now(), 
                "updated_at" => Carbon::now(), 
            ],
        ]);
    }
}
