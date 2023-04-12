<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
    * Seed the application's database.
    *
    * @return void
    *
    * Aqui, um array com as classes dos 'seeders'
    * que serão executados
    */

    public function run() {
        // \App\Models\User::factory( 10 )->create();
        $this->call( [
            // UsersSeeder::class,
            //CategoriasSeeder::class
            ProdutosSeeder::class
        ] );
    }
}
