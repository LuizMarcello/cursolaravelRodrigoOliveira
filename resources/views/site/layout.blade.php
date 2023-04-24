<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- Meterialize css --}}
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- Para controlar em quais views serão renderizados determinados
         scrips, ou estilos, ou arquivos externos --}}
    {{-- @stack('styllle') --}}
</head>

<body>

    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoooriasMenu as $categoriaM)
            <li><a href="{{ route('site.categoria', $categoriaM->id) }}">{{ $categoriaM->nome }}</a></li>
        @endforeach
    </ul>

    <!-- Dropdown Structure -->
    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('login.logout') }}">Sair</a></li>
    </ul>

    <nav class="red">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo center">CursoLaravel</a>

            <ul id="nav-mobile" class="left">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li><a href="#" class="dropdown-trigger" data-target="dropdown1">Categorias<i
                            class="material-icons right">expand_more</i></a></li>
                {{-- Usando um elemento do materialize chamado "badge", que
                                 vai criar um pequeno bloco com a côr diferente
                                 "data-badge-caption":Se quizer adicionar um texto --}}
                <li><a href="{{ route('site.carrinho') }}">Carrinho <span class="new badge blue" data-badge-caption="">
                            {{-- Este "getContent() vem lá do CarrinhoController, do método
                         carrinhoLista()", para mostrar a quantidade de itens no carrinho --}}
                            {{ \Cart::getContent()->count() }} </span></a></li>
            </ul>

            {{-- Diretiva @auth --}}
            {{-- Somente se estiver logado, renderiza o bloco --}}
            @auth
                <ul id="nav-mobile" class="right">
                    <li><a href="#" class="dropdown-trigger" data-target="dropdown2">Olá
                            {{ auth()->user()->firstName }} !<i class="material-icons right">expand_more</i></a></li>
                </ul>
            @else
                <ul id="nav-mobile" class="right">
                    <li><a href="{{ route('login.form') }}">Login<i class="material-icons right">lock</i></a></li>
                </ul>
            @endauth

        </div>
    </nav>

    @yield('conteudooo')

    {{-- Para controlar em quais views serão renderizados determinados
         scrips, ou estilos, ou arquivos externos --}}
    {{-- @stack('scripppt') --}}

    {{-- Meterialize --}}
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        var elemDrop = document.querySelectorAll('.dropdown-trigger');
        var instanceDrop = M.Dropdown.init(elemDrop, {
            coverTrigger: false,
            constrainWidth: false
        });
    </script>

</body>

</html>
