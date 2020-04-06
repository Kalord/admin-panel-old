<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class StartSessionRequest extends FormRequest
{
    public function messages()
    {
        return [
            'user.required'   => 'Неверный логин или пароль',
            'verify_email.*'  => 'Почта не подтверждена',
            'status.*'        => 'Заблокирован'
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

    protected function prepareForValidation()
    {
        $login    = $this->get('login');
        $password = $this->get('password');

        if($user = User::findUser($login, $password))
        {
            $this->merge([
                'user'          => $user,
                'verify_email'  => $user->verify_email,
                'status'        => $user->status
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $isVerifyEmail = User::VERIFY_EMAIL;
        $activeStatus  = User::STATUS_ACTIVE;

        return [
            'user'         => 'required',
            'verify_email' => "required|same:$isVerifyEmail",
            'status'       => "required|same:$activeStatus"
        ];
    }
}
