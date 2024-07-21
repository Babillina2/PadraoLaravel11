<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoRequest extends FormRequest
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
            'modelo' => 'required|unique:veiculos|max:20',
            'ano' => 'required',
        ];;
    }

    public function messages(): array
    {
        return [
            'modelo.required' => 'O campo modelo é obrigatório.',
            'modelo.max' => 'O campo modelo não pode ser maior que 20 caracteres.'
        ];
    }
}
