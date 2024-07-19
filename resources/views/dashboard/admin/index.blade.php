<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
  <title>Dashboard</title>
</head>
<body>
  <div class="sidebar">
    <div class="logo"></div>
     <ul class="menu">
      <li class="active">
        <a href="#" >
          <ion-icon name="globe-sharp"></ion-icon>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <ion-icon name="cart-sharp"></ion-icon>
          <span>Produtos</span>
        </a>
      </li>
      <li>
        <a href="#">
          <ion-icon name="cube-sharp"></ion-icon>
          <span>Estoque</span>
        </a>
      </li>

      <li>
        <a href="{{route('admin.func.index') }}">
          <ion-icon name="person-sharp"></ion-icon>
          <span>Funcionarios</span>
        </a>
      </li>
      
     
      <li class="logout">
        <a href="#">
          <ion-icon name="log-out-outline"></ion-icon>
          <span>Logout</span>
        </a>
      </li>
     </ul>
  </div>

  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
       
        <h2>Seja bem-vindo(a)</h2>
      </div>
      <div class="user--info">
        <div class="search--box">
          <ion-icon name="search-outline"></ion-icon>
          <input type="text"
          placeholder="Procurar">
        </div>
          <img src="{{ asset('img/produtos/imagemamarela.png') }}" alt="">
      </div>
    </div>
     <div class="card--conteiner">
      <h3 class="main--title">dados de hoje</h3>
      <div class="card--wrapper">
        <div class="payment--card">
           <div class="card--header">
            <div class="ammount"></div>
            <span class="title">
              valor do pagamento </span>
              <div class="amount-value">$500.00</div>
              <ion-icon name="cash-outline"></ion-icon>
              <span class="card-detail">**** **** **** 3484</span>
           </div>
        </div>
        <div class="payment--card">
          <div class="card--header">
           <div class="ammount"></div>
           <span class="title">
             valor do pagamento </span>
             <div class="amount-value">$500.00</div>
             <ion-icon name="cash-outline"></ion-icon>
             <span class="card-detail">**** **** **** 3484</span>
          </div>
       </div>
       <div class="payment--card">
        <div class="card--header">
         <div class="ammount"></div>
         <span class="title">
           valor do pagamento </span>
           <div class="amount-value">$500.00</div>
           <ion-icon name="cash-outline"></ion-icon>
           <span class="card-detail">**** **** **** 3484</span>
        </div>
     </div>
     <div class="payment--card">
      <div class="card--header">
       <div class="ammount"></div>
       <span class="title">
         valor do pagamento </span>
         <div class="amount-value">$500.00</div>
         <ion-icon name="cash-outline"></ion-icon>
         <span class="card-detail">**** **** **** 3484</span>
      </div>
   </div>
      </div>

     </div>
      
 <div class="tabular--wrapper">
  <h3 class="main--title">Dados financeiros</h3>
  <div class="table-conteiner">
    <table>
     <thead>
      <tr>
        <th>Data</th>
        <th>Tipo de transação</th>
        <th>Descrição</th>
        <th>Quantia</th>
        <th>Categoria</th>
        <th>Status</th>
        <th>Edit</th>
      </tr>
    </thead>
       <tbody>
        <tr>
          <td>2024-07-17</td>
          <td> Despesas</td>
          <td>
            Material de escritório</td>
          <td>$250</td>
          <td>Despesas de escritório</td>
          <td>Pendente</td>
          <td><button>Edit</button></td>
        </tr>
        <tr>
          <td>2024-07-17</td>
          <td> Despesas</td>
          <td>
            Material de escritório</td>
          <td>$250</td>
          <td>Despesas de escritório</td>
          <td>Pendente</td>
          <td><button>Edit</button></td>
        </tr>
        <tr>
          <td>2024-07-17</td>
          <td> Despesas</td>
          <td>
            Material de escritório</td>
          <td>$250</td>
          <td>Despesas de escritório</td>
          <td>Pendente</td>
          <td><button>Edit</button></td>
        </tr>
        <tr>
          <td>2024-07-17</td>
          <td> Despesas</td>
          <td>
            Material de escritório</td>
          <td>$250</td>
          <td>Despesas de escritório</td>
          <td>Pendente</td>
          <td><button>Edit</button></td>
        </tr>
       </tbody>
     
    </table>

  </div>

 </div>

  </div>



  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>