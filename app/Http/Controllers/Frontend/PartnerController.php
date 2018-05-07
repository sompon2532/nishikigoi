<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eventday;

class PartnerController extends Controller
{
    public function Index()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        return view('frontend.partner.index', compact('calendar'));
    }

    public function getDetail()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        return view('frontend.partner.detail', compact('calendar'));
    }
}
