<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'surname' => 'required|string|min:2|max:255',
            'patronymic' => 'nullable|string|min:2|max:255',
            'email' => 'required|string|min:5|max:255|email|unique:users,email',
            'password' => 'required|string|min:8|max:255|same:password_r'
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'required' => 'Обязательное поле',
            'email.email' => 'Неверный формат email',
            'email.unique' => 'Данный email уже зарегистрирован',
            'same' => 'Подтвердите пароль',
            'password.min' => 'Минимальное количество символов - 8',
            'password.email' => 'Минимальное количество символов - 5',
        ];
    }
}
