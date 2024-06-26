@extends('layout.layout')

@section('title', 'Inicio')

@section('conteudo')

<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
          <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
          <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">


<body>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/banner/banner.png') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/banner/banner.png') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/banner/banner.png') }}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  <div class="conteiners">
        <div class="manual">
            <div class="card">
                <div class="cardimagem">
                    <img src="{{ asset('img/user/iconeuser.jpg') }}"   width="288" height="205" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">cadastre-se!</h5>
                    <p>Cadastre-se e esteja por dentro de tudo que nossa loja tem a oferecer.
                    </p>
                </div>

            </div>
            <div class="card">
                <div class="cardimagem">
                    <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nosso aplicativo</h5>
                    <p>Baixe o App e tenha suas compras na palma da mão.
                    </p>
                </div>

            </div>
            <div class="card">
                <div class="cardimagem">
                    <img src="{{ asset('img/produtos/imagemamarela.png') }}"  width="277" height="205" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Formas de pagamento</h5>
                  <p>Lorem ipsum dolor
                    </p>
                </div>
            </div>

             <div class="card">
                <div class="cardimagem">
                    <img src="{{ asset('img/produtos/imagemamarela.png') }}"  width="277" height="205" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Formas de pagamento</h5>
                  <p>Lorem ipsum dolor
                    </p>
                </div>
            </div>
       
        </div>
   <!--card 3 os mais vendidos-->
   <div class="r22">
    <h2 class="src_Title">Para você</h2>

    <div class="e-100">
        <div class="card2">
            <div class="cardimagem">
                <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Nome do Produto</h5>
                <span>R$22,99</span>
            </div>
        </div>
        <div class="card2">
            <div class="cardimagem">
                <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Nome do Produto</h5>
                <span>R$22,99</span>
               
            </div>
        </div>
        <div class="card2">
            <div class="cardimagem">
                <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Nome do Produto</h5>
                <span>R$22,99</span>
               
            </div>
        </div>
<div class="card2">
<div class="cardimagem">
    <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
</div>
<div class="card-body">
    <h5 class="card-title">Nome do Produto</h5>
    <span>R$22,99</span>
</div>
</div>
</div>
</div>


          <!--produtos fora de estoque-->
      <div class="r22">
      <div class="info">
        <h2>Fora de estoque</h2>
        <div class="info22">
        <div><img src="{{ asset('img/produtos/imagemamarela.png') }}" alt=""></div>
         <div>
            <h1>nome do produto</h1>
            <p>este produto esta fora de estoque </p>
         </div>
      </div>


    </div>
       <!--card 3 os mais vendidos-->
      <div class="r22">
        <h2 class="src_Title">em alta </h2>

        <div class="e-100">
            <div class="card2">
                <div class="cardimagem">
                    <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nome do Produto</h5>
                    <span>R$22,99</span>

                </div>
            </div>
            <div class="card2">
                <div class="cardimagem">
                    <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nome do Produto</h5>
                    <span>R$22,99</span>
                  
                </div>
            </div>
            <div class="card2">
                <div class="cardimagem">
                    <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nome do Produto</h5>
                    <span>R$22,99</span>
                </div>
            </div>
<div class="card2">
    <div class="cardimagem">
        <img src="{{ asset('img/produtos/imagemamarela.png') }}"   width="288" height="205" alt="">
    </div>
    <div class="card-body">
        <h5 class="card-title">Nome do Produto</h5>
        <span>R$22,99</span>
    </div>
</div>
</div>
</div>

    </main>
<footer>
  <div class="fo099">


  </div>

</footer>

<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/precosdropdown.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/notifica.js') }}"></script>
</body>
@endsection
