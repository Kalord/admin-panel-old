<div>Пользователь - {{$user->name}} пытается зарегистрироваться</div>
<div>
    Для того, чтобы подтвердить его регистрацию перейдите по <a href="{{$userAccessUrl->access_url}}">адресу</a>
    <br>
    Для того, чтобы заблокировать пользователя, перейдите по <a href="{{$userAccessUrl->banned_url}}">адресу</a>
</div>