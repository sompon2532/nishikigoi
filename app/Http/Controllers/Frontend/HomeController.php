<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eventday;
use App\Models\News;
use App\Models\Event;

use Carbon\Carbon;

class HomeController extends Controller
{
    public function Index ()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $news = News::with(['media'])
                    ->where('status', 1)
                    ->whereDate('end_datetime', '>=' ,Carbon::now('Asia/Bangkok')->toDateTimeString())
                    ->orderBy('end_datetime', 'desc')
                    ->get();

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

        return view('frontend.index', compact('calendar', 'news', 'nowEvents'));
    }

    public function getContact()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        return view('frontend.home.contact-us', compact('calendar'));
    }
}
