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
        $remember = (bool) ($credentials['remember'] ?? false);


        unset($credentials['remember']);

        if (Auth('admin')->attempt($credentials, $remember)){
            $request->session()->regenerate();

            return to_route('admin.course.index');
        }

        if (Auth('teacher')->attempt($credentials, $remember)){
            $request->session()->regenerate();

            return to_route('teacher.lesson.index');
        }

        if (Auth('student')->attempt($credentials, $remember)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Такого пользователя не существует',
        ])->onlyInput('email');
    }
}
