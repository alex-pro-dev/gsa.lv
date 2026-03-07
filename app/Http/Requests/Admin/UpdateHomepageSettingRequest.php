<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomepageSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'hero_title' => ['required', 'string', 'max:255'],
            'hero_subtitle' => ['required', 'string', 'max:1000'],
            'hero_primary_cta' => ['required', 'string', 'max:100'],
            'hero_secondary_cta' => ['required', 'string', 'max:100'],
            'about_content' => ['required', 'string'],
            'show_about' => ['nullable', 'boolean'],
            'show_services' => ['nullable', 'boolean'],
            'show_why_choose' => ['nullable', 'boolean'],
            'show_process' => ['nullable', 'boolean'],
            'show_contact' => ['nullable', 'boolean'],
        ];
    }
}
