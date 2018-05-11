<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eventday;
use App\Models\News;

use Carbon\Carbon;

class HomeController extends Controller
{
    public function Index ()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $news = News::with(['media'])
                    ->where('status', 1)
                    ->whereDate('end_datetime', '>=' ,Carbon::now()->toDateString())
                    ->orderBy('end_datetime', 'desc')
                    ->get();

        return view('frontend.index', compact('calendar', 'news'));
    }
}
