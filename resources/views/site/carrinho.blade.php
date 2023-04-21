@extends('site.layout')

@section('title', 'Esta é a página Carrinho')

@section('conteudooo')

    <div class="row container">


        {{-- Se existir uma seção cahamada "succcesso", que vem do controller,
             ele vai mostrar $mensagem --}}
        @if ($mensagem = Session::get('succcesso'))
            <div class="card green">
                <div class="card-content white-text">
                    <span class="card-title">Parabéns</span>
                    <p>{{ $mensagem }}</p>
                </div>
            </div>
        @endif

        {{-- Se existir uma seção cahamada "avvviso", que vem do controller,
             ele vai mostrar $mensagem --}}
        @if ($mensagem = Session::get('avvviso'))
            <div class="card blue">
                <div class="card-content white-text">
                    <span class="card-title">Tudo bem!</span>
                    <p>{{ $mensagem }}</p>
                </div>
            </div>
        @endif

        <h5>Seu carrinho possui {{ $itennns->count() }} produtos.</h5>

        <table class="striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($itennns as $item)
                    <tr>
                        <td><img src="{{ $item->attributes->image }}" width="70" class="responsive-img circle"></td>
                        <td>{{ $item->name }}</td>
                        <td>R$ {{ number_format($item->price, 2, ',', '.') }}</td>

                        {{-- Btn para atualizar --}}
                        <form action="{{ route('site.atualizacarrinho') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <td><input style="width: 40px; font-weight:700" class="white center" type="number"
                                    name="quantity" value="{{ $item->quantity }}"> </td>
                            <td> <button class="btn-floating waves-effect waves-light orange"><i
                                        class="material-icons">refresh</i></button>
                        </form>

                        {{-- Btn para remover --}}
                        <form action="{{ route('site.removecarrinho') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button class="btn-floating waves-effect waves-light red"><i
                                    class="material-icons">delete</i></button>
                        </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row container center">
            <button class="btn waves-effect waves-light blue"> Continuar comprando <i
                    class="material-icons right">arrow_back</i></button>
            <a href="{{ route('site.limparcarrinho') }}" class="btn waves-effect waves-light blue"> Limpar carrinho <i
                    class="material-icons right">clear</i></a>
            <button class="btn waves-effect waves-light green"> Finalizar pedido <i
                    class="material-icons right">check</i></button>
        </div>

    </div>
@endsection
