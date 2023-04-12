@extends('site.layout')

@section('title', 'Essa é a página Detalhes')

@section('conteudooo')

    <div class="row container">
        <div class="col s12 m6">
            <img src="{{ $prrroduto->imagem }}" class="responsive-img">
        </div>

        <div class="col s12 m6">
            <h2>{{ $prrroduto->nome }}</h2>
            <p>{{ $prrroduto->descricao }}</p>
            {{-- Pegando o usuário ao qual este produto pertence --}}
            {{-- Chave estrangeira --}}
            <p> Postado por: {{ $prrroduto->ussser->firstName }} <br>
                Categoria a qual pertence: {{ $prrroduto->cateeegoria->nome }}</p>
            <button class="btn orange btn-large"> Comprar </button>
        </div>
    </div>

@endsection
