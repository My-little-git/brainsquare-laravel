<?php

namespace App\Http\Controllers\Admin\Audience;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $addresses = Address::all();

        return view('admin.audience.create', compact('addresses'));
    }
}
