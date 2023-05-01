<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckEmail {
    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure( \Illuminate\Http\Request ): ( \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse )  $next
    * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    */

    public function handle( Request $request, Closure $next ) {
        /* Implementando uma condição */
        /* Se o usuário não estiver logado vai para o formulário de login */
        if ( !auth()->check() ) {
            return redirect( route( 'login.form' ) );
        }
        /* Variável recebe o email que está autenticado */
        $email = auth()->user()->email;
        /* Pega o que está depois do arroba deste email */
        $data = explode( '@', $email );
        /* Pegando o índice '1' deste email explodido */
        $servidorEmail = $data[ 1 ];

        /* Implementando outra condição */
        /* Se for diferente de 'hotmail.com', vai para o formulário de login */
        if ( $servidorEmail != 'hotmail.com' ) {
            return redirect( route( 'login.form' ) );
        }

        return $next( $request );
    }
}
