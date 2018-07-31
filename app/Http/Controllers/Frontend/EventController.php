<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eventday;
use App\Models\Event;
use App\Models\Koi;

use Carbon\Carbon;

class EventController extends Controller
{
    public function Index()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $events = Event::with(['media'])->active()->orderBy('end_datetime', 'desc')->get();

        $nowEvents   = array();
        $passEvents  = array();

        foreach ($events as $index => $event) {
            $now = Carbon::now('Asia/Bangkok');
            $nowDateTime    = explode(' ', $now);
            $endDateTime    = explode(' ', $event->end_datetime);
            $startDateTime  = explode(' ', $event->start_datetime);

            if($nowDateTime[0] > $startDateTime[0]){
                if($nowDateTime[0] > $endDateTime[0]) {
                    array_push($passEvents, $event);
                } 
                elseif ($nowDateTime[0] < $endDateTime[0]) {
                    array_push($nowEvents, $event);   
                } 
                elseif ($nowDateTime[0] == $endDateTime[0]) {
                    if ($nowDateTime[1] > $endDateTime[1]) {
                        array_push($passEvents, $event);
                    } 
                    else {
                        array_push($nowEvents, $event);                    
                    }
                }
            } 
            elseif ($nowDateTime[0] == $startDateTime[0]) {
                if ($nowDateTime[1] > $startDateTime[1]) {
                    if($nowDateTime[0] > $endDateTime[0]) {
                        array_push($passEvents, $event);
                    } 
                    elseif ($nowDateTime[0] < $endDateTime[0]) {
                        array_push($nowEvents, $event);   
                    } 
                    elseif ($nowDateTime[0] == $endDateTime[0]) {
                        if ($nowDateTime[1] > $endDateTime[1]) {
                            array_push($passEvents, $event);
                        } 
                        else {
                            array_push($nowEvents, $event);                    
                        }
                    }
                }
            }
        }

        return view('frontend.event.index', compact('calendar', 'nowEvents', 'passEvents'));
    }

    public function getEvent($event)
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $events = Event::with(['media'])->find($event);
        if (!$events) { 
            return  back(); 
        }

        $kois   = Koi::with(['media'])->active()->where('event_id', $event)->paginate(16);
        $now    = Carbon::now('Asia/Bangkok');
        $nowDateTime = explode(' ', $now);
        $endDateTime = explode(' ', $events->end_datetime);

        // dd($kois->first()->register);

        if($nowDateTime[0] > $endDateTime[0]) {
            return view('frontend.event.winner', compact('calendar', 'events', 'kois')); //Pass
        } elseif ($nowDateTime[0] < $endDateTime[0]) {
            return view('frontend.event.event', compact('calendar', 'events', 'kois')); //Now
        } elseif ($nowDateTime[0] == $endDateTime[0]) {
            if ($nowDateTime[1] > $endDateTime[1]) {
                return view('frontend.event.winner', compact('calendar', 'events', 'kois')); //Pass
            } else {
                return view('frontend.event.event', compact('calendar', 'events', 'kois')); //Now  
            }
        }
        
    }

    public function getKoi($event, $koi)
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $events = Event::find($event);
        $kois = Koi::with(['media'])->active()->where('id', $koi)->find($koi);

        return view('frontend.event.koi', compact('calendar', 'events', 'kois'));
    }

    public function getWinner()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;
        
        return view('frontend.event.winner', compact('calendar'));
    }
}
