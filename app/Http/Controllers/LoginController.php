<?php

namespace App\Http\Controllers;
/* Importando a classe de autenticação */
use Illuminate\Suporte\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller {
    /* Vão ser recebidos via POST, o email e a senha
    do usuário para fazer a autenticação */

    public function auth( Request $request ) {
        /* O atributo com as credenciais recebidas */
        $credenciais = $request->calidate( [
            'email' => [ 'required', 'email' ],
            'password' => [ 'required' ],
        ] );

        /* A autenticação propriamente dita */
        /* Este método 'attempt' da classe 'Auth', verifica se existe
        algum usuário com estas credenciais no banco de dados.
        Se houver, a sessão é criada, senão não cria a sessão. */
        if ( Auth::attempt( $credenciais ) ) {
            /* Gerando um novo ID para a sessão */
            $request->session()->regenerate();
            /* Método 'intended': Faz o redirecionamento e verifica de
            qual lugar veio o usuário qua está autenticado, para este
            usuário continuar fazendo as compras no carrinho de compras*/
            return redirect()->intended( 'dashboard' );
        } else {
            /* Se ele não conseguiu logar */
            /* 'back()': Volta para a página anterior */
            return redirect()->back()->with( 'errrro', 'Email ou senha inválidos.' )

        }

    }
}