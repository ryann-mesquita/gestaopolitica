@extends('painel.templates.template')
@extends('layouts.index')

@section('title_page')
<!-- Menu da Pagina Incial -->
<!-- Content Header (Page header) -->
<section class="content-header">
@can('adm')
 <h1>
  Gestão de Campanha
  </h1>
<ol class="breadcrumb">
 <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
 <li class="active">Here</li>
</ol>
</section>

@endsection


@section('content_page')

<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>

      <p>Cadastrar Eleitor</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="{{route('dashboard.create')}}" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>{{$totalProduct}}</h3>

      <p>Eleitores Cadastrados</p>
    </div>
    <div class="icon">
      <i class="ion-android-contacts"></i>
    </div>
    <a href="/dashboard" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
 </div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box  "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>
      <p>Eleitores Aniversariantes</p>
    </div>
    <div class="icon">
      <i class="ion-android-time"></i>
    </div>
    <a href="/aniversario" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>
<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>
      <p>Relatórios Individuais</p>
    </div>
    <div class="icon">
      <i class="ion ion-stats-bars"></i>
    </div>
    <a href="/relatorios/create" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>



<div class="col-lg-3 col-xs-8">
  <div class="small-box "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>

      <p>Relatórios Combinados</p>
    </div>
    <div class="icon">
      <i class="ion-arrow-graph-up-right"></i>
    </div>
    <a href="/relatorios/create" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
 </div>


<div class="col-lg-3 col-xs-8">
  <div class="small-box "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>
     <p>Geolocalização de Eleitores</p>
    </div>
    <div class="icon">
      <i class="ion-map"></i>
    </div>
    <a href="/mapas" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
 </div>

<div class="col-lg-3 col-xs-8">
  <div class="small-box "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>

      <p>Gabinete Virtual</p>
    </div>
    <div class="icon">
      <i class=" ion-monitor"></i>
    </div>
    <a href="/gabinete" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div> 
 @endcan
<div class="col-xs-12">
 <h3>


  Gestão de Eleição
  </h3>
</div>  
<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>

      <p>Cadastrar Colaborador</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="{{route('colaboradores.create')}}" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>{{$totalCadastro}}</h3>

      <p>Colaboradores Cadastrados</p>
    </div>
    <div class="icon">
      <i class="ion-android-contacts"></i>
    </div>
    <a href="/colaboradores" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>
@can('edit_post')
<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>

      <p>Relatórios Individuais</p>
    </div>
    <div class="icon">
      <i class="ion ion-stats-bars"></i>
    </div>
    <a href="/relatorios-colaboradores/create" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>


<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>&nbsp;&nbsp;&nbsp;</h3>

      <p>Relatórios Combinados</p>
    </div>
    <div class="icon">
      <i class="ion-arrow-graph-up-right"></i>
    </div>
    <a href="/relatorios/create" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>



@endcan

<!-- Permissões de SuperAdmin-->
@can('adm')
<div class="col-xs-12">
 <h3>
  Gestão do Sistema
  </h3>
</div>  

<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>{{$totalUsers}}</h3>

      <p>Usuários</p>
    </div>
    <div class="icon">
      <i class="ion-ios-people"></i>
    </div>
    <a href="/usuarios" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>{{$totalRole}}</h3>

      <p>Perfis</p>
    </div>
    <div class="icon">
      <i class="ion-man"></i>
    </div>
    <a href="/roles" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      <h3>{{$totalPermissao}}</h3>

      <p>Permissões</p>
    </div>
    <div class="icon">
      <i class="ion-ios-locked-outline"></i>
    </div>
    <a href="/permissions" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box "style="">
    <div class="inner">
      
            <h3>&nbsp;&nbsp;&nbsp;</h3>
            <p>Novo Usuário</p>
    </div>
    <div class="icon">
      <i class="ion-android-person-add"></i>
    </div>
    <a href="{{ url('/register') }}" class="small-box-footer">
     <i class="fa fa-arrow-circle-right"></i>
   </a>
 </div>
</div>
@endcan
</div>
</div>

@endsection