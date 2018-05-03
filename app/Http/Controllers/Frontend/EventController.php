<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function Index()
    {
        // dd('hello');
        return view('frontend.event.index');
    }

    public function getKoi($event, $koi)
    {
        return view('frontend.event.koi');
    }

    public function getWinner()
    {
        return view('frontend.event.winner');
    }
}
