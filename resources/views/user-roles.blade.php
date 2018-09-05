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


<h1 class="title-pg">Perfis : {{$users->name}}</h1>


<table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Label</th>
  

</tr>
 @foreach($roles as $role)
 
 <tr>
  <td>{{$role->name}}</td>
  <td>{{$role->label}}</td>



 </tr>

 @endforeach
</table>


@endsection
