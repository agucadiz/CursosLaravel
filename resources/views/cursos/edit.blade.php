<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <h1>En esta página podrás editar un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label>

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{$curso->category}}">
        </label>

        <br><br>
        <button type="submit">Actualizar</button>

    </form>
</body>

</html>
