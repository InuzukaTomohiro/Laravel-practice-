<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistPost extends FormRequest
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
          'password' => ['required', 'string', 'confirmed', 'min:8'],          
        ];
    }

    public function messages()
    {
      return [
        'name.required' => '名前は必ず入力してください。',
        'name.max' => '名前は255文字以内で設定してしてください。',
        'email.required' => 'メールアドレスは必ず入力してください。',
        'email.email' => 'メールアドレスの形式が正しくありません。',
        'email.max' => 'メールアドレスは255文字以内で設定してください。',
        'password.required' => 'パスワードを設定してください',
        'password.min' => 'パスワードは8文字以上で設定してください。',
        'password.confirmed' => '確認用パスワードが一致しません。',
      ];
    }


}
