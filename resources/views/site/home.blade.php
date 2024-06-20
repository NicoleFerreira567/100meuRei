@extends('layout.layout')

@section('title', 'Inicio')

@section('conteudo')


<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">


<body>



    <main class="flex-container">

        <div class="banner">
            <div class="banner-content">
                <img src="{{ asset('img/banner/banner.png') }}" alt="loja 100%">
            </div>
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
</body>
@endsection
