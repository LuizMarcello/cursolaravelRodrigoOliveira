<?php

namespace App\Http\Controllers;
/* Importando a classe de autenticação */

use \Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Request;

class LoginController extends Controller {
    /* Vão ser recebidos via POST, o email e a senha
    do usuário para fazer a autenticação */

    public function auth( Request $request ) {
        /* O atributo com as credenciais recebidas */
        /* Quando se usa o 'validate()', todas as mensagens de êrro
        são armazenadas numa variável chamada 'errors'. */
        $credenciais = $request->validate( [
            'email' => [ 'required', 'email' ],
            'password' => [ 'required' ],
        ], [
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'O email não é válido',
            'password.required' =>'O campo senha é obrigatório!'
        ] );

        /* A autenticação propriamente dita */
        /* Este método 'attempt' da classe 'Auth', verifica se existe
        algum usuário com estas credenciais no banco de dados.
        Se houver, a sessão é criada, senão não cria a sessão. */
        if ( Auth::attempt( $credenciais, $request->remember ) ) {
            /* Gerando um novo ID para a sessão */
            $request->session()->regenerate();
            /* Método 'intended': Faz o redirecionamento e verifica de
            qual lugar veio o usuário qua está autenticado, para este
            usuário continuar fazendo as compras no carrinho de compras*/
            /* Tem que usar o 'route()' para usar o nome da rota */
            return redirect()->intended( route( 'admin.dashboard' ) );
        } else {
            /* Se ele não conseguiu logar */
            /* 'back()': Volta para a página anterior */
            return redirect()->back()->with( 'errrro', 'Email ou senha inválidos.' );

        }

    }

    public function logout( Request $request ) {
        Auth::logout();
        /* Invalidando a sessão */
        $request->session()->invalidate();
        /* Gerando um novo token */
        $request->session()->regenerateToken();
        /* Tem que usar o 'route()' para usar o nome da rota */
        return redirect( route( 'site.index' ) );
    }

    public function create() {
        return view( 'login.create' );
    }
}