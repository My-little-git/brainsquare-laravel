<?php

namespace App\Http\Controllers\Admin\Center;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Center\StoreRequest;
use App\Models\Center;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Center::create($data);

        return to_route('admin.center.index');
    }
}
