<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StartSessionRequest;

class SessionController extends Controller
{
    /**
     * Начало сессии с пользователем
     * @param StartSessionRequest $request
     */
    public function start(StartSessionRequest $request)
    {
        return Auth()->login(User::findUser(
            $request->input('login'),
            $request->input('password')
        ));
    }

    /**
     * Завершение сессии с пользователем
     */
    public function stop()
    {
        Auth()->logout();
    }
}
