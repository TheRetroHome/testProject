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
            'title'=>'required|max:100|min:5',
            'content'=>'required|min:10'
        ];
    }
    public function messages()
    {
        return [
          'title.required'=>'Поле title не было заполнено',
          'title.max'=>'Превышен лимит символов в title',
            'title.min'=>'Поле title должно быть заполнено минимально в 5 символов',
          'content.required'=>'Поле content обязательно',
            'content.min'=>'Поле content должно быть заполнено минимально в 5 символов'
        ];
    }
}
