<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'name' => ['required', Rule::unique('projects')->ignore($this->project)],
            'description' => ['nullable'],
            'image_1' => ['nullable'],
            'github_link' => ['required'],
            'project_type_id' => 'nullable|exists:project_types,id',
            'technology' => 'nullable|exists:technologies,id'
        ];
    }
}