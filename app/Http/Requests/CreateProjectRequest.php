<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    public function message()
    {
        return [
            'name.required'         => 'Поле должно быть заполнено',
            'name.min'              => 'Поле должно быть больше 3 символов',
            'name.max'              => 'Поле должно быть меньше 30 символов',

            'path.required'         => 'Поле должно быть заполнено',
            'path.active_url'       => 'Некорректный URL',

            'avatar.required'       => 'Неудалось загрузить изображение',
            'avatar.mimes'          => 'Файл должен иметь одно из расшерений: jpg, bmp, png'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'     => 'required|min:3|max:30',
            'path'      => 'required|active_url',
            'avatar'    => 'required|mimes:jpeg,bmp,png'
        ];
    }
}
