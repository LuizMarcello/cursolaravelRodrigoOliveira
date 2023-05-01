<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Produto;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider {
    /**
    * The policy mappings for the application.
    *
    * @var array<class-string, class-string>
    */
    protected $policies = [
        'App\Models\Produto' => 'App\Policies\ProdutoPolicy',
    ];

    /**
    * Register any authentication / authorization services.
    *
    * @return void
    */

    public function boot() {
        $this->registerPolicies();
        

        /* Definindo uma regra de autorização com "Gate" */
        /* A função de callBack está injetando o usuário que está
           autenticado, o qual ficará pendurado na variável "$user".
           Injetando também o Model "Produto", através da variável "$produto". */
        Gate::define( 'ver-produto', function( User $user, Produto $prrroduto ) {
            /* Vai retornar verdadeiro, se o ID do usuário autenticado é
               o mesmo do usuário que cadastrou este produto, para poder autorizar. */
               return $user->id == $prrroduto->id_user;
        }); 

        //
    }
}
