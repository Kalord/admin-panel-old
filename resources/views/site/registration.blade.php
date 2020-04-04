@extends('layouts.site')

@section('title', 'Авторизация')

@section('content')
    <div class="container">
        <form id="contact" action="" method="post">
            <h3 align="center">Авторизация</h3>
            <fieldset>
                <input placeholder="Name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Login" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Password" type="password" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Password repeat" type="password" tabindex="2" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Регистрацияя</button>
            </fieldset>
            <p class="copyright"><a href="/login">Авторизация</a></p>
        </form>
    </div>
@endsection
