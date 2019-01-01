<?php

namespace Kuwar\Timezones;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class TimezonesController extends Controller
{
    public function index($timezone = NULL)
    {
        $currentTime = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();

        return view('timezones::index', compact('currentTime'));
    }
}
