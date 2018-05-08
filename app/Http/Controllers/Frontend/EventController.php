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

        $events = Event::with(['media'])->where('status', 1)->orderBy('end_datetime', 'desc')->get();

        $nowEvents = array();
        $passEvents = array();

        foreach ($events as $index => $event) {
            $now = Carbon::now();
            $nowDateTime = explode(' ', $now);
            $endDateTime = explode(' ', $event->end_datetime);

            if($nowDateTime[0] > $endDateTime[0]) {
                array_push($passEvents, $event);
            } elseif ($nowDateTime[0] < $endDateTime[0]) {
                array_push($nowEvents, $event);   
            } elseif ($nowDateTime[0] == $endDateTime[0]) {
                if ($nowDateTime[1] > $endDateTime[1]) {
                    array_push($passEvents, $event);
                } else {
                    array_push($nowEvents, $event);                    
                }
            }
        }

        return view('frontend.event.index', compact('calendar', 'events', 'nowEvents', 'passEvents'));
    }

    public function getEvent($event)
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $events = Event::with(['media'])->find($event);
        $kois = Koi::with(['media'])->where('status', 1)->where('event_id', $event)->get();

        return view('frontend.event.event', compact('calendar', 'events', 'kois'));
    }

    public function getKoi($event, $koi)
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $kois = Koi::with(['media'])->where('id', $koi)->find($koi);

        return view('frontend.event.koi', compact('calendar', 'kois'));
    }

    public function getWinner()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;
        
        return view('frontend.event.winner', compact('calendar'));
    }
}
