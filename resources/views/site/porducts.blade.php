@extends('layout.layout')

@section('title', 'Inicio')

@section('conteudo')



<body>
    <main>
        <div class="sort-bar">
            <div class="bar">
             <h3>Classificar por:</h3>
            <section class="">
             <button>Relevância</button>
             <button>Mais recente</button>
             <button>Em destaque</button>
            </section>
            <section>
             <div class="dropdownprecos">
                 <button onclick="toggleDropdown()" class="dropbtnprecos">Preços</button>
                 <div id="precoDropdown" class="dropdown-content">
                     <a href="{{ route('preco.ordenar', ['tipo' => 'crescente']) }}">Preço: Crescente</a>
                     <a href="{{ route('preco.ordenar', ['tipo' => 'decrescente']) }}">Preço: Decrescente</a>
                 </div>
             </div>
            </section>
         </div>
     </div>
     <div class="produtos">
        <div class="row">
            @foreach($produtos as $produto)
                <div class="col-md-3">
                <a href="#">
                    <div class="card667">
                        <div class="cardimagem">
                            <img src="{{ asset($produto->imagem) }}" width="245" height="205" alt="{{ $produto->nome }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $produto->nome }}</h5>
                            <span>{{ $produto->preco }}</span>
                            <button class="btn23"><span class="add-to-cart-text">Adicionar ao Carrinho</span></button>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
    </main>
</body>


@endsection
