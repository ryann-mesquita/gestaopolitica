@extends('painel.templates.template')
@extends('layouts.index')

@section('title_page')

 <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
              Aniversariantes!
             <small></small>
            </h1>
             <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                 <li class="active">Here</li>
            </ol>
        </section>
       
@endsection


@section('content_page')
@if(isset($aniversario_day) && count($aniversario_day) >0 )

 <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>CEP</th>
  <th>Endereço</th>
  <th>Bairro</th>
  <th>Telefone</th>
  <th>Religião</th>
  <th>Data de Nascimento</th>

</tr>
 @foreach($aniversario_day as $aniv)
 <tr>
  <td>{{$aniv->name}}</td>
  <td>{{$aniv->cep}}</td>
  <td>{{$aniv->endereco}}</td>
  <td>{{$aniv->bairro}}</td>
  <td>{{$aniv->telefone}}</td>
  <td>{{$aniv->religiao}}</td>
  
  <td>{{ date( 'd/m/Y' , strtotime($aniv->date))}}</td>
 </tr>
 @endforeach

</table>

@elseif(isset($aniversario_month) && count($aniversario_month) >0 )

 <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>CEP</th>
  <th>Endereço</th>
  <th>Bairro</th>
  <th>Telefone</th>
  <th>Religião</th>
  <th>Data de Nascimento</th>

</tr>
 @foreach($aniversario_month as $niv)
 <tr>
  <td>{{$niv->name}}</td>
  <td>{{$niv->cep}}</td>
  <td>{{$niv->endereco}}</td>
  <td>{{$niv->bairro}}</td>
  <td>{{$niv->telefone}}</td>
  <td>{{$niv->religiao}}</td>
  
  <td>{{ date( 'd/m/Y' , strtotime($niv->date))}}</td>
 </tr>
 @endforeach

</table>

@endif

@endsection