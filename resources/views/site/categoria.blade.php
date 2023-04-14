@extends('site.layout')

@section('title', 'Essa é a página home3')

@section('conteudooo')

    <div class="row container">

        <h3>Categoria: {{ $caaategoria->nome }} </h3>

        @foreach ($prrrodutos as $produttto)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $produttto->imagem }}">

                        <a href="{{ route('site.details', $produttto->slug) }}"
                            class="btn-floating halfway-fab waves-effect waves-light red"><i
                                class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ $produttto->nome }}</span>
                        {{-- Limitando a descrição para 20 caracteres --}}
                        <p>{{ Str::limit($produttto->descricao, 20) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row center">
        {{ $prrrodutos->links('custom.pagination') }}
    </div>

@endsection
