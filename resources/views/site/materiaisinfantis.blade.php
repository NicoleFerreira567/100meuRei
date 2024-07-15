@extends('layout.layout')

@section('title', 'Inicio')

@section('conteudo')



<body>
    <main>
        <section>
            <!-- Fruits Shop Start -->
            <div class="container-fluid fruite py-5">
                <div class="container py-5">
                    <div class="row g-4">
                        <!-- Filtros -->
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <!-- Categorias -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Categorias</h4>
                                        <ul class="list-unstyled fruite-categorie">
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="me-2"></i>Ferramentas Manuais</a>
                                                    <span>(3)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="me-2"></i>Ferramentas Elétricas</a>
                                                    <span>(5)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="me-2"></i>Ferramentas de Medição</a>
                                                    <span>(2)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="me-2"></i>Acessórios</a>
                                                    <span>(8)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="me-2"></i>Equipamentos de Proteção</a>
                                                    <span>(5)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Filtro por preço -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4 class="mb-2">Preço</h4>
                                        <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">
                                        <output id="amount" name="amount" min-value="0" max-value="500" for="rangeInput">0</output>
                                    </div>
                                </div>
                                <!-- Filtro por desconto -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Desconto</h4>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Beverages">
                                            <label for="Categories-1">Até 10%</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Beverages">
                                            <label for="Categories-2">De 10% até 30%</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Beverages">
                                            <label for="Categories-3">De 30% até 60%</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Beverages">
                                            <label for="Categories-4">De 60% até 80%</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filtro por marcas -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Marcas</h4>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Brand-1" name="Brand" value="Brand1">
                                            <label for="Brand-1">Marca 1</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Brand-2" name="Brand" value="Brand2">
                                            <label for="Brand-2">Marca 2</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Brand-3" name="Brand" value="Brand3">
                                            <label for="Brand-3">Marca 3</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filtro por avaliação -->
                                <div class="col-lg-12">
                                    <h4 class="mb-3">Avaliação</h4>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rounded me-4"></div>
                                        <div>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center my-4">
                                        <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Ver Mais</a>
                                    </div>
                                </div>
                                <!-- Banner -->
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                        <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                            <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Produtos -->
                        <div class="col-lg-9">
                            <div class="row g-4">
                                <!-- Ordenar -->
                                <div class="col-12">
                                    <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                        <label for="fruits">Ordenar:</label>
                                        <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                            <option value="mais-vendido">Mais vendido</option>
                                            <option value="menor-preco">Menor preço</option>
                                            <option value="maior-preco">Maior preço</option>
                                            <option value="bem-avaliado">Bem avaliado</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Lista de Produtos -->
                                <div class="col-12">
                                    <div class="row g-4">
                                        @foreach($produtos as $produto)
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <div class="card">
                                                        <div class="card-image">
                                                            <img src="{{ asset('img/produtos/imagemamarela.png') }}" width="245" height="205" alt="">
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $produto->nome }}</h5>
                                                            <span>{{ $produto->preco }}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

@endsection