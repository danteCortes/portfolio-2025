<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContactRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'message' => 'required|min:10|max:2000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'En nombre es obligatorio',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre no puede exceder 50 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Por favor ingresa una dirección de correo electrónico válida',
            'message.required' => 'El mensaje es obligatorio',
            'message.min' => 'El mensaje debe tener al menos 10 caracteres',
            'message.max' => 'El mensaje no puede exceder 2000 caracteres',
        ];
    }
}
