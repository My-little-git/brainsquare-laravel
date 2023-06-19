<?php

namespace App\Http\Controllers\Admin\Audience;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Audience\StoreRequest;
use App\Models\Audience;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Audience::create($data);

        return to_route('admin.audience.index');
    }
}
