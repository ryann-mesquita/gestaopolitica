@extends('painel.templates.template')
@extends('layouts.index')

@section('title_page')

 <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
             Relatório
             <small>Personalizado</small>
            </h1>
             <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                 <li class="active">Here</li>
            </ol>
        </section>
       
@endsection


@section('content_page')
@if(isset($consulta) && count($consulta) >0 )
<h3>{{$consulta->total()}} Registros</h3>
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
 @foreach($consulta as $product)
 <tr>
  <td>{{$product->name}}</td>
  <td>{{$product->cep}}</td>
  <td>{{$product->endereco}}</td>
  <td>{{$product->bairro}}</td>
  <td>{{$product->telefone}}</td>
  <td>{{$product->religiao}}</td>
  
  <td>{{ date( 'd/m/Y' , strtotime($product->date))}}</td>
 </tr>
 @endforeach

</table>
@if(isset($dataForm))
 {!!$consulta->appends($dataForm)->links()!!}
@else
 {!!$consulta->links()!!}
@endif

 



@elseif(isset($endereco) && count($endereco) >0 )
<h3>{{$endereco->total()}} Registros</h3>

 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>CEP</th>
  <th>Endereço</th>
  <th>Bairro</th>
  <th>Telefone</th>
  <th>Religião</th>

</tr>
 @foreach($endereco as $end)
 <tr>
  <td>{{$end->name}}</td>
  <td>{{$end->cep}}</td>
  <td>{{$end->endereco}}</td>
  <td>{{$end->bairro}}</td>
  <td>{{$end->telefone}}</td>
  <td>{{$end->religiao}}</td>
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$endereco->appends($dataForm)->links()!!}
@else
 {!!$endereco->links()!!}
@endif

@elseif(isset($rel) && count($rel) >0 )
<h3>{{$rel->total()}} Registros</h3>


 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>CEP</th>
  <th>Endereço</th>
  <th>Bairro</th>
  <th>Telefone</th>
  <th>Religião</th>
</tr>

 @foreach($rel as $relig)
 <tr>
  <td>{{$relig->name}}</td>
  <td>{{$relig->cep}}</td>
  <td>{{$relig->endereco}}</td>
  <td>{{$relig->bairro}}</td>
  <td>{{$relig->telefone}}</td>
  <td>{{$relig->religiao}}</td>
 </tr>


 @endforeach
</table>
@if(isset($dataForm))
 {!!$rel->appends($dataForm)->links()!!}
@else
 {!!$rel->links()!!}
@endif


@elseif(isset($sexo) && count($sexo) >0 )
<h3>{{$sexo->total()}} Registros</h3>


 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>CEP</th>
  <th>Endereço</th>
  <th>Bairro</th>
  <th>Telefone</th>
  <th>Religião</th>

</tr>
 @foreach($sexo as $sexo_cons)
 <tr>
  <td>{{$sexo_cons->name}}</td>
  <td>{{$sexo_cons->cep}}</td>
  <td>{{$sexo_cons->endereco}}</td>
  <td>{{$sexo_cons->bairro}}</td>
  <td>{{$sexo_cons->telefone}}</td>
  <td>{{$sexo_cons->religiao}}</td>
 </tr>



 @endforeach

</table>
@if(isset($dataForm))
 {!!$sexo->appends($dataForm)->links()!!}
@else
 {!!$sexo->links()!!}
@endif

@elseif(isset($form) && count($form) >0 )
<h3>{{$form->total()}} Registros</h3>


 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>CEP</th>
  <th>Endereço</th>
  <th>Bairro</th>
  <th>Telefone</th>
  <th>Religião</th>

</tr>
 @foreach($form as $forms)
 <tr>
  <td>{{$forms->name}}</td>
  <td>{{$forms->cep}}</td>
  <td>{{$forms->endereco}}</td>
  <td>{{$forms->bairro}}</td>
  <td>{{$forms->telefone}}</td>
  <td>{{$forms->religiao}}</td>
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$form->appends($dataForm)->links()!!}
@else
 {!!$form->links()!!}
@endif

@elseif(isset($lid) && count($lid) >0 )
<h3>{{$lid->total()}} Registros</h3>


 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>CEP</th>
  <th>Endereço</th>
  <th>Bairro</th>
  <th>Telefone</th>
  <th>Religião</th>
</tr>

 @foreach($lid as $lide)
 <tr>
  <td>{{$lide->name}}</td>
  <td>{{$lide->cep}}</td>
  <td>{{$lide->endereco}}</td>
  <td>{{$lide->bairro}}</td>
  <td>{{$lide->telefone}}</td>
  <td>{{$lide->religiao}}</td>
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$lid->appends($dataForm)->links()!!}
@else
 {!!$lid->links()!!}
@endif

@elseif(isset($pri) && count($pri) >0 )
<h3>{{$pri->total()}} Registros</h3>


 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>CEP</th>
  <th>Endereço</th>
  <th>Bairro</th>
  <th>Telefone</th>
  <th>Religião</th>
</tr>

 @foreach($pri as $priori)
 <tr>
  <td>{{$priori->name}}</td>
  <td>{{$priori->cep}}</td>
  <td>{{$priori->endereco}}</td>
  <td>{{$priori->bairro}}</td>
  <td>{{$priori->telefone}}</td>
  <td>{{$priori->religiao}}</td>
 </tr>


 @endforeach
</table>
@if(isset($dataForm))
 {!!$pri->appends($dataForm)->links()!!}
@else
 {!!$pri->links()!!}
@endif
@endif

@endsection