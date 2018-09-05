@extends('painel.templates.template')
@extends('layouts.index')

@section('title_page')

 <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
              Mapa em Tempo Real
             <small></small>
            </h1>
             <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                 <li class="active">Here</li>
            </ol>
        </section>
       
@endsection


@section('content_page')


<div class="container">
  <img src="{{ asset('images/Mapa-de-ananindeua.png') }}" id="mapa" usemap="#shape"  >
  
  
  <h4><span id="guajara" class="label label-black center">{{$guajara}} </span></h4>
  <h4><span id="maguari" class="label label-black center">{{$maguari}} </span></h4>
  <h4><span id="heliolandia" class="label label-black center">{{$heliolandia}} </span></h4>

  <h4><span id="distrito" class="label label-black center">{{$distrito_industrial}} </span></h4>

  <h4><span id="geraldo_palmeira" class="label label-black center">{{$geraldo_palmeira}} </span></h4>
  <h4><span id="centro" class="label label-black center">{{$centro}} </span></h4>
  <h4><span id="levilandia" class="label label-black center">{{$levilandia}} </span></h4>
  <h4><span id="aguas_lindas" class="label label-black center">{{$aguas_lindas}} </span></h4>
  <h4><span id="guanabara" class="label label-black center">{{$guanabara}} </span></h4>
  <h4><span id="jaderlandia" class="label label-black center">{{$jaderlandia}} </span></h4>
  <h4><span id="atalaia" class="label label-black center">{{$atalaia}} </span></h4>
  <h4><span id="coqueiro" class="label label-black center">{{$coqueiro}} </span></h4>
    <h4><span id="jiboia_branca" class="label label-black center">{{$jiboia_branca}} </span></h4>
    <h4><span id="horas" class="label label-black center">{{$horas}} </span></h4>
  <h4><span id="julia_seffer" class="label label-black center">{{$julia_seffer}} </span></h4>
  <h4><span id="aguas_brancas" class="label label-black center">{{$aguas_brancas}} </span></h4>

  <h4><span id="aura" class="label label-black center">{{$aura}} </span></h4>
  <h4><span id="paar" class="label label-black center">{{$paar}} </span></h4>
  <h4><span id="icui" class="label label-black center">{{$icui}} </span></h4>
  <h4><span id="curucamba" class="label label-black center">{{$curuçamba}} </span></h4>
  <h4><span id="cidade_nova" class="label label-black center">{{$cidade_nova}} </span></h4>




</div>

<br>
<!-- <map name = "shape">
<area shape = "circle" alt="parte 1" coords = "347,138,0,0" href="parte1.html"/>
</map> -->

@endsection