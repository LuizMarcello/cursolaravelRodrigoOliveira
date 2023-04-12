<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProdutoController;
use App\http\Controllers\SiteController;

/* Rota para todos os métodos do controller
   criado com o "resource": */
Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produto/{slug}', [SiteController::class, 'detaillls'])->name('site.details');

Route::get('/categoria/{id}',[SiteController::class, 'categggoria'])->name('site.categoria');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

//Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

/* Com as funções de callback nas rotas, é porque ainda
   não estão sendo usados os "controllers". */

//Route::get('/', function () {
    //return view('welcome');
    //return redirect()->route('admin.users');
//});

/* Grupo de rotas(por prefix)*/
//Route::prefix('admin')->group(function () {
//Route::get('dashboard', function () {
//return "dashboard";
//})->name('admin.dashboard');

//Route::get('users', function () {
//return "users";
//})->name('admin.users');

//Route::get('clientes', function () {
//return "clientes";
//})->name('admin.clientes');
//});


/* Grupo de rotas(por name) */
//Route::name('admin.')->group(function () {
//Route::get('admin/dashboard', function () {
//return "dashboard";
//})->name('dashboard');

//Route::get('admin/users', function () {
//return "users";
//})->name('users');

//Route::get('admin/clientes', function () {
//return "clientes";
//})->name('clientes');
//});


/* Grupo de rotas(por name e por prefix) */
//Route::group([
    //'prefix' => 'admin',
    //'as' => 'admin.'
//], function () {
    //Route::get('dashboard', function () {
        //return "dashboard";
    //})->name('dashboard');

    //Route::get('users', function () {
        //return "users";
    //})->name('users');

    //Route::get('clientes', function () {
        //return "clientes";
    //})->name('clientes');
//});


/* Route::get('/empresa', function () {
    return view('site/empresa');
}); */
/* ou assim */
//Route::view('/empresa', 'site/empresa');

/* Redirecionando */
//Route::redirect('/sobre', '/empresa');

//Route::any('any', function () {
    //return "Permite todo tipo de acesso http (put,delete,get,post)";
//});

//Route::match(['get', 'post'], '/match', function () {
    //return "Permite apenas acessos definidos";
//});

/* Route::match(['put', 'delete'], '/match', function () {
    return "Permite apenas acessos definidos";
}); */

/* Com parâmetros */
//Route::get('/produto/{id}/{cat?}', function ($id, $cat = '') {
    //return "O id do produto é: " . $id . "<br>" . "A categoria é: " . $cat;
//});

/* Rota nomeada */
//Route::get('/timesnownews', function () {
    //return view('news');
//})->name('noticias');

//Route::get('/novidades', function () {
    //return redirect()->route('noticias');
//});
