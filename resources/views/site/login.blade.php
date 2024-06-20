
<body>

    <div class="cabeçalho">
        <div class="navbar">
        <div class="nav-topo">
            <div>
                <a class="nav-logo" href="#"> 100% meu Rei</a>
                </div>

            </div>
        </div>
        </div>

    <h1>entrar</h1>
    <form class="form" action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" class=" form-control"
        placeholder="informe seu e-mail:" value="{{ old('email') }} " id="emailUsuario">
        {{ $errors->has('email') ? $errors ->first ('email') : '' }}

        <input type="password" name="password"  class="passord form-control"
        placeholder="Informe sua senha:" value="{{ old('password') }}" id="senhaUsuario">
        {{ $errors->has('password') ? $errors ->first ('password') : '' }}

        <input class="botao" type="submit" value="Login">
     </form>
 </body>






