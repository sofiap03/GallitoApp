<?php

namespace Database\Seeders;

use App\Models\User;
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
        $u = new User();
        $u->name = "Sofia Piñuela";
        $u->email = "sofia@gmail.com";
        $u->password = Hash::make("hola1234");
        $u->save();

        $u = new User();
        $u->name = "Maria";
        $u->email = "maria@gmail.com";
        $u->password = Hash::make("hola2345");
        $u->save();

        $u = new User();
        $u->name = "Alguien";
        $u->email = "alguien@gmail.com";
        $u->password = Hash::make("hola6789");
        $u->save();

        /*
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
        */
    }
}
