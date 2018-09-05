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
 <h3>{{$consulta->total()}} Registros!</h3>
 <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Titulo</th>
  <th>Seção</th>
  <th>Zona</th>
  <th>Ações</th>
  
</tr>
 @foreach($consulta as $colaborador)
 <tr>
  <td>{{$colaborador->name}}</td>
  <td>{{$colaborador->telefone}}</td>
  <td>{{$colaborador->endereco}}</td>
  <td>{{$colaborador->titulo}}</td>
  <td>{{$colaborador->secao}}</td>
  <td>{{$colaborador->zona}}</td>
  <td>
    <a href="{{url("/colaboradores/$colaborador->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $colaborador->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $colaborador->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
  
  
  
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
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Titulo</th>
  <th>Seção</th>
  <th>Zona</th>
  <th>Ações</th>
  
</tr>
 @foreach($endereco as $end)
 <tr>
  <td>{{$end->name}}</td>
  <td>{{$end->telefone}}</td>
  <td>{{$end->endereco}}</td>
  <td>{{$end->titulo}}</td>
  <td>{{$end->secao}}</td>
  <td>{{$end->zona}}</td>
  <td>
    <a href="{{url("/colaboradores/$end->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $end->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $end->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$endereco->appends($dataForm)->links()!!}
@else
 {!!$endereco->links()!!}
@endif


@elseif(isset($localidade) && count($localidade) >0 )
<h3>{{$localidade->total()}} Registros</h3>

 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Titulo</th>
  <th>Seção</th>
  <th>Zona</th>
  <th>Ações</th>
  </tr>

 @foreach($localidade as $local)
 <tr>
  <td>{{$local->name}}</td>
  <td>{{$local->telefone}}</td>
  <td>{{$local->endereco}}</td>
  <td>{{$local->titulo}}</td>
  <td>{{$local->secao}}</td>
  <td>{{$local->zona}}</td>
    <td>
    <a href="{{url("/colaboradores/$local->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $local->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $local->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$localidade->appends($dataForm)->links()!!}
@else
 {!!$localidade->links()!!}
@endif

@elseif(isset($titulo) && count($titulo) >0 )


 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Seção</th>
  <th>Zona</th>
  <th>Titulo</th>
  <th>Ações</th>
</tr>
 @foreach($titulo as $tit)
 <tr>
  <td>{{$tit->name}}</td>
  <td>{{$tit->telefone}}</td>
  <td>{{$tit->endereco}}</td>
  <td>{{$tit->titulo}}</td>
  <td>{{$tit->secao}}</td>
  <td>{{$tit->zona}}</td>
      <td>
    <a href="{{url("/colaboradores/$tit->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $tit->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $tit->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
 </tr>


 @endforeach
</table>


@elseif(isset($zona) && count($zona) >0 )
<h3>{{$zona->total()}} Registros</h3>

 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Titulo</th>
  <th>Seção</th>
  <th>Zona</th>
  <th>Ações</th>
  
</tr>
 @foreach($zona as $zon)
 <tr>
  <td>{{$zon->name}}</td>
  <td>{{$zon->telefone}}</td>
  <td>{{$zon->endereco}}</td>
  <td>{{$zon->titulo}}</td>
  <td>{{$zon->secao}}</td>
  <td>{{$zon->zona}}</td>
  <td>
    <a href="{{url("/colaboradores/$zon->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $zon->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $zon->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
  
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$zona->appends($dataForm)->links()!!}
@else
 {!!$zona->links()!!}
@endif

@elseif(isset($secao) && count($secao) >0 )
<h3>{{$secao->total()}} Registros</h3>

 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Titulo</th>
  <th>Seção</th>
  <th>Zona</th>
  <th>Ações</th>
  
</tr>

 @foreach($secao as $sec)
 <tr>
  <td>{{$sec->name}}</td>
  <td>{{$sec->telefone}}</td>
  <td>{{$sec->endereco}}</td>
  <td>{{$sec->titulo}}</td>
  <td>{{$sec->secao}}</td>
  <td>{{$sec->zona}}</td>
    <td>
    <a href="{{url("/colaboradores/$sec->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $sec->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $sec->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$secao->appends($dataForm)->links()!!}
@else
 {!!$secao->links()!!}
@endif

@elseif(isset($lider) && count($lider) >0 )
<h3>{{$lider->total()}} Registros</h3>

 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Titulo</th>
  <th>Seção</th>
  <th>Zona</th>
  <th>Ações</th>
  
</tr>

 @foreach($lider as $lid)
 <tr>
  <td>{{$lid->name}}</td>
  <td>{{$lid->telefone}}</td>
  <td>{{$lid->endereco}}</td>
  <td>{{$lid->titulo}}</td>
  <td>{{$lid->secao}}</td>
  <td>{{$lid->zona}}</td>
  
    <td>
    <a href="{{url("/colaboradores/$lid->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $lid->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $lid->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$lider->appends($dataForm)->links()!!}
@else
 {!!$lider->links()!!}
@endif

@elseif(isset($sublider) && count($sublider) >0 )
<h3>{{$sublider->total()}} Registros</h3>

 
  <table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Telefone</th>
  <th>Endereço</th>
  <th>Titulo</th>
  <th>Seção</th>
  <th>Zona</th>
  <th>Ações</th>
  
</tr>

 @foreach($sublider as $sub)
 <tr>
  <td>{{$sub->name}}</td>
  <td>{{$sub->telefone}}</td>
  <td>{{$sub->endereco}}</td>
  <td>{{$sub->titulo}}</td>
  <td>{{$sub->secao}}</td>
  <td>{{$sub->zona}}</td>
     <td>
    <a href="{{url("/colaboradores/$sub->id/profile")}}" class=" actions edit ">
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
    @can('edit_post')
    <a href="{{route('colaboradores.edit', $sub->id)}}" class="actions edit" >
      <span class="fas fa-user-edit"></span>
    </a>
    <a href="{{route('colaboradores.show', $sub->id)}}" class=" actions edit">
      <span class="far fa-trash-alt"></span>
    </a>
   @endcan
  </td>
 </tr>


 @endforeach
</table>

@if(isset($dataForm))
 {!!$sublider->appends($dataForm)->links()!!}
@else
 {!!$sublider->links()!!}
@endif

@endif
@endsection