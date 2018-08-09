<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Demo;
use Yajra\Datatables\Datatables;

class DemoController extends Controller
{
    public function index() {
        return Datatables::of(Demo::query())->make(true);
    }
}
