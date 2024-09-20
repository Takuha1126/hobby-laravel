<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須です。',
            'name.string' => '名前は文字列で入力してください。',
            'email.required' => 'メールアドレスは必須です。',
            'emil.string' => 'メールアドレスは文字列で入力してください。',
            'email.email' => 'メールアドレスはメール形式で入力してください。',
            'password.required' => 'パスワードは必須です。',
            'password.storing' => 'パスワードは文字列で入力してください。'

        ];
    }
}
