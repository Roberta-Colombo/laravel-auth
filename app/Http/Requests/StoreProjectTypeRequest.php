<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type' => 'required|unique:project_types|max:80',
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'Please add a type',
            'type.unique:project_types' => 'Project type already in use',
            'type.max' => 'Project type cannot exceed 80 characters',
        ];
    }
}