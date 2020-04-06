@extends('layouts.site')

@section('title', 'Авторизация')

@section('content')
    <div class="container">
        <form id="contact" action="" method="post">
            <h3 align="center">Авторизация</h3>
            <fieldset>
                <input id="login" placeholder="Login" type="text" data-validation="true" required autofocus>
            </fieldset>
            <fieldset>
                <input id="password" placeholder="Password" type="password" data-validation="true" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Авторизоваться</button>
            </fieldset>
            <p class="copyright"><a href="/registration" data-validation="onstart">Регистрация</a></p>
        </form>
    </div>
@endsection