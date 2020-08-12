<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"Admin",
            "username"=>"admin",
            "password"=>Hash::make("admin")
         ]);
        DB::table('users')->insert([
            "name"=>"User",
            "username"=>"user",
            "password"=>Hash::make("123")
         ]);
    }
}
