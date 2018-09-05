@extends('painel.templates.template')
@extends('layouts.index')

@section('title_page')

 <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
              Relatórios Individuais
             <small></small>
            </h1>
             <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                 <li class="active">Here</li>
            </ol>
        </section>
       
@endsection


@section('content_page')

 {!!Form::open(['route' =>'relatorios.individuais', 'class' => 'form', 'method' => 'post', 'autocomplete'=>"off" ])!!}


 <div class="form-group">
  <h4><span class="label label-success">Por Nome</span></h4>
  {!! Form::text('nome', null, ['class' => 'form-control, input-sm, col-xs-6', 'placeholder'=> 'Por Nome:'])!!}
</div>
  <br>
  <br>

<div class="form-group">
 <h4><span class="label label-success">Por Endereço</span></h4>
 {!! Form::text('endereco', null, ['class' => 'form-control, input-sm, col-xs-6', 'placeholder'=> 'Por Endereço:'])!!}
</div>
  <br>
<div class="form-group">
 <h4><span class="label label-success">Por Liderança</span></h4>
 {!! Form::text('lideranca', null, ['class' => 'form-control, input-sm, col-xs-6', 'placeholder'=> 'Liderança:'])!!}
</div>

  <br>

<div class="form-group">
 <h4><span class="label label-success">Por Religião</span></h4>
 {!! Form::text('religiao', null, ['class' => 'form-control, input-sm, col-xs-4', 'placeholder'=> 'Por Religião:'])!!}
</div>
 
<br>
<br>

<div class="form-group">
 <h4><span class="label label-success">Por Sexo</span></h4>

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

<div class="row">
<div class="col-sm-4 ">
  <h4><span class="label label-success">Por Formação</span></h4>
  {!! Form::select('formacao',['Fundamental'=>'Fundamental','Médio'=>'Médio','Superior'=>'Superior'],null, ['class' => 'form-control, col-xs-4, input-sm ','placeholder' => 'Formação'])!!}  
</div>


<div class="col-sm-4 ">
  <h4><span class="label label-success">Por Liderança</span></h4>
  {!! Form::select('lideranca',['Alta'=>'Alta','Normal'=>'Normal','Baixa'=>'Baixa'],null, ['class' => 'form-control, col-xs-4, input-sm ','placeholder' => 'Liderança'])!!}  
</div>

<div class="col-sm-4 ">
  <h4><span class="label label-success">Por Prioridade</span></h4>
  {!! Form::select('prioridade',['Alta'=>'Alta','Normal'=>'Normal','Baixa'=>'Baixa'],null, ['class' => 'form-control, col-xs-4, input-sm ','placeholder' => 'Prioridade/Classificação'])!!}  
</div>

</div>
<br>
<br>

  
  {!!Form::submit('Gerar Relatório', ['class' => 'btn btn-danger btn-block'])!!}


  {!! Form::close() !!}



@endsection