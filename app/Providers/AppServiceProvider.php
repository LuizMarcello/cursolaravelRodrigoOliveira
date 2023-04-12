<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categoria;

class AppServiceProvider extends ServiceProvider {
    /**
    * Register any application services.
    *
    * @return void
    */

    public function register() {
        //
    }

    /**
    * Bootstrap any application services.
    *
    * @return void
    */

    /* Listando todas as categorias */
    public function boot() {
        $categoriiiasMenu = Categoria::all();
        /* Para compartilhar dados com todas as views */
        /* Método 'view()' e método 'share()' encadeados */
        /* Agora é possível acessar esta chave
        'categoooriasMenu' em todas as views */
        view()->share( 'categoooriasMenu', $categoriiiasMenu );
    }
}
