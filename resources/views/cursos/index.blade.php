<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
    <title>Index</title>
</head>

<body>
    @include('layouts.partials.header')

    <h1>Bienvenido a la página principal de cursos.</h1>

    <a href="{{route('cursos.create')}}">Crear curso</a>

    <ul>
        @foreach ($cursos as $curso )
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
</body>

</html>
