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


<h1 class="title-pg">Permissions : {{$role->name}}</h1>


<table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Label</th>
  

</tr>
 @foreach($permission as $permission)
 
 <tr>
  <td>{{$permission->name}}</td>
  <td>{{$permission->label}}</td>



 </tr>

 @endforeach
</table>


@endsection
