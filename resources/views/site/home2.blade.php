@extends('site.layout')

@section('title', 'Essa é a página HOME')

@section('conteudo')
    <h2>Essa é nossa home2</h2>

    {{-- Includes --}}
    @include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

    {{-- Components --}}
    @component('components.sidebar')
        {{-- Criando "conteúdo dinâmico" para este "component" --}}
        @slot('paragrafo')
            Texto qualquer vindo do slot
        @endslot
    @endcomponent

@endsection

{{-- Para o "@stack styllle" funcionar aqui --}}
@push('styllle')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

{{-- Para o "@stack scripppt" funcionar aqui --}}
@push('scripppt')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush
