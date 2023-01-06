<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .active {
            color: red;
            font-weight: bold;
        }
    </style>
    <title>Home</title>
</head>

<body>
    @include('layouts.partials.header')

    @include('layouts.partials.dashboard')

    <h1>Bienvenido al proyecto LaravelCursos.</h1>
</body>

</html>
