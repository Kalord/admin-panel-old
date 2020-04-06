<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function message()
    {
        return [
            'name.required'       => 'Поле должно быть заполнено',
            'name.min'            => 'Поле должно быть больше 3 символов',
            'name.max'            => 'Поле должно быть меньше 30 символов',

            'login.required'      => 'Поле должно быть заполнено',
            'login.min'           => 'Логин должен быть больше 8 символов',
            'login.max'           => 'Логин должен быть меньше 30 символов',
            'login.unique'        => 'Логин занят',

            'email.required'      => 'Поле должно быть заполнено',
            'email.email'         => 'Некорректная почта',
            'email.unique'        => 'Почта занята',

            'password.required'   => 'Поле должно быть заполнено',
            'password.min'        => 'Пароль должен быть больше 8 символов',
            'password.confirmed'  => 'Пароли несовпадают'

        ];
    }

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
            'name'     => 'required|min:3|max:30',
            'login'    => 'required|min:8|max:30|unique:_admin_user,login',
            'email'    => 'required|email|unique:_admin_user,email',
            'password' => 'required|min:8|confirmed'
        ];
    }
}
