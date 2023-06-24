<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'max:60'],
            'surname' => ['required', 'min:2', 'max:70'],
            'patronymic' => ['nullable', 'min:2', 'max:60'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'min:11', 'max:11'],
            'birthday' => ['required', 'date'],
            'password' => ['required', 'min:8', 'confirmed']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
