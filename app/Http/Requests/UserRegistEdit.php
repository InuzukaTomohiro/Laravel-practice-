<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistEdit extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ];
    }

    public function messages()
    {
      return [
        'name.required' => '名前は必須です。',
        'name.max' => '名前は255文字以内で設定してください。',
        'email.required' => 'メールアドレスは必須です。',
        'email.email' => 'メールアドレスの形式が正しくありません。',
        'email.max' => 'メールアドレスは255文字以内で設定してください。',
        'email.unique' => '記入したメールアドレスは使用できません。',
      ];
    }
}
