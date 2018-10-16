<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container-fluid mt-2">
        @include('include/navbar')
        @include('include/messages')

        @yield('content')


        <footer class="align-content-center container bg-light footer text-center mt-5 mb-3">
            &copy; 2018 <strong>ncux</strong> (Patrick Malaba) | <a href="mailto:malabatalent@gmail.com" target="_blank">malabatalent@gmail.com</a>  |
            Github profile: <a href="https://github.com/ncux" target="_blank">https://github.com/ncux</a>
        </footer>

    </div>

</body>
</html>
