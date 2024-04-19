<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inserta un nuevo Usuario</h1>
    <form action="{{ route('product.insert') }}" method="POST">
    @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="edad">Precio</label>
        <input type="number" name="precio" id="precio" required>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
