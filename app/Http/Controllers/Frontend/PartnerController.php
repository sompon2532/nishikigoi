<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eventday;
use App\Models\Countries;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function Index()
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $countries  = Countries::active()->get();

        return view('frontend.partner.index', compact('calendar', 'countries'));
    }

    public function getDetail($country)
    {
        $eventdays  = new Eventday();
        $calendar   = $eventdays->calendar;

        $countries  = Countries::active()->find($country);
        $partners   = Partner::with(['media'])->active()->where('country_id', $country)->paginate(10);

        return view('frontend.partner.detail', compact('calendar', 'countries', 'partners'));
    }

    public function getIndexAlliance()
    {
        $alliances = Partner::with(['media'])->active()->paginate(10);

        return view('frontend.alliance.index', compact('alliances'));
    }
}
