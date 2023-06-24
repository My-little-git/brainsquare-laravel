<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function __invoke()
    {
//        $currentDay = Carbon::now()->firstOfMonth();
//        while ($currentDay->dayOfWeekIso !== 1){
//            $currentDay->subDay();
//        }
//
//        $days = [];
//
//        for ($i = 0; $i < 40; $i++){
//            $days[] = $currentDay->day;
//            if
//        }

        return view('schedule');
    }
}
