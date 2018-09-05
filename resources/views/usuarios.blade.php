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


<h1 class="title-pg">Usuários</h1>


<table class="table table-striped">
<tr>
  <th>Nome</th>
  <th>Email</th>
  <th>Ações</th>
 

</tr>
 @foreach($user as $user)
 
 <tr>
  <td>{{$user->name}}</td>
  <td>{{$user->email}}</td>
  <td><a href="{{url("/user/$user->id/roles")}}" class=" actions delete">
    <i class="fas fa-lock cadeado-color"></i>
  </td>
  


 </tr>

 @endforeach
</table>


@endsection