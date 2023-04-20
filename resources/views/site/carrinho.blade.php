@extends('site.layout')

@section('title', 'Esta é a página Carrinho')

@section('conteudooo')

    <div class="row container">

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
                        <td>{{ $item->price }}</td>
                        <td><input type="number" name="quantity" value="{{ $item->quantity }}"> </td>
                        <td> <button class="btn-floating waves-effect waves-light orange"><i
                                    class="material-icons">refresh</i></button>
                            <button class="btn-floating waves-effect waves-light red"><i
                                    class="material-icons">delete</i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
