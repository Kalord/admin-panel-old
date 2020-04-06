@extends('layouts.site')

@section('title', 'Авторизация')

@section('content')
    <div class="container">
        <form id="contact" action="" method="post">
            <h3 align="center">Регистрация</h3>
            <fieldset>
                <input id="name" name="name" placeholder="Name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input id="login" name="login" placeholder="Login" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input id="email" name="email" placeholder="Email" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input id="password", name="password" placeholder="Password" type="password" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input id="password_confirmation" name="password_confirmation" placeholder="Password confirmation" type="password" tabindex="2" required>
            </fieldset>
            <fieldset>
                <button class="registration-submit" name="registration-submit" type="submit" id="contact-submit" data-submit="...Sending">Регистрацияя</button>
            </fieldset>
            {{ csrf_field() }}
            <p class="copyright"><a href="/login">Авторизация</a></p>
        </form>
    </div>
@endsection
