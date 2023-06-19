<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subject\StoreRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Subject::create($data);

        return to_route('admin.subject.index');
    }
}
