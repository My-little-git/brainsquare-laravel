<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class RegisterProcessController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $credentials = $request->validated();

        $user = Student::create($credentials);

        Auth('student')->login($user);

        return redirect()->intended('/');
    }
}
