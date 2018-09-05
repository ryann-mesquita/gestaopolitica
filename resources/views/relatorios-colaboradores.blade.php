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

 {!!Form::open(['route' => 'relatorios.individuais.colaboradores', 'class' => 'form', 'method' => 'post', 'autocomplete'=>"off" ])!!}


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
  <br>

<div class="form-group">
 <h4><span class="label label-success">Por Localidade</span></h4>
 {!! Form::text('localidade', null, ['class' => 'form-control, input-sm, col-xs-6', 'placeholder'=> 'Localidade:'])!!}
</div>

  <br>


<br>

<div class="form-group">
<h4><span class="label label-success">Por titulo</span></h4>
 {!! Form::text('titulo', null, ['class' => 'form-control, input-sm, col-xs-2', 'placeholder'=> 'Titulo:'])!!}
</div>
  <br>
  <br>
<div class="form-group">
<h4><span class="label label-success">Por Zona</span></h4>
 {!! Form::text('zona', null, ['class' => 'form-control, input-sm, col-xs-2', 'placeholder'=> 'Zona:'])!!}
</div>
  <br>
  <br>
<div class="form-group">
<h4><span class="label label-success">Por Seção</span></h4>
 {!! Form::text('secao', null, ['class' => 'form-control, input-sm, col-xs-2', 'placeholder'=> 'secao:'])!!}
</div>
  <br>
  <br>
<div class="form-group ">
 <h4><span class="label label-success">Por Líder</span></h4>
 {!! Form::text('lider', null, ['class' => 'form-control, input-sm, col-xs-4', 'placeholder'=> 'Líder:'])!!}
</div>
  <br>
  <br>
<div class="form-group">
 <h4><span class="label label-success">Por Sub-Líder</span></h4>
 {!! Form::text('sublider', null, ['class' => 'form-control, input-sm, col-xs-4', 'placeholder'=> 'Sub-Líder:'])!!} 
</div>

<br>
<br>

  
  {!!Form::submit('Gerar Relatório', ['class' => 'btn btn-danger btn-block'])!!}


  {!! Form::close() !!}



@endsection