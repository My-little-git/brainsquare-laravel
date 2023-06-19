<?php

namespace App\Http\Controllers\Admin\Address;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Address\StoreRequest;
use App\Models\Address;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Address::create($data);

        return to_route('admin.address.index');
    }
}
