<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
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
            'task' => 'required|min:5 |max:100',
        ];
    }
 

    public function messages()
    {
        return [
            'task.required' => 'Task is Must',
            'task.min' => 'Task Must be minimum 5 Chr.',
            'task.max' => 'Task Must be maximum 150 Chr.',
        ];
    }


}
