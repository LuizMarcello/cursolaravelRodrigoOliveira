@extends('site.layout')

@section('title', 'Essa é a página Detalhes')

@section('conteudooo')

    <div class="row container"> <br>
        <div class="col s12 m6">
            <img src="{{ $prrroduto->imagem }}" class="responsive-img">
        </div>

        <div class="col s12 m6">
            <h4>{{ $prrroduto->nome }}</h4>
            <h4> R$ {{ number_format($prrroduto->preco, 2, ',', '.') }}</h4>
            <p>{{ $prrroduto->descricao }}</p>
            {{-- Pegando o usuário ao qual este produto pertence --}}
            {{-- Chave estrangeira --}}
            <p> Postado por: {{ $prrroduto->ussser->firstName }} <br>
                Categoria a qual pertence: {{ $prrroduto->cateeegoria->nome }}</p>

            <form action="{{ route('site.addcarrinho') }}" method="POST" enctype="multipart/form-data">
                {{-- O laravel, através desta diretiva, vai gerar de forma nativa, um input
                     do tipo hidden, que vai gerar também um token, para proteger a aplicação --}}
                @csrf
                <input type="hidden" name="id" value="{{ $prrroduto->id }}">
                <input type="hidden" name="name" value="{{ $prrroduto->nome }}">
                <input type="hidden" name="price" value="{{ $prrroduto->preco }}">
                <input type="number" min="1" name="qnt" value="1">
                <input type="hidden" name="img" value="{{ $prrroduto->imagem }}">
                <button class="btn orange btn-large"> Comprar </button>
            </form>
        </div>
    </div>

@endsection
