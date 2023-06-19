<?php

namespace App\Http\Controllers;

class HomeworkController extends Controller
{
    public function __invoke()
    {
        return view('homework');
    }
}
