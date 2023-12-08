<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fname' => 'required|string|max:20',
            'lname' => 'required|string|max:20',
            'email' => 'required|email|max:30|unique:students,email,'.$this->route('student')->id,
            'phone' => 'required|numeric|digits:10',
            'address' => 'required|string|max:20',
            'dob' => 'required|date',
        ];
    }
}
