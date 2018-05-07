<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eventday;
// use Calendar;

class HomeController extends Controller
{
    public function Index ()
    {
        // $events = [];
        // // $data = Event::all();
        // // if($data->count()) {
        // //     foreach ($data as $key => $value) {
        // //         $events[] = Calendar::event(
        // //             $value->title,
        // //             true,
        // //             new \DateTime($value->start_date),
        // //             new \DateTime($value->end_date.' +1 day'),
        // //             null,
        // //             // Add color and link on event
	    // //             [
	    // //                 'color' => '#f05050',
	    // //                 'url' => 'pass here url and any route',
	    // //             ]
        // //         );
        // //     }
        // // }
        // $calendar = Calendar::addEvents($events);
        // $calendar->setOptions([
        //     'locale' => config('app.locale'),
        //     'views' => [ 
        //         'month' => [ // name of view
        //             'columnFormat' => 'dd'
        //         ]
        //     ], 
        //     'header' => [
        //         'left'  => 'prev',
        //         'center'=> 'title',
        //         'right' => 'next'
        //     ],
        //     'eventLimit' => 0,

        // ]);

        // return view('frontend.index', compact('calendar'));

        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;
        return view('frontend.index', compact('calendar'));
    }
}
