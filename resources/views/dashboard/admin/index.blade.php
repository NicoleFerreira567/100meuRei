@extends('dashboard.layout-dash.layout')
@section('title', 'Dashboard')
@section('conteudo')


<nav class="custom-scrollbar">
    <ul class="drp-sec">
        <li>
            <a href="#" title="">
                <i class="ion-ios-home"></i> <span>Dashboard</span>
            </a>
        </li>
    </ul>
@if (session('tipo_usuario_id') == 'Aluno')
<h4>Aluno</h4>
<ul class="drp-sec">
    <li><a href="#" title=""><i class="ion-person"></i>perfil</a></li>
    <li><a href="#" title=""><i class="ion-person">Treinos</a></li>
    <li><a href="#" title=""></a><i class="ion-person">Agendamento</a></li>
    <li><a href="#" title=""></a><i class="ion-person">Fit Coach</a></li>
    <li><a href="#" title=""></a><i class="ion-person">Minhas Conquistas</a></li>
</ul>
@elseif (session('tipoFuncionario') == 'adminitrativo' && session('cargo') == 'gerente')
<h4>Funcionario</h4>
<ul class="drp-sec">
    <li><a href="#" title=""><i class="ion-podium"></i>Aluno</a></li>
    <li><a href="#" title=""><i class="ion-calendar">Treino</a></li>
    <li><a href="#" title=""></a><i class="ion-calendar">Cronograma de treino</a></li>
    <li><a href="#" title=""></a><i class="ion-ions-body">Atividades</a></li>
    <li><a href="#" title=""></a><i class="ion-ions-body">Sreviço</a></li>
    <li><a href="#" title=""></a><i class="ion-ions-body">E-mail Site</a></li>
</ul>

<h4>Desenvolvedor</h4>
<ul class="drp-sec">
   <li><a href=""><i class="ion-podium"></i> Cadastro de funcionários</a></li>
</ul>
@elseif (session('tipoFuncionario') == 'adminitrativo')
<h4>Funcionario</h4>
<ul class="drp-sec">
    <li><a href="#" title=""><i class="ion-podium"></i>perfil</a></li>
    <li><a href="#" title=""><i class="ion-calendar">Treinos</a></li>
    <li><a href="#" title=""></a><i class="ion-calendar">Agendamento</a></li>
    <li><a href="#" title=""></a><i class="ion-ions-body">Fit Coach</a></li>
    <li><a href="#" title=""></a><i class="ion-ions-body">Minhas Conquistas</a></li>
</ul>
@elseif(session('tipoFuncionario') == 'instrutor')
<h4>Funcionario</h4>
<ul>
    @elseif (session('tipoFuncionario') == 'adminitrativo' && session('cargo') == 'gerente')
<h4>Funcionario</h4>
<ul class="drp-sec">
    <li><a href="#" title=""><i class="ion-podium"></i>Aluno</a></li>
    <li><a href="#" title=""><i class="ion-calendar">Treinos</a></li>
    <li><a href="#" title=""></a><i class="ion-calendar">Cronograma de treino</a></li>

</ul>

</ul>

@endif


</nav>


@endsection


