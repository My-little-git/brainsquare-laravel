<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'max:30'],
            'surname' => ['required', 'min:2', 'max:40'],
            'patronymic' => ['max:40'],
            'email' => ['required', ]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
