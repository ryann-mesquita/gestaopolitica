<link href="{{ asset("/css/imagem-conf.css") }}" rel="stylesheet" type="text/css" />
@extends('painel.templates.template')

@extends('layouts.index')
@section('content_page')

<h1 class="title-pg">
<a href="{{route('dashboard.index')}}"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>

Cadastro: <b>{{$product->name or 'Novo'}}</b</h1>

@if(isset($errors) && count($errors) >0 )
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
   		 <p>{{$error}}</p>
   		@endforeach 
	</div>
@endif

@if(isset($product) )

{!!Form::model($product,['route' => ['dashboard.update', $product->id], 'class' => 'form',"autocomplete"=>"off",'method' => 'put' ,'id'=>'form'  ]) !!}
@else
 {!!Form::open(['route' => 'dashboard.store', 'class' => 'form', 'autocomplete'=>"off"])!!}
@endif



<div class="form-row">
	<div class="form-group col-md-6">
		<h4><span class="label label-success">Nome</span></h4>
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Nome:'])!!}
	</div>   
	

        <div class="form-group col-md-6">
        	<h4><span class="label label-success">Email</span></h4>
        	{!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'Email:'])!!}
        </div>
</div>

    <div class="form-row">
    	<div class="form-group col-md-4">
    		<h4><span class="label label-success">Data de Nascimento</span></h4>
    		{!! Form::date('date',null,['class' => 'col-xs-4, input-sm, form-control '])!!}
    	</div>
   
	<div class="form-group">
             <h4><span class="label label-success">Sexo</span></h4>
    
		<h5>
			<label>
				Masculino
				{!! Form::radio('sexo', '1', false, array('id'=>'sexo')) !!}
			</label>
		</h5>
		<h5>
			<label>
				Feminino
				{!! Form::radio('sexo', '2', false, array('id'=>'sexo')) !!}
			</label>
		</h5>
	
	</div>
	</div>
	<br>
	<div class="form-row">
		<div class="form-group col-md-4">
			<h4><span class="label label-success">Cep</span></h4>
			{!! Form::text('cep', null, ['class' => ' col-xs-2, input-sm, form-control', 'placeholder'=> 'CEP','id'=>'cep'])!!}
		</div>
        <div class="form-group col-md-4">
       <h4><span class="label label-success">Cidade</span></h4>
		{!! Form::text('cidade', null, ['class' => 'col-xs-4, input-sm, form-control', 'placeholder'=> 'Cidade','id'=>'cidade'])!!}
        </div>

    	<div class="form-group col-md-4">
    	<h4><span class="label label-success">Endereço</span></h4>
		{!! Form::text('endereco', null, ['class' => 'col-xs-4, input-sm, form-control', 'placeholder'=> 'Endereço','id'=>'rua'])!!}
       </div>
       </div>
       <br>
       <br>
    
       <div class="form-row">
       	<div class="form-group col-md-4">
       		<h4><span class="label label-success">Complemento</span></h4>
       		{!! Form::text('complemento', null, ['class' => 'col-xs-4, input-sm, form-control ', 'placeholder'=> 'Complemento','id'=>'complemento'])!!}
       	</div>
       	<div class="form-group col-md-4">
       		<h4><span class="label label-success">Bairro</span></h4>
       		{!! Form::text('bairro', null, ['class' => 'col-xs-4, input-sm, form-control', 'placeholder'=> 'Bairro','id'=>'bairro'])!!}
       	</div>
       	<div class="form-group col-md-4">
       		<h4><span class="label label-success">Número</span></h4>
       		{!! Form::text('numero', null, ['class' => 'col-xs-4, input-sm, form-control', 'placeholder'=> 'Numero'])!!}
       	</div>
		</div>
	
		<div class="form-row">
 		<div class="form-group col-md-4">
			<h4><span class="label label-success">Localidade</span></h4>
			{!! Form::select('localidade',
			['Aguas Lindas'=>'Aguas Lindas','Aguas Brancas'=> 'Aguas Brancas','Atalaia'=>'Atalaia',
			'Aura'=>'Aura','Curuçamba'=>'Curuçamba','Cidade Nova' => 'Cidade Nova', 'Coqueiro'=>'Coqueiro',
			'Centro'=>'Centro','Disrito'=>'Distrito','Geraldo Palmeira'=>'Geraldo Palmeira','Guajara'=>'Guajara',
			'Guanabara'=>'Guanabara','Heliolandia'=>'Heliolandia','Icui'=>'Icui','Jaderlandia'=>'Jaderlandia',
			'Jiboia Branca'=> 'Jiboia Branca','Julia Seffer'=>'julia Seffer',
			'Levilandia'=>'Levilandia','Paar'=>'Paar','40horas'=>'40horas', 
			]
			,null, ['class' => 'col-xs-4, input-sm, form-control',
			'placeholder' => 'Localidade'])!!}  
		</div>


	
		<div class="form-group col-md-4">
			<h4><span class="label label-success">Formação</span></h4>
			{!! Form::select('formacao',['Fundamental'=>'Fundamental','Médio'=>'Médio','Superior'=>'Superior'],null, ['class' => 'col-xs-4, input-sm, form-control ','placeholder' => 'Formação'])!!}  
		</div>
		<div class="form-group col-md-4">
			<h4><span class="label label-success">Prioridade</span></h4>
			{!! Form::select('prioridade',['Alta'=>'Alta','Normal'=>'Normal','Baixa'=>'Baixa'],null, ['class' => 'col-xs-4, input-sm, form-control','placeholder' => 'Prioridade/Classificação'])!!}  
		</div>
		</div>	  

	<div class="form-row">

	<div class="form-group col-md-4">
			<h4><span class="label label-success">Liderança</span></h4>
			{!! Form::select('lideranca',['Alta'=>'Alta','Normal'=>'Normal','Baixa'=>'Baixa'],null, ['class' => 'col-xs-4, input-sm, form-control ','placeholder' => 'Liderança'])!!}  
	</div>
	<div class="form-group col-md-4">
   	<h4><span class="label label-success">Lider</span></h4>
			{!! Form::text('lider', null, ['class' => 'col-xs-4, input-sm, form-control',  'placeholder'=> 'Lider'])!!}
			</div>

  		<div class="form-group col-md-4">
			<h4><span class="label label-success">Número de Filhos</span></h4>
		{!! Form::text('nfilhos', null, ['class' => 'col-xs-4, input-sm, form-control',  'placeholder'=> 'Número de filhos'])!!}
		</div>
	</div>


		<div class="form-row">
			<div class="form-group col-md-4">
			<h4><span class="label label-success">Telefone</span></h4>
	{!! Form::text('telefone', null, ['class' => 'col-xs-4, input-sm, form-control',  'placeholder'=> 'Telefone'])!!}
	</div>
	       	<div class="form-group col-md-4">
				<h4><span class="label label-success">Whatsapp</span></h4>
				{!! Form::text('whatsapp', null, ['class' => 'col-xs-4, input-sm, form-control',  'placeholder'=> 'Telefone'])!!}
			</div>
		
			<div class="form-group col-md-4">
				<h4><span class="label label-success">Religião</span></h4>
				{!! Form::text('religiao', null, ['class' => 'col-xs-4, input-sm, form-control ', 'placeholder'=> 'Religião:'])!!}
			</div>
		
		</div>

	<div class="form-group ">
			<h4><span class="label label-success">Descrição</span></h4>
	{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder'=> 'Descrição:'])!!}
    </div>
   
    {!!Form::submit('Enviar', ['class' => 'btn btn-danger'])!!}
	{!! Form::close() !!}
@endsection