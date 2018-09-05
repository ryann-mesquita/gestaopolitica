@extends('site.template.template')

@section('content')
<h1>Home Page do Site!</h1>
{{$xss}}
@if($var1 == '123')
<p>É iguall</p>
@else 
<p>È diferente</p>
@endif

@for($i = 0; $i < 10; $i++)
<p>Valor: {{$i}}</p>

@endfor
{{--
@if(count($arrayData)>0)
	@foreach($arrayData as $array)
		<p>Foreach:{{$array}}</p>
	@endforeach
@else
	<p>Não existe Itens para serem impressos</p>
@endif
--}}
@forelse($arrayData as $array)
	<p>forelse:{{$array}}</p>
@empty
<p>Não existe itens para serem impressos</p>
@endforelse

@include('site.include.sidebar' )
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
@endpush