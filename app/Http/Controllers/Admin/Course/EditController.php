<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Course $course)
    {
        $subjects = Subject::all();
        $course_types = CourseType::all();
        $teachers = Teacher::all();

        return view('admin.course.edit', compact('subjects', 'course_types', 'teachers', 'course'));
    }
}
