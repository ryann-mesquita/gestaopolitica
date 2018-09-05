<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Events;
use Calendar;

class EventsController extends Controller
{
    public function index()
    {
    	/*$events = Events::get();
    	$event_list=[];
    	foreach ($events as $event) {
    		$event_list[] = Calendar::event(
    			$event->event_name,
    			true,
    			new\DateTime($event->start_date),
    			new\DateTime($event->end_date. '+ 1 day')
    			);
    	}
       $events = Events::select("id", "event_name as title", "start_date as start", 
            "end_date as end", "color")->get()->toarray();
    	$calendar_details = Calendar::addEvents($event_list);*/

    	// return response()->json($event_list);
        return view('events', compact(''));
    }
    public function getEventos(){

     /*   $events = Events::get();
        $event_list=[];
        foreach ($events as $event) {
            $event_list[] = Calendar::event(
                $event->event_name,
                true,
                new\DateTime($event->start_date),
                new\DateTime($event->end_date. '+ 1 day')
                );
        }

        $calendar_details = Calendar::addEvents($event_list);*/
        $events = Events::select("id", "event_name as title", "start_date as start", 
            "end_date as end", "color", "description as description")->get()->toarray();
        return response()->json($events);


    }
    public function store(Request $request)
    {
    	$eventos = Events::all();
    	$dataForm = $request->all();

    	$event = new Events;
    	$event->event_name=$request->event_name;
    	
        $event->start_date=$request->start_date." ".date("H:m:s", strtotime($request->start_time)); 

    	$event->end_date=$request->end_date." ".date("H:m:s", strtotime($request->end_time)); 
    	$event->description=$request->description;  
        $event->color=$request->color; 
    	$event->save();

    	return redirect()
        ->route('events.index');
        
    }
}
