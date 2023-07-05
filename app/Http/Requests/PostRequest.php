<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:100',
            'content'=>'required'
        ];
    }
    public function messages()
    {
        return [
          'title.required'=>'Поле title не было заполнено',
          'title.max'=>'Превышен лимит символов в title',
          'content.required'=>'Поле content обязательно'
        ];
    }
}
