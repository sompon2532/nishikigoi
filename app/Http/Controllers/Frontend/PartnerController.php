<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function Index()
    {
        return view('frontend.partner.index');
    }

    public function getDetail()
    {
        return view('frontend.partner.detail');
    }
}
