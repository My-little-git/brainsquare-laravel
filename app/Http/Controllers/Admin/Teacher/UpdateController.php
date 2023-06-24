<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Teacher $teacher)
    {
        $data = $request->validated();

        if (isset($data['avatar'])){
            $avatar = $data['avatar'];
            $path = $avatar->store('avatars', 'public');
            $data['avatar'] = $path;
            if ($teacher->avatar !== 'avatars/no-image.png'){
                $old_avatar = Storage::disk('public')->delete($teacher->avatar);
            }
        }

        $teacher->update($data);

        return to_route('admin.teacher.index');
    }
}
