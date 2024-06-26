




<body>
    <h2>cadastro</h2>
    <form action="/enviar" method="POST">
        @csrf
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="senha">senha:</label><br>
        <input type="password" id="password" name="senha"><br>

        <button type="submit">Enviar</button>
    </form>
</body>


