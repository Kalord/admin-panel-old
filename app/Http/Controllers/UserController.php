<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserAccessUrl;
use App\Mail\RegistrationOrder;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Создание пользователя
     * @param CreateUserRequest $request
     */
    public function create(CreateUserRequest $request)
    {
        $request->merge([
            'password'  => Hash::make($request->input('password')),
            'token'     => Hash::make(time())
        ]);

        $user           = User::create($request->input());
        $userAccessUrl  = UserAccessUrl::createRecord($user->id, $request->root());

        //Mail::to(RegistrationOrder::TO)->
        //      send(new RegistrationOrder($user, $userAccessUrl));

        return $user;
    }

    /**
     * Удаление пользователя
     **/
    public function delete()
    {
        return User::deleteUser(Auth()->id());
    }
}
