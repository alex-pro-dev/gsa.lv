<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactDetailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'address' => ['required', 'string', 'max:255'],
            'aluminum_phone' => ['required', 'string', 'max:50'],
            'aluminum_email' => ['required', 'email', 'max:120'],
            'pvc_phone' => ['required', 'string', 'max:50'],
            'pvc_email' => ['required', 'email', 'max:120'],
            'sales_phone' => ['required', 'string', 'max:50'],
            'sales_email' => ['required', 'email', 'max:120'],
            'working_hours_weekdays' => ['required', 'string', 'max:120'],
            'working_hours_weekend' => ['required', 'string', 'max:120'],
            'map_embed_url' => ['nullable', 'url', 'max:1000'],
        ];
    }
}
