
        
     <div class="produtos">
        <div class="row">
            @foreach($produtos as $produto)
                <div class="col-md-3">
                <a href="#">
                    <div class="card667">
                        <div class="cardimagem">
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
