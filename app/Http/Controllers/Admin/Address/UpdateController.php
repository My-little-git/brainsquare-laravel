<?php

namespace App\Http\Controllers\Admin\Address;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Address\UpdateRequest;
use App\Models\Address;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Address $address)
    {
        $data = $request->validated();

        $address->update($data);

        return to_route('admin.address.index');
    }
}
