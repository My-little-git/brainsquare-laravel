<?php

namespace App\Http\Controllers\Admin\Center;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Center $center)
    {
        $audiences = $center->audiences;

        return view('admin.center.edit', compact('center', 'audiences'));
    }
}
