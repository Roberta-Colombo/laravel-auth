<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|unique:projects|max:150',
            'description' => 'nullable',
            'image_1' => 'required',
            'github_link' => 'required',
            'project_type_id' => 'nullable|exists:project_types,id',
            'technologies' => 'nullable|exists:technologies,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please add a name to the project',
            'name.unique:projects' => 'Project name already in use',
            'name.max' => 'Project name cannot exceed 150 characters',
            'image_1.required' => 'Please add at least an image',
            'github_link.required' => 'A Github link is mandatory'
        ];
    }
}