<?php

namespace Clock\ClockProvider;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClockControllerFacdecs extends Controller
{
    public static function clock(){

        return config('set_clock');
    }

    public static function map(){

        return view('map');
    }
}
