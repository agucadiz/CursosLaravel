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
    <title>Edit</title>
</head>

<body>
    @include('layouts.partials.header')

    <h1>En esta página podrás editar un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
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
            <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
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
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label>

        @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        <button type="submit">Actualizar</button>

    </form>
</body>

</html>
