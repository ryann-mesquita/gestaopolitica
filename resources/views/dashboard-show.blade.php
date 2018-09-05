@extends('painel.templates.template')
@extends('layouts.index')
@section('content_page')


<h1 class="title-pg">
<a href="{{route('dashboard.index')}}"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>

Produto: <b>{{$product->name}}</b></h1>
<p><b>Ativo:</b>{{$product->active}}</p>
<p><b>Número:</b>{{$product->number}}</p>
<p><b>Categoria:</b>{{$product->category}}</p>
<p><b>Descrição:</b>{{$product->description}}</p>

<hr>
@if(isset($errors) && count($errors) >0 )
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
   		 <p>{{$error}}</p>
   		@endforeach 
	</div>
@endif

{!!Form::open(['route'=>['dashboard.destroy', $product->id], 'method' => 'DELETE'])!!}
	{!!Form::submit("Deletar : $product->name", ['class' => 'btn btn-danger'])!!}

{!!Form::close()!!}



@endsection
