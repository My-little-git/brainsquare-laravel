<?php

namespace App\Http\Controllers\Admin\Center;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Center\UpdateRequest;
use App\Models\Center;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Center $center)
    {
        $data = $request->validated();

        $center->update($data);

        return back();
    }
}
