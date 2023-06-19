<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginProcessController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth('student')->attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        if (Auth('teacher')->attempt($credentials)){
            $request->session()->regenerate();

            return to_route('teacher.lesson.index');
        }

        if (Auth('admin')->attempt($credentials)){
            $request->session()->regenerate();

            return to_route('admin.course.index');
        }

        return back()->withErrors([
            'login' => 'Такого пользователя не существует',
        ])->onlyInput('login');
    }
}
