<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre</title>
</head>

<body>
    <h1>Bienvenido al curso de <?php echo $curso->name ?></h1>

    <a href="{{route('cursos.index')}}">Volver a cursos</a>

    <p><strong>Categoria:</strong>{{$curso->category}}</p>

    <p>{{$curso->description}}</p>
</body>

</html>
