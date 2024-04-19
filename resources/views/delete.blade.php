<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.delete') }}" method="POST">
    @csrf
        <label for="id">Ingresa el Id del elemento que desea eliminar</label>
        <input type="number" name="id" id="id" required>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
