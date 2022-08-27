<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "username" => 'fahad'.rand(),
            "email" => 'fahad@gmail.com'.rand(),
            "email_verified_at" =>  date("Y-m-d H:i:s"),
            "password" => Hash::make('12345678'.rand()),
            "remember_token" => '',
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
            						
        ]);
        DB::table('users')->insert([
            "username" => 'fahad'.rand(),
            "email" => 'fahad@gmail.com'.rand(),
            "email_verified_at" =>  date("Y-m-d H:i:s"),
            "password" => Hash::make('12345678'.rand()),
            "remember_token" => '',
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
            						
        ]);
        DB::table('users')->insert([
            "username" => 'fahad'.rand(),
            "email" => 'fahad@gmail.com'.rand(),
            "email_verified_at" =>  date("Y-m-d H:i:s"),
            "password" => Hash::make('12345678'.rand()),
            "remember_token" => '',
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
            						
        ]);
        DB::table('users')->insert([
            "username" => 'fahad'.rand(),
            "email" => 'fahad@gmail.com'.rand(),
            "email_verified_at" =>  date("Y-m-d H:i:s"),
            "password" => Hash::make('12345678'.rand()),
            "remember_token" => '',
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
            						
        ]);
    }
}
