<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>

<body>
    <h1>Bienvenido al curso de <?php echo $curso->name ?></h1>

    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>

    <p><strong>Categoria:</strong>{{$curso->category}}</p>

    <p>{{$curso->description}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="subimit">Eliminar</button>
    </form>
</body>

</html>
