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

<h1 class="title-pg">Cadastrados</h1>

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
  @can('edit_post')
  <th width="135px">Ações</th>
  @else
  <th width="100px"></th>
  @endcan
</tr>
 @foreach($products as $product)

 <tr>
  <td>{{$product->name}}</td>
  <td>{{$product->telefone}}</td>
  <td>{{$product->description}}</td>

  <td>@can('edit_post', $product)
  <a href="{{url("/dashboard/$product->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
  </a>

    <a href="{{route('dashboard.edit', $product->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    
    <a href="{{route('dashboard.show', $product->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
    </a>
  </td>
 </tr>

 @endforeach
</table>
{!!$products->links()!!}

@endsection
