<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subject\UpdateRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Subject $subject)
    {
        $data = $request->validated();

        $subject->update($data);

        return to_route('admin.subject.index');
    }
}
