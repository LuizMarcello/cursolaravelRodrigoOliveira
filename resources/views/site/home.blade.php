@extends('site.layout')

@section('title', 'Essa é a página HOME')

@section('conteudo')
    <h1>Essa é nossa home</h1>

    {{-- Isso é um comentário no blade --}}

    {{-- Operador ternário para verificar a existência de uma variável --}}
    {{-- isset($nome) ? 'existe' : 'não existe' --}}

    {{-- Definindo u valor padrão para a variável --}}
    {{-- Se não existir esta variável, assume este valor padrão --}}
    {{-- $teste ?? 'padrão' --}}

    {{-- ESTRUTURAS DE CONTROLE DO LARAVEL --}}

    {{-- O "unless" é o inverso do "if" --}}
    {{-- @if ($nome == 'Luiz') --}}
    {{-- @unless($nome == 'Luiz') --}}
    {{-- true --}}
    {{-- @else --}}
    {{-- false --}}
    {{-- @endunless --}}
    {{-- @endif --}}

    {{-- @switch($idade)
        @case(28)
            Idade está correta
        @break

        @case(29)
            Idade está errada
        @break

        @default
            default
    @endswitch --}}

    {{-- Se a variável existe --}}
    {{-- @isset($nome)
        Existe
    @endisset --}}

    {{-- Se a variável está vazia --}}
    {{-- @empty($nome)
        Está vazia
    @endempty --}}

    {{-- Diretivas que verificam se existe usuário autenticado] --}}
    {{-- A diretiva "@guest" é inversa da "@auth" --}}
    {{-- @auth
        Está autenticado
    @endauth --}}

    {{-- @guest
        Não está autenticado
    @endguest --}}

    {{-- ESTRUTURAS DE REPETIÇÃO DO LARAVEL --}}

    {{-- @for ($i = 0; $i < 10; $i++)
        Valor atual é {{ $i }} <br>
    @endfor --}}

    {{-- Diretiva para trabalhar com o PHP dentro do blade --}}
    {{-- @php
        $i = 0;
    @endphp

    @while ($i <= 10)
        Valor atual com while é {{ $i }} <br>
        @php
            $i++;
        @endphp
    @endwhile --}}

    {{-- @foreach ($frutas as $fruta)
        {{ $fruta }} <br>
    @endforeach --}}

    @forelse ($frutas as $fruta)
        {{ $fruta }} <br>
    @empty
        Array está vazio
    @endforelse

@endsection
