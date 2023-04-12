<?php

namespace App\Http\Controllers;
use \App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller {
    public function index() {
        //return 'index';

        /* Este método 'all()' pertence ao 'Eloquent',
        que é o ORM( Object Relacional Model ) do láravel.
        O 'Model', na verdade, serve para mapear, de forma
        automática, a tabela do banco de dados, para uma classe. */
        $produuutos = Produto::paginate( 3 );

        /* Função compact: Passando os produtos para a view */
        /* É passado para a view este array 'produuutos' */
        return view( 'site.home3', compact( 'produuutos' ) );
    }

    public function detaillls( $slug ) {
        $prrroduto = Produto::where( 'slug', $slug )->first();
        return view( 'site.details', compact( 'prrroduto' ) );
    }

    public function categggoria( $id ) {
        /* Quando encadeado o método "all()", trás todos os
           registros. Com alguma condição, usa o método "get()",
           ou paginate(). */
        $prrrodutos = Produto::where( 'id_categoria', $id )->paginate(3);
        return view( 'site.categoria', compact( 'prrrodutos' ) );
    }
}