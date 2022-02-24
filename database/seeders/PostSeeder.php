<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Primer usuario
        DB::table('posts')->insert([
            'contenido' => "Comedia",
            //'likes' => 1000,
            'user_id' => 1,
        ]);

        //segundo usuario
        DB::table('posts')->insert([
            'contenido' => "Noticias",
            'user_id' => 2,
        ]);
        DB::table('posts')->insert([
            'contenido' => "Viajes",
            'user_id' => 2,
        ]);
        //tercer usuario
        DB::table('posts')->insert([
            'contenido' => "Moda",
            'user_id' => 3,
        ]);
        DB::table('posts')->insert([
            'contenido' => "Food",
            'user_id' => 3,
        ]);

    }
}
