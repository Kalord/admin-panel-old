<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Создание пользователя
     * @param CreateUserRequest $request
     */
    public function create(CreateUserRequest $request)
    {
        $request->merge([
            'token' => Hash::make(time())
        ]);
        
        return User::create($request->input());
    }

    /**
     * Удаление пользователя
     **/
    public function delete()
    {
        return User::deleteUser(Auth()->id());
    }
}
