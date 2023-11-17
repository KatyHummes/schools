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
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'birth' => ['required', 'date', 'max:255'],
            'sex' => ['required', 'max:255'],
            'cpf' => ['required', 'min:11', 'max:14'],
            'country' => ['required', 'max:255'],
            'state' => ['required', 'max:255'],
            'city' => ['required', 'max:255'],
            'biography' => ['max:4000'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O Nome é obrigatório!',
            'birth.required' => 'A Data de Nascimento é obrigatória!',
            'sex.required' => 'O Sexo é obrigatório!',
            'cpf.required' => 'O CPF é obrigatório!',
            'country.required' => 'O País é obrigatório!',
            'state.required' => 'O Estado é obrigatório!',
            'city.required' => 'A Cidade é obrigatória!',
            'birth.date' => 'Deve ser uma data!',
            'cpf.min' => 'O CPF deve ter 11 caracteres!',
            'cpf.max' => 'O CPF deve ter 11 caracteres!',
            'name.max' => 'O Nome é no máximo 255 caracteres!',
            'birth.max' => 'A Data de Nascimento é no máximo 255 caracteres!',
            'sex.max' => 'O Sexo é no máximo 255 caracteres!',
            'country.max' => 'O país deve ter no máximo 255 caracteres!',
            'state.max' => 'O Estado deve ter no máximo 255 caracteres!',
            'city.max' => 'A Cidade deve ter no máximo 255 caracteres!',
            'biography.max' => 'A Biografia deve ter no máximo 4000e caracteres!'
        ];
    }
}
