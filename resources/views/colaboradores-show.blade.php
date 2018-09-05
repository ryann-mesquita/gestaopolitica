@extends('painel.templates.template')
@extends('layouts.index')
@section('content_page')


<h1 class="title-pg">
<a href="{{route('colaboradores.index')}}"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>

Nome: <b>{{$colaboradores->name}}</b></h1>

<p><b>Localidade:</b>{{$colaboradores->localidade}}</p>
<p><b>Telefone:</b>{{$colaboradores->telefone}}</p>
<p><b>Endereço:</b>{{$colaboradores->endereco}}</p>
<p><b>Titulo:</b>{{$colaboradores->titulo}}</p>
<p><b>Seção:</b>{{$colaboradores->secao}}</p>
<p><b>Zona:</b>{{$colaboradores->zona}}</p>

<hr>
@if(isset($errors) && count($errors) >0 )
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
   		 <p>{{$error}}</p>
   		@endforeach 
	</div>
@endif

{!!Form::open(['route'=>['colaboradores.destroy', $colaboradores->id], 'method' => 'DELETE'])!!}
	{!!Form::submit("Deletar : $colaboradores->name", ['class' => 'btn btn-danger'])!!}

{!!Form::close()!!}



@endsection
