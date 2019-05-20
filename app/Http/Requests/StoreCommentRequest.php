<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'content' => [    // Правила валидации для поля content
                'min:1',                  // Длина не менее 1 Б
                'regex:/^[\d а-яё]+$/iu', // Регулярное выражение: а-я, цифры, пробел
                'required', 
			]// Обязательное поле
        ];
    }
}
