<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class ProdutoController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        //return 'index';
        /* Este método 'all()' pertence ao 'Eloquent',
        que é o ORM( Object Relacional Model ) do láravel.
        O 'Model', na verdade, serve para mapear, de forma
        automática, a tabela do banco de dados, para uma classe. */
        $produuutos = Produto::paginate( 3 );

        /* debugando o objeto "$produtos" */
        //return dd( $produtos );

        //$nome = 'Luiz';
        //$idade = 30;
        //$frutas = [ 'banana', 'laranja', 'maça' ];
        //$frutas = [];
        //$html = '<h1>Olá eu sou H!</h1>';

        //return view( 'site.home3', compact( 'nome', 'idade', 'html', 'frutas' ) );

        /* Função compact: Passando os produtos para a view */
        /* è passado para a view este array 'produuutos' */
        return view( 'site.home3', compact( 'produuutos' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        //
    }
}
