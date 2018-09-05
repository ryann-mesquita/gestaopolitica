
@extends('layouts.index')


@section('content_page')
 
<button type="button" class="btn botao btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 5px;margin-bottom: 10px;">
  Criar Evento <i class="far fa-calendar-plus"></i>
</button>

<br>
<div class="panel panel-primary">
	<div class="panel-heading"></div>
	<div class="panel-body">
		<div id="calendar">         
		</div>   
	</div>
</div>

{!!Form::open(['route' => 'events.store', 'class' => 'form', 'files'=>'true' ])!!}
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Criar Evento</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-4">
        	{!!Form::label('event_name','Nome do Evento:')!!}
        	{!!Form::text('event_name', null,['class'=> 'form-control'])!!}	
        	</div>
        	<div class="col-md-4">
        	{!! Form::label('start_date','Data de Início:') !!}
			{!!Form::date('start_date', null,['class'=> 'form-control', 'id'=>'start_date'])!!}	
        	</div>
        	<div class="col-md-4">
        	{!! Form::label('start_time','Hora de Início:') !!}
			{!!Form::time('start_time', null,['class'=> 'form-control', 'id'=>'start_time'])!!}	
        	</div>
        	<div class="col-md-4">
        	{!!Form::label('end_date','Data de Término:')!!}
        	{!!Form::date('end_date', null,['class'=> 'form-control'])!!}
        	</div>
        	<div class="col-md-4">
        	{!! Form::label('end_time','Hora de Término:') !!}
			{!!Form::time('end_time', null,['class'=> 'form-control', 'id'=>'end_time'])!!}	
        	</div>
            <div class="col-md-4">
            {!! Form::label('color',' Selecione a Cor do Evento:') !!}
            {!!Form::color('color', null,['class'=> 'form-control', 'id'=>'color'])!!} 
            </div>
            <div class="col-md-12">
            {!! Form::label('description','Descrição do Evento:') !!}
            {!!Form::textarea('description', null,['class'=> 'form-control', 'id'=>'description'])!!} 
            </div>
            

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!!Form::submit('Adicionar Evento',['class' => 'btn btn-primary' ])!!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="calendarModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
            <h4 id="modalTitle" class="modal-title"></h4>
        </div>
        <div id="modalBody" class="modal-body"> </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

@endsection

@section('scripts')
 <script src="{{ asset ("/js/jquery.js") }}"></script>
  <script src="{{ asset ("/js/moment.min.js") }}"></script> 
    <script src="{{ asset ("/js/fullcalendar.min.js") }}"></script>
    <script src="{{ asset ("/locale/pt-br.js") }}"></script>
<script type="text/javascript">
	 


       $(function(){
            $("#calendar").fullCalendar(
            {
            	header: {
            		left: 'prev,next today',
            		center: 'title',
            		right: 'month,agendaWeek,agendaDay,listDay'
            	},
            	defaultDate: Date(),
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					events: '/getEventos',
					 eventClick: function(event, jsEvent, view) {
					 $('#modalTitle').html(event.title);
                     $('#modalBody').html(event.description);
                     $('#eventUrl').attr('href',event.url);
                     $('#calendarModal').modal();

                 },



            });
        })


</script>

@endsection