


<h1> funcinario</h1>
<div class="main">
    <div class="body">
        <div>

            <a href="" class="botao">Lista de ativos</a>

            <a href="{{route('admin.func.index') }}"class="botao">Novo funcionario</a>

        </div>

        <div>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Número</th>
                        <th scope="col">Email</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Serviço</th>
                        <th scope="col">Status</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Desativar</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($listaFunc as $ $funcionario)
                        <tr>
                            <th scope="row">{{ $ $funcionario->id }}</th>
                            <td>{{ $funcionario->nomeFuncionario }}</td>
                            <td>{{ $funcionario->telefoneFuncionario }}</td>
                            <td>{{ $funcionario->emailFuncionario}}</td>
                            <td>{{$funcionario->enderecoFuncionario }}</td>
                            <td>{{ $funcionario->tipoServicoCliente }}</td>
                            <td>{{ $funcionario->statusFuncionario }}</td>
                            <td class="editar"><a href="{{ route('admin.func.edit', $funcionario->id) }}">Editar</a></td>
                            <td>
                                <form action="{{ route('admin.func.desativar', $funcionario->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="desativar"> Desativar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>
        </div>

    </div>

</div>





