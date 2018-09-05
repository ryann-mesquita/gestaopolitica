@extends('painel.templates.template')

@extends('layouts.index')
@section('content_page')

<h1 class="title-pg">
<a href="{{route('colaboradores.index')}}"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>

Colaborador: <b>{{$colaboradores->name or 'Novo'}}</b</h1>

@if(isset($errors) && count($errors) >0 )
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
   		 <p>{{$error}}</p>
   		@endforeach 
	</div>
@endif

@if(isset($colaboradores) )

{!!Form::model($colaboradores,['route' => ['colaboradores.update', $colaboradores->id], 'class' => 'form', 'method' => 'put'  ]) !!}
@else
 {!!Form::open(['route' => 'colaboradores.store', 'class' => 'form', 'autocomplete'=>"off"])!!}
@endif

 <div id="content" style="height: 850px;">
 <h1 class="nome-h1">{{$colaboradores->name}}</h1>

<div class="form-row">
	<div class="form-group col-md-6">
		<h4><span class="label label-success">Nome</span></h4>
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Nome:','disabled'])!!}
	</div>  

<div class="form-group col-md-6">
	<h4><span class="label label-success">Apelido</span></h4>
		{!! Form::text('apelido', null, ['class' => 'form-control', 'placeholder'=> 'Apelido:','disabled'])!!}
	</div>   

</div>

<div class="form-row">

	<div class="form-group col-md-4">
		<h4><span class="label label-success">Endereço</span></h4>
		{!! Form::text('endereco', null, ['class' => 'form-control, col-xs-4, input-sm ', 'placeholder'=> 'Endereço','id'=>'rua','disabled'])!!}
	</div>
	<div class="form-group col-md-4">
		<h4><span class="label label-success">Cep</span></h4>
		{!! Form::text('cep', null, ['class' => ' form-control, col-xs-4, input-sm', 'placeholder'=> 'CEP','id'=>'cep','disabled'])!!}
	</div>
	<div class="form-group col-md-4">
		<h4><span class="label label-success">Cidade</span></h4>
		{!! Form::text('cidade', null, ['class' => 'form-control, col-xs-4, input-sm ', 'placeholder'=> 'Cidade','id'=>'cidade','disabled'])!!}
	</div>

</div>
       <div class="form-row">
       	<div class="form-group col-md-4">
       		<h4><span class="label label-success">Complemento</span></h4>
       		{!! Form::text('complemento', null, ['class' => 'form-control, col-xs-4, input-sm ', 'placeholder'=> 'Complemento','id'=>'complemento','disabled'])!!}
       	</div>
       	<div class="form-group col-md-4">
       		<h4><span class="label label-success">Bairro</span></h4>
       		{!! Form::text('bairro', null, ['class' => 'form-control, col-xs-4, input-sm ', 'placeholder'=> 'Bairro','id'=>'bairro','disabled'])!!}
       	</div>
       	<div class="form-group col-md-4">
       		<h4><span class="label label-success">Número</span></h4>
       		{!! Form::text('numero', null, ['class' => 'form-control, col-xs-4, input-sm ', 'placeholder'=> 'Numero','disabled'])!!}
       	</div>

 		<div class="form-group col-md-4">
			<h4><span class="label label-success">Localidade</span></h4>
			{!! Form::text('localidade', null, ['class' => 'form-control, col-xs-4, input-sm ', 'placeholder'=> 'Localidade','disabled'])!!}
		</div>

       </div>

    <div class="form-row">
    	<div class="form-group col-md-4">
			<h4><span class="label label-success">Nome da Mãe</span></h4>
			{!! Form::text('nomedamae', null, ['class' => 'form-control, col-xs-4, input-sm ', 'placeholder'=> 'Nome da mãe','disabled'])!!}
		</div>
		 <div class="form-group col-md-4">
			<h4><span class="label label-success">Local de Votação</span></h4>
			{!! Form::text('localdevotacao', null, ['class' => 'form-control, col-xs-4, input-sm ', 'placeholder'=> 'Local de Votação','disabled'])!!}
		</div>
		<div class="form-group col-md-4">
			<h4><span class="label label-success">Telefone</span></h4>
			{!! Form::text('telefone', null, ['class' => 'form-control, col-xs-4, input-sm',  'placeholder'=> 'Telefone','disabled'])!!}
		</div>
		<div class="form-group col-md-4">
			<h4><span class="label label-success">Whatsapp</span></h4>
			{!! Form::text('whatsapp', null, ['class' => 'form-control, col-xs-4, input-sm',  'placeholder'=> 'Telefone','disabled'])!!}
		</div>
   
	</div>
	<br>

    

	<br>

	<div class="form-row">

    	<div class="form-group col-md-4">
			<h4><span class="label label-success">Facebook</span></h4>
			{!! Form::text('facebook', null, ['class' => 'form-control, col-xs-4, input-sm',  'placeholder'=> 'Facebook','disabled'])!!}
		</div>
		<div class="form-group col-md-4">
			<h4><span class="label label-success">Instagram</span></h4>
			{!! Form::text('instagram', null, ['class' => 'form-control, col-xs-4, input-sm',  'placeholder'=> 'Instagram','disabled'])!!}
		</div>
	<div class="form-group col-md-4">
   	<h4><span class="label label-success">T.Eleitor</span></h4>
			{!! Form::text('titulo', null, ['class' => 'form-control, col-xs-4, input-sm',  'placeholder'=> 'Titulo','disabled'])!!}
			</div>
	</div>
	<div class="form-row">
			<div class="form-group col-md-4">
   	<h4><span class="label label-success">Zona</span></h4>
			{!! Form::text('zona', null, ['class' => 'form-control, col-xs-4, input-sm',  'placeholder'=> 'Zona','disabled'])!!}
			</div>
			<div class="form-group col-md-4">
   	<h4><span class="label label-success">Seção</span></h4>
			{!! Form::text('secao', null, ['class' => 'form-control, col-xs-4, input-sm',  'placeholder'=> 'Seção','disabled'])!!}
			</div>

      	<div class="form-group col-md-4">
    		<h4><span class="label label-success">Data de Nascimento</span></h4>
    		{!! Form::date('date',null,['class' => 'form-control, col-xs-4, input-sm ','disabled'])!!}
    	</div>
	</div>

		<div class="form-row">

		
			<div class="form-group col-md-4">
				<h4><span class="label label-success">Ref.Área</span></h4>
				{!! Form::text('refarea', null, ['class' => 'form-control, col-xs-3, input-sm ', 'placeholder'=> 'Ref.Área','disabled'])!!}
			</div>
			<div class="form-group col-md-6">
				<h4><span class="label label-success">Líder</span></h4>
				{!! Form::text('lider', null, ['class' => 'form-control, col-xs-3, input-sm ', 'placeholder'=> 'Líder','disabled'])!!}
			</div>
			<div class="form-group col-md-6">
				<h4><span class="label label-success">Sub-Líder</span></h4>
				{!! Form::text('sublider', null, ['class' => 'form-control, col-xs-3, input-sm ', 'placeholder'=> 'Sub-Líder','disabled'])!!}
			</div>
		
		</div>

<br>
<br>

@if(isset($errors) && count($errors) >0 )
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
   		 <p>{{$error}}</p>
   		@endforeach 
	</div>
@endif

	{!! Form::close() !!}


@endsection