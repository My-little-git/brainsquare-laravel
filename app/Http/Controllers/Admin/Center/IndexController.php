<?php

namespace App\Http\Controllers\Admin\Center;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $centers = Center::all();

        return view('admin.center.index', compact('centers'));
    }
}
