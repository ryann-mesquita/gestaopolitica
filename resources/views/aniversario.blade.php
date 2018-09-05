@extends('painel.templates.template')
@extends('layouts.index')

@section('title_page')

 <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
              Aniversariantes
             <small></small>
            </h1>
             <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                 <li class="active">Here</li>
            </ol>
        </section>
       
@endsection


@section('content_page')
{!!Form::open(['url'=>'/relatorios/aniversario', 'class' => 'form'])!!}

<div class="well center-block text-center" style="max-width:500px;margin-top: 120px;">	
 <input type="submit" name="dia" value="Do Dia" class="btn btn-default btn-lg btn-block ">


 <input type="submit" name="mes" value="Do Mês" class="btn btn-default btn-lg btn-block">
 </div>
 {!! Form::close() !!}
@endsection