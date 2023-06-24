<?php

namespace App\Http\Requests\Admin\Coupon;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class UpdateRequest extends FormRequest
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
        $today = Carbon::now()->addDay()->format('Y-m-d H:i');

        return [
            'code' => ['required', 'string', 'min:3'],
            'value' => ['required', 'integer'],
            'type' => ['required', 'boolean'],
            'only_once' => ['required', 'boolean'],
            'expired_at' => ['nullable', 'date:d-m-Y H:i', "after:$today"],
            'description' => ['required', 'min:2']
        ];
    }
}
