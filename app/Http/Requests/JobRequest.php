<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required','string','max:255'],
            'salary' => ['required','numeric'],
            
        ];
    }
    public function messages(): array{
        return [
            'title.required' => 'The job title field is required',
            'title.string' => 'The job title must be a string',
            'title.max' => 'The job title may not be greater than 255 characters',
            'salary.required' => 'The salary field is required',
            'salary.numeric' => 'The salary must be a number',
        ];
    }
}