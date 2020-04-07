<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/site.css">
    <link rel="stylesheet" href="/css/validator.css">
</head>
<body>
    @yield('content')

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="/js/common.js"></script>
    <script src="/js/validator.js"></script>

    <script src="/js/ajax/registrationUser.js"></script>
    <script src="/js/ajax/authUser.js"></script>

    <script src="/js/validationRules/registration.js"></script>
    <script src="/js/registrationForm.js"></script>


    <script src="/js/validationRules/login.js"></script>
    <script src="/js/loginForm.js"></script>
</body>
</html>
