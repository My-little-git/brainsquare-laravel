<?php

namespace App\Http\Controllers\Admin\Audience;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $centers = Center::all();

        return view('admin.audience.create', compact('centers'));
    }
}
