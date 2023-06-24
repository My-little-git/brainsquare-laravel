<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\StoreRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['avatar'])){
            $avatar = $data['avatar'];
            $path = $avatar->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        Teacher::create($data);

        return to_route('admin.teacher.index');
    }
}
