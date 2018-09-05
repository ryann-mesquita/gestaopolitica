	$(document).ready(function() {
		$('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,listDay'
					},
					defaultDate: Date(),
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					events:[
					
		  
					{
					title:'teste',
					start:'2018-08-08',
					},	
					]			
				});
			});