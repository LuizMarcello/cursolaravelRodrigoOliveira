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

    <nav class="red">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo center">Curso Laravel</a>
            <ul id="nav-mobile" class="left">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li><a href="" class="dropdown-trigger" data-target="dropdown1">Categorias<i
                            class="material-icons right">expand_more</i></a></li>
                <li><a href="{{ route('site.carrinho') }}">Carrinho</a></li>

            </ul>
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
