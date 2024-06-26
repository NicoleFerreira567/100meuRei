
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
          <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
          <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
          <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>

<body>

    <header>
        <nav class="navbar navbar-dark bg-primary">
            <div class="topo d-flex  align-items-center">
                <!-- Navbar Logo -->
                <a class="navbar-brand" href="#">100% meu Rei</a>
                <!-- Search Section -->
                <div class="d-flex align-items-center ">
                    <div class="input-group">
                        <input type="text" class="form-control" id="txtBusca" placeholder="Buscar...">
                        <button class="btnpesquisa" type="button">
                            <i class="fa fa-search" style="font-size: 24px; color: rgb(8, 5, 5);"></i>
                        </button>
                    </div>
                </div>
                <!-- Dropdown Section -->
                <div class="dropdown ">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Entre ou cadastre-se
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ url('/login') }}">Entrar</a></li>
                        <li><a class="dropdown-item" href="{{ url('/cadastro') }}">Cadastrar</a></li>
                    </ul>
                </div>
                <!-- Carrinho Section -->
                <div id="cart">
                    <button class="btn btn-outline-primary position-relative" id="btncart">
                        <img src="{{ asset('img/carrinho/cart.png') }}" alt="Carrinho" width="30">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                    </button>
                </div>
            </div>
        </nav>
    
    </header>

        <!-- Navbar Links -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/limpeza') }}">Limpeza</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/papelaria') }}">Papelaria</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/moveis') }}">Moveis</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/materiaisinfantis') }}">Materiais infantis</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/autopecas') }}">Auto peças</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/jardinagem') }}">Jardinagem</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/ferramentas') }}">Ferramentas</a></li>
                    </ul>
                </div>
            </div>
        </nav>
   

   <main>
    @yield('conteudo')
   </main>

  <!-- Bootstrap Bundle with Popper.js -->
   <script src="{{ asset('js/bootstrap.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <script src="{{ asset('js/precosdropdown.js') }}"></script>
   <script src="{{ asset('js/carousel.js') }}"></script>
   <script src="{{ asset('js/slick.min.js') }}"></script>
  <script src="{{ asset('js/notifica.js') }}"></script>
  
</body>

</html>
