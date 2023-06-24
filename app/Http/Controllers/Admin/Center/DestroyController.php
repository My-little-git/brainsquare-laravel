<?php

namespace App\Http\Controllers\Admin\Center;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Center $center)
    {
        $center->delete();

        return to_route('admin.center.index');
    }
}
