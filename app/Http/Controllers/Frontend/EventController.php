<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eventday;

class EventController extends Controller
{
    public function Index()
    {
        // dd('hello');
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        return view('frontend.event.index', compact('calendar'));
    }

    public function getKoi($event, $koi)
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        return view('frontend.event.koi', compact('calendar'));
    }

    public function getWinner()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;
        
        return view('frontend.event.winner', compact('calendar'));
    }
}
