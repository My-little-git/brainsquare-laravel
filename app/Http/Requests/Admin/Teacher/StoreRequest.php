<?php

namespace App\Http\Requests\Admin\Teacher;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'avatar' => ['nullable', 'image'],
            'name' => ['required', 'min:2', 'max:60'],
            'surname' => ['required', 'min:2', 'max:70'],
            'education_id' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'min:11', 'max:11'],
            'birthday' => ['required', 'date_format:Y-m-d'],
            'password' => ['required', 'min:8', 'confirmed']
        ];
    }
}
