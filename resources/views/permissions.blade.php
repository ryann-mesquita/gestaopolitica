@extends('layouts.index')

@section('title_page')

 <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
              Relatórios
             <small>Optional description</small>
            </h1>
             <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                 <li class="active">Here</li>
            </ol>
        </section>
@endsection

@section('content_page')


<h1 class="title-pg">Permissões</h1>


<table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Permissões</th>
  <th>Ações</th>


</tr>
 @foreach($permission as $perm)
 
 <tr>
  <td>{{$perm->name}}</td>
  <td>{{$perm->label}}</td>
  <td><a href="{{url("/permission/$perm->id/roles")}}" class=" actions delete">
    <i class="fas fa-lock cadeado-color"></i>
  </td>
  


 </tr>

 @endforeach
</table>


@endsection