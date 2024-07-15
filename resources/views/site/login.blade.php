<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - 100% meu Rei</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #070304; /* Cor vermelha similar à da Americanas */
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #1500d4;
            outline: none;
        }

        .form-group small {
            color: rgb(3, 6, 160);
            display: block;
            margin-top: 5px;
        }

        .btn-submit {
            width: 100%;
            padding: 15px;
            background-color: #2000d4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-submit:hover {
            background-color: #0045a0;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/logo/logo.png') }}" alt="Logo">
        </div>
        <div class="header">
            <h2>Login</h2>
        </div>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu email">
                <!-- Exemplo de mensagem de erro -->
                <!-- <small>Erro: Email inválido</small> -->
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha">
                <!-- Exemplo de mensagem de erro -->
                <!-- <small>Erro: Campo obrigatório</small> -->
            </div>
            <button type="submit" class="btn-submit">Entrar</button>
        </form>
    </div>
</body>
</html>



