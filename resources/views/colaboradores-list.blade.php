@extends('painel.templates.template')
@extends('layouts.index')

@section('title_page')

 <!-- Content Header (Page header) -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

       
@endsection



@section('content_page')

<h1 class="title-pg">Colaboradores</h1>

<!--<a href="{{route('dashboard.create')}}" class="btn btn-primary btn-add"> 
  <span class="glyphicon glyphicon-plus"></span>Cadastrar
</a>-->

<!--
<a href="{{route('relatorios.create')}}" class="btn btn-primary btn-add"> 
  <span class="glyphicon glyphicon-plus"></span>Criar Relatório
</a>
-->

<table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Descrição</th>
 
  <th width="135px">Ações</th>
  
  
  
</tr>
 @foreach($colaboradores as $colaborador)

 <tr>
  <td>{{$colaborador->name}}</td>
  <td>{{$colaborador->telefone}}</td>
  <td>{{$colaborador->localidade}}</td>
    
  <td>
    <a href="{{url("/colaboradores/$colaborador->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $colaborador->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $colaborador->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
 </tr>

 @endforeach
</table>
{!!$colaboradores->links()!!}

@endsection
