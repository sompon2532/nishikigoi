<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use Calendar;

class Eventday
{
    public $calendar;
    public function __construct()
    // public function getEventday()
    {
        $events = [];
        $data = Event::all();
        // dd($data);
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    null,//Title
                    true,
                    new \DateTime($value->start_datetime),
                    new \DateTime($value->end_datetime.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#ff0000',
	                    'url' => '/event/'.$value->id,
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);

        // $events = [];

        // $events[] = \Calendar::event(
        //     'Event One', //event title
        //     false, //full day event?
        //     '2018-05-11T0800', //start time (you can also use Carbon instead of DateTime)
        //     '2018-05-12T0800', //end time (you can also use Carbon instead of DateTime)
        //     0 //optionally, you can specify an event ID
        // );

        // $events[] = \Calendar::event(
        //     "Valentine's Day", //event title
        //     true, //full day event?
        //     new \DateTime('2018-05-14'), //start time (you can also use Carbon instead of DateTime)
        //     new \DateTime('2018-05-15'), //end time (you can also use Carbon instead of DateTime)
        //     'stringEventId' //optionally, you can specify an event ID
        // );

        // $events[] = \Calendar::event(
        //     "Valentine's Day", //event title
        //     true, //full day event?
        //     new \DateTime('2018-05-14'), //start time (you can also use Carbon instead of DateTime)
        //     new \DateTime('2018-05-15'), //end time (you can also use Carbon instead of DateTime)
        //     'stringEventId' //optionally, you can specify an event ID
        // ); 

        // $calendar = Calendar::addEvents($events);
        

        $calendar->setOptions([
            // 'theme' => true,    
            'themeSystem' => 'bootstrap3',
            'locale' => config('app.locale'),
            'views' => [ 
                'month' => [ // name of view
                    'columnFormat' => 'dd'
                ]
            ], 
            'header' => [
                'left'  => 'prev',
                'center'=> 'title',
                'right' => 'next'
            ],
            'eventLimit' => 0,

        ]);
        $this->calendar = $calendar;
        // $calendar = Calendar::addEvents($events);
    }
}
