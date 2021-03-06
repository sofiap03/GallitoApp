<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post();
        $p->content = "Cualquier cosa #1";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "Cualquier cosa #2";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "Cualquier cosa #3";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "Cualquier cosa #4";
        $p->user_id = 2;
        $p->save();

        $p = new Post();
        $p->content = "Cualquier cosa #5";
        $p->user_id = 2;
        $p->save();

        $p = new Post();
        $p->content = "Cualquier cosa #6";
        $p->user_id = 3;
        $p->save();


        //Primer usuario
        /*
        DB::table('posts')->insert([
            'content' => "Comedia",
            //'likes' => 1000,
            'user_id' => 1,
        ]);

        //segundo usuario
        DB::table('posts')->insert([
            'content' => "Noticias",
            'user_id' => 2,
        ]);
        DB::table('posts')->insert([
            'content' => "Viajes",
            'user_id' => 2,
        ]);
        //tercer usuario
        DB::table('posts')->insert([
            'content' => "Moda",
            'user_id' => 3,
        ]);
        DB::table('posts')->insert([
            'content' => "Food",
            'user_id' => 3,
        ]);
        */

    }
}
