<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Teacher $teacher)
    {
        $data = $request->validated();

        $teacher->update($data);

        return to_route('admin.teacher.index');
    }
}
