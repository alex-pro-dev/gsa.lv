<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:160'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:4096'],
            'specification' => ['nullable', 'file', 'mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt', 'max:15360'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }
}
