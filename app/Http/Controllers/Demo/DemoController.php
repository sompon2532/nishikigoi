<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Koi;
use Yajra\Datatables\Datatables;

class DemoController extends Controller
{
    public function index() {
        return Datatables::of(Koi::query())->make(true);
    }
}
