<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    <h1>En esta página podrás crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>

        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        <button type="submit">Enviar</button>

    </form>
</body>

</html>
