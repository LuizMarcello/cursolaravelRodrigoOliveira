<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller {
    public function carrinhoLista() {
        $itennns = \Cart::getContent();
        return view( 'site.carrinho', compact( 'itennns' ) );
    }

    public function adicionaCarrinho( Request $request ) {
        \Cart::add( [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => array(
                'image' => $request->img
            )
        ] );
    }
}
