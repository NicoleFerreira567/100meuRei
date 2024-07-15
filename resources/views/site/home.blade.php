@extends('layout.layout')

@section('title', 'Inicio')

@section('conteudo')

<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
          <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
          <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">


<body>


 <!--banner principal-->
 <div id="carouselProdutos" class="carousel slide carousel-dark" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('img/produtos/imagemamarela.png')}} alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('')}} alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/banner/banner.png') }} alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="conteiners">
        <div class="manual">
            <div class="card">
                <div class="cardimagem">
                    <img src="{{ asset('img/produtos/imagemamarela.png') }}"    width="288" height="205" alt="">
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
   <div class="manual">
    <div class="card">
        <div class="cardimagem">
            <img src="{{ asset('img/produtos/imagemamarela.png') }}"    width="288" height="205" alt="">
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
       <div class="manual">
        <div class="card">
            <div class="cardimagem">
                <img src="{{ asset('img/produtos/imagemamarela.png') }}"    width="288" height="205" alt="">
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
