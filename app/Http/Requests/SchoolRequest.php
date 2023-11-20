<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'rede' => ['required', 'max:255'],
            'nivel' => ['required', 'max:255'],
            'country' => ['required', 'max:255'],
            'state' => ['required', 'max:255'],
            'city' => ['required', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O Nome é obrigatório!',
            'rede.required' => 'A Rede é obrigatória!',
            'nivel.required' => 'O Nível é obrigatório!',
            'country.required' => 'O País é obrigatório!',
            'state.required' => 'O Estado é obrigatório!',
            'city.required' => 'A Cidade é obrigatória!',

            'name.max' => 'O Nome é no máximo 255 caracteres!',
            'rede.max' => 'A Rede deve ter no máximo 255 caracteres!',
            'nivel.max' => 'O Nível deve ter no máximo 255 caracteres',
            'country.max' => 'O país deve ter no máximo 255 caracteres!',
            'state.max' => 'O Estado deve ter no máximo 255 caracteres!',
            'city.max' => 'A Cidade deve ter no máximo 255 caracteres!',
        ];
    }
}
