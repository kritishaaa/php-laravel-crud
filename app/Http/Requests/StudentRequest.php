<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
    public function rules()
    {
        $rules= [
            'fname'=>[
                'required',
                'max:20',
                'string'

            ],
            
            'lname'=>[
                'required',
                'max:20',
                'string'
            ],
            
            'email'=>[
                'required',
                'email'
            ],

            'phone'=>[
                'required',
                'numeric',
                'digits:10'
            ],

            'address'=>[
                'required',
                'string',
                'max:20',
            ],
            
            'dob'=>[
                'required',
                'date'
            ]
            ];
            return $rules;
        }
}
