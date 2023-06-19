<?php

namespace App\Http\Controllers\Admin\Audience;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Audience;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Audience $audience)
    {
        $addresses = Address::all();

        return view('admin.audience.edit', compact('audience', 'addresses'));
    }
}
