<?php

namespace App\Http\Controllers;
use \App\Models\Produto;
use \App\Models\Categoria;
use Illuminate\Http\Request;
/* Para poder trabalhar com 'Gate' aqui, neste controller */
use Illuminate\Support\Facades\Gate;

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

        /* Regra de autorização com 'Gate', definida no 'AuthServiceProvider.php' */
        //Gate::authorize( 'ver-produto', $prrroduto );
        /* Regra de autorização com 'Policy', definida no 'ProdutoPolicy.php' */
        //$this->authorize( 'verProduto', $prrroduto );

        //if ( Gate::allows( 'ver-produto', $prrroduto ) ) {
        //return view( 'site.details', compact( 'prrroduto' ) );
        //}

        //if ( Gate::denies( 'ver-produto', $prrroduto ) ) {
        //return redirect()->route( 'site.index' );
        //}

        if ( auth()->user()->can( 'verProduto', $prrroduto ) ) {
            return view( 'site.details', compact( 'prrroduto' ) );
        }

        if ( auth()->user()->cannot( 'verProduto', $prrroduto ) ) {
            return redirect()->route( 'site.index' );
        }
    }

    public function categggoria( $id ) {
        /* Buscando a categoria pelo 'id' passado no parâmetro */
        $caaategoria = Categoria::find( $id );
        /* Quando encadeado o método 'all()', trás todos os
        registros. Com alguma condição, usa o método 'get()',
        ou paginate(). */
        $prrrodutos = Produto::where( 'id_categoria', $id )->paginate( 3 );
        /* Enviando então a categoria para a 'view' */
        return view( 'site.categoria', compact( 'prrrodutos', 'caaategoria' ) );
    }
}