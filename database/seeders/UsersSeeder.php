<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Sofia",
            'email' => "sofia@gmail.com",
            'password' => Hash::make("hola1234"),
        ]);

        DB::table('users')->insert([
            'name' => "Ricardo Muñoz",
            'email' => "ricardo@gmail.com",
            'password' => Hash::make("hola5678"),
        ]);
        DB::table('users')->insert([
            'name' => "Maria",
            'email' => "maria@gmail.com",
            'password' => Hash::make("hola2345"),
        ]);
    }
}
