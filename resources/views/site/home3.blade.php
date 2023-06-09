@extends('site.layout')

@section('title', 'Essa é a página home3')

@section('conteudooo')

    <div class="row container">
        @foreach ($produuutos as $produttto)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $produttto->imagem }}">

                        {{-- @can('verProduto', $produttto) --}}
                        <a href="{{ route('site.details', $produttto->slug) }}"
                            class="btn-floating halfway-fab waves-effect waves-light red"><i
                                class="material-icons">visibility</i></a>
                        {{-- @else --}}
                        {{-- @endcan --}}

                        {{-- "@cannot" é o inverso de "@can" --}}
                        {{-- @cannot('update', $post) --}}

                        {{--  @else --}}

                        {{-- @endcannot --}}
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
        {{ $produuutos->links('custom.pagination') }}
    </div>

@endsection
