<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userEditHandlerRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'required|min:8',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'le nom du service est requis.',
            'password.required' => 'le mot de pass est requis.',
            'password.min' => 'la longueur minimale est de 8 caracteres.',
        ];   
    } 
}
