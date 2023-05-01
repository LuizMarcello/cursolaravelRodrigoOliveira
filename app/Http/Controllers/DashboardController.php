<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {
    /* Criando um 'método construtor' para aplicar
    o middlaware aqui diretamente no controller,
    afetando a classe toda( todo o controller ). */
    /* public function __construct() {
    $this->middleware( 'auth' );
} */

/* Criando um 'método construtor' para aplicar
    o middlaware somente no método index() */
/* public function __construct() {
    $this->middleware( 'auth' )->only( 'index' );
} */

/* Criando um 'método construtor' para aplicar
   o middlaware para mais de um método, daí usando
   um array. */
/* public function __construct() {
    $this->middleware( 'auth' )->only(['index', 'home', 'contato']);
} */

/* Criando um 'método construtor' para aplicar
   o middlaware para todos os método do controller,
   exceto o 'index'. */
/* public function __construct() {
    $this->middleware( 'auth' )->except('index'));
} */

/* Criando um 'método construtor' para aplicar
   o middlaware para todos os método do controller,
   exceto o 'index' e o 'contato', usando agora
   um array. */
/* public function __construct() {
    $this->middleware( 'auth' )->except(['index', 'contato']);
} */

    public function index() {
        return view( 'admin.dashboard' );
    }
}

