<?php

namespace App\Http\Requests\Admin\Course;

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
            'name' => 'nullable',
            'subject_id' => 'nullable',
            'course_type_id' => 'nullable',
            'teacher_id' => 'nullable',
            'seats' => 'nullable',
            'lessons' => 'nullable',
            'start_at' => 'nullable',
            'end_at' => 'nullable',
            'days' => 'nullable',
            'time' => 'nullable'
        ];
    }
}
