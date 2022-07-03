<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StreamCreateRequest extends FormRequest
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
            'name' => ['required'],
            'description' => ['required'],
            'image' => ['required']
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Не заполнено поле Name',
            'description.required' => 'Не заполнено описание',
            'image.required' => 'Не выбран файл',
        ];
    }

}
