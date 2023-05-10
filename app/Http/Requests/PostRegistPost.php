<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRegistPost extends FormRequest
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
            'title' => ['required', 'max:20'],
            'body' => ['required', 'max:200'],
        ];
    }

    public function messages()
    {
      return [
        'title.required' => 'タイトルは入力必須です。',
        'title.max' => 'タイトルは20文字以内で設定してください。',
        'body.required' => '内容は入力必須です。',
        'body.max' => '内容は200文字以内で設定してください。'
      ];
    }

    public function getTitle(): string
    {
      return $this->input('title');
    }

    public function getBody(): string
    {
      return $this->input('body');
    }
}
