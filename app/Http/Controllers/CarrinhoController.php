<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller {
    public function carrinhoLista() {
        /* Usando o método 'getContent' da biblioteca 'Cart' */
        $itennns = \Cart::getContent();
        return view( 'site.carrinho', compact( 'itennns' ) );
    }

    public function adicionaCarrinho( Request $request ) {
        /* Usando o método 'add' da biblioteca 'Cart' */
        \Cart::add( [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            /* Valor absoluto para não aceitar números negativos */
            'quantity' => abs( $request->qnt ),
            'attributes' => array(
                'image' => $request->img
            )
        ] );

        return redirect()->route( 'site.carrinho' )->with( 'succcesso',
        'Produto adicionado no carrinho com sucesso!' );
    }

    public function removeCarrinho( Request $request ) {
        /* Usando o método 'remove' da biblioteca 'Cart' */
        \Cart::remove( $request->id );
        return redirect()->route( 'site.carrinho' )->with( 'succcesso',
        'Produto removido no carrinho com sucesso!' );
    }

    public function atualizaCarrinho( Request $request ) {
        /* Usando o método 'update' da biblioteca 'Cart' */
        /* Com 2 parâmetros: o 'id' a ser atualizado e 1 array
        com os atributos a serem atualizados. */
        \Cart::update( $request->id, [
            'quantity' => [
                'relative' => false,
                /* Valor absoluto para não aceitar números negativos */
                'value' => abs( $request->quantity ),
            ]
        ] );
        return redirect()->route( 'site.carrinho' )->with( 'succcesso',
        'Produto atualizado no carrinho com sucesso!' );
    }

    public function limparCarrinho() {
        /* Usando o método 'update' da biblioteca 'Cart',
        para limpar o carrinho de comprar */
        \Cart::clear();
        return redirect()->route( 'site.carrinho' )->with( 'avvviso',
        'Seu carrinho está vazio!' );
    }
}
