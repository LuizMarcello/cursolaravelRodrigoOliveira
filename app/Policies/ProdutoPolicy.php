<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Produto;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy {
    use HandlesAuthorization;

    /**
    * Create a new policy instance.
    *
    * @return void
    */

    public function __construct() {
        //
    }

    /* Criando uma policy de autorização */
    /* Injetando o usuário que está
    autenticado, o qual ficará pendurado na variável "$user".
    Injetando também o Model 'Produto', através da variável "$produto". */
    public function verProduto( User $user, Produto $prrroduto ) {
        /* Vai retornar verdadeiro, se o ID do usuário autenticado é
        o mesmo do usuário que cadastrou este produto, para poder autorizar. */
        return $user->id == $prrroduto->id_user;
    }
}

