@extends('layout.layout')

@section('title', 'Inicio')

@section('conteudo')


<body>
    <h1>entrar</h1>
     <form action="/entrar" method="POST">
         @csrf

         <label for="email">Email:</label><br>
         <input type="email" id="email" name="email"><br>

         <label for="senha">Senha:</label><br>
         <input type="password" id="password" name="senha"><br>

         <button type="submit">Enviar</button>
     </form>
 </body>





@endsection
