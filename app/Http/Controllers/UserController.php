<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
/* Importando o 'auth' para poder usar aqui */
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        //
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
        /* "$user" agora é um array que contém todos os
        campos do formulário digitados pelo usuário. */
        $user = $request->all();
        /* Criptografando a senha */
        $user[ 'password' ] = bcrypt( $request->password );
        /* Salvando no banco de dados */
        $user = User::create( $user );
        /* Usando o 'auth' para fazer login com
        o novo usuário criado */
        Auth::login( $user );
        return redirect()->route( 'admin.dashboard' );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        //
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
