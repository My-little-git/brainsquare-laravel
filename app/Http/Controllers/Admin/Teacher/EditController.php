<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Teacher;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Teacher $teacher)
    {
        $educations = Education::all();

        return view('admin.teacher.edit', compact('educations', 'teacher'));
    }
}
