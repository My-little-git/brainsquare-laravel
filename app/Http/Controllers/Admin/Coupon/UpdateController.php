<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Coupon\UpdateRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Coupon $coupon)
    {
        $data = $request->validated();

        $coupon->update($data);

        return to_route('admin.coupon.index');
    }
}
