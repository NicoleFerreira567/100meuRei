
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

          <meta name="csrf-token" content="{{ csrf_token() }}">

          <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
          <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
          <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>

<body>

        <header>
            <div class="cabeçalho">
            <div class="navbar">
            <div class="nav-topo">
                <div>
                    <a class="nav-logo" href="#">Loja 100%</a>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                    <div id="divBusca">
                        <input type="text" id="txtBusca" placeholder="Buscar...">
                        <i class="fa fa-search" style="font-size: 24px; color: rgb(248, 244, 244);"></i>
                    </div>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Entre ou cadastre-se</button>
                    <div id="myDropdown" class="dropdown-content">
                      <a href="{{url('/entrar')  }}">entrar</a>
                      <a href="{{ url('/cadastro') }}">cadastrar</a>
                    </div>
                  </div>
                  <div class="lista">
                    <a href="#" title="Lista" id="nav-cart">
                        <img src="{{ asset('img/lista/lista.png.png') }}" id="btnlist" alt="Listas">
                    </a>
                </div>
                <div id="cart" class="cart">
                    <img src="{{ asset('img/carrinho/cart.png.png') }}" id="btncart" alt="Carrinho">
                    <span class="badge">0</span> <!-- Aqui será exibido o número de itens no carrinho -->
                </div>
                <div id="notification" class="notification">
                    <!-- Aqui será exibida a notificação -->
                </div>
            </div>
                <div class="nav">
                    <div>
                        <ul class="menu">
                            <li><a href="{{ url('/departamentos') }}">todos os departamentos</a></li>
                            <li><a href="{{ url('/limpeza') }}"> limpeza</a></li>
                            <li><a href="{{ url('/papelaria') }}">papelaria</a></li>
                            <li><a href="{{ url('/moveis') }}">moveis</a></li>
                            <li><a href="{{ url('/materiaisinfantis') }}">materiais infantis</a></li>
                            <li><a href="{{ url('/autopecas') }}">auto peças</a></li>
                            <li><a href="{{ url('/jardinagem') }}">jardinagem</a></li>
                            <li><a href="{{ url('/ferramentas') }}">ferramentas</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </header>



   <main>
    @yield('conteudo')
   </main>


   <script src="{{ asset('js/precosdropdown.js') }}"></script>
   <script src="{{ asset('js/dropdown.js') }}"></script>
   <script src="{{ asset('js/carousel.js') }}"></script>
   <script src="{{ asset('js/slick.min.js') }}"></script>
   <script src="{{ asset('js/notifica.js') }}"></script>
</body>

</html>
