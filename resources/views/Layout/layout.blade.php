
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

          <meta name="csrf-token" content="{{ csrf_token() }}">
          <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
          <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">          
          <!-- jQuery -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="topo d-flex  align-items-center">
                <!-- Navbar Logo -->
              <img src="{{ asset('img/logo/1.png') }}" alt="logotipo">
                <!-- Search Section -->
                <div class="d-flex align-items-center ">
                    <div class="input-group">
                        <input type="text" class="form-control" id="txtBusca" placeholder="Buscar...">
                        <button class="btnpesquisa" type="button">
                            <i class="fa fa-search" style="font-size: 24px; color: rgb(41, 38, 38);"></i>
                        </button>
                    </div>
                </div>
                <!-- Dropdown Section -->
                <div class="dropdown ">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Entre ou cadastre-se
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ url('/login') }}">Entrar</a></li>
                        <li><a class="dropdown-item" href="{{ url('/cadastro') }}">Cadastrar</a></li>
                    </ul>
                </div>
                <!-- Carrinho Section -->
                <div id="cart">
                    <button class="btn  position-relative" id="btncart">
                        <ion-icon name="cart-sharp" alt="Carrinho" width="50"></ion-icon>
                        <span class="position-absolute top-0 start-100 translate-middle badge  bg-danger">0</span>
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

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- Bootstrap Bundle with Popper.js -->
   <script src="{{ asset('js/bootstrap.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <script src="{{ asset('js/precosdropdown.js') }}"></script>
   <script src="{{ asset('js/carousel.js') }}"></script>
  <script src="{{ asset('js/notifica.js') }}"></script>
  
</body>

</html>
