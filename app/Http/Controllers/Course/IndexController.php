<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subject;

class IndexController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();
        $subjects = Subject::all();

        return view('course.index', compact('courses', 'subjects'));
    }
}
