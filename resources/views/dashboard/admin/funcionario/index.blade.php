<!DOCTYPE html>
<html>
<head>
    <title>Lista de Funcionários</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Tipo de Serviço</th>
                <th>Status</th>
                <th>Editar</th>
                <th>Desativar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listaFunc as $funcionario)
                <tr>
                    <th scope="row">{{ $funcionario->id }}</th>
                    <td>{{ $funcionario->nomeFuncionario }}</td>
                    <td>{{ $funcionario->telefoneFuncionario }}</td>
                    <td>{{ $funcionario->emailFuncionario }}</td>
                    <td>{{ $funcionario->enderecoFuncionario }}</td>
                    <td>{{ $funcionario->tipoFuncionario }}</td>
                    <td>{{ $funcionario->statusFuncionario }}</td>
                    <td class="editar"><a href="{{ route('dashboard.admin.func.edit', ['id' => $funcionario->id]) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('dashboard.admin.func.desativar', ['id' => $funcionario->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="desativar">Desativar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>




