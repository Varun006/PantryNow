<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    protected $time = '9 AM -  10 AM';

    public function setTime()
    {
        $this->time = request('time');

        session(['schedule' => true, 'scheduleTime' => $this->time]);

        return response()->json([
            'success' => true,
            'redirect' => '/checkout',
        ]);
    }

    public function getTime()
    {
        return response()->json([
            'success' => true,
            'time' => session('scheduleTime' , $this->time)
        ]);
    }

    public function setDate()
    {
        dd(Carbon::tomorrow());
    }
}
