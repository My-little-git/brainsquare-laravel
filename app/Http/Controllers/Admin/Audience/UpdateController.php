<?php

namespace App\Http\Controllers\Admin\Audience;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Audience\UpdateRequest;
use App\Models\Audience;
use App\Models\Center;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Audience $audience)
    {
        $data = $request->validated();

        $audience->update($data);

        return to_route('admin.center.edit', $audience->center->id);
    }
}
