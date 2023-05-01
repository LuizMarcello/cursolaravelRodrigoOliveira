{{-- Se existir uma sessão chamada "errrro"(vinda do
     controller "LoginController.php"), então "$mensagem"
     será exibida --}}
@if ($mensageeem = Session::get('errrro'))
    {{ $mensageeem }}
@endif

{{-- Variável "errors" gerada pelo "validate()"
     do método "auth()" do controller LoginController
     Verificando se tem erros --}}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
@endif

<form action="{{ route('login.auth') }}" method="POST">
    @csrf
    Email: <br> <input type="email" name="email"> <br>
    Senha: <br> <input type="password" name="password"> <br>
    <input type="checkbox" name="remember"> Lembrar-me
    <button type="submit"> Entrar </button>
</form>
