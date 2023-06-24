<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke()
    {
        if (auth('student')){
            $nextWeek = Carbon::today()->addWeek()->format('Y-m-d');
            $lessons = Lesson::where('date', '<', $nextWeek)->orderBy('date', 'asc')->get();
            $lessons = collect($lessons)
                ->groupBy('date')
                ->map(function ($item) {
                    return array_merge($item->toArray());
                });
        }
        return view('home', compact('lessons'));
    }
}
