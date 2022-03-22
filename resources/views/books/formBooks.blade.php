<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Agregar Libros</h1>

    <form action="/books" method="POST" enctype = "multipart/form-data">

        @csrf
        
        <labe for="title">Titulo</label><br>
        <input type="text" name="title"><br>

        <label for="author">Autor</label><br>
        <input type="text" name="author"><br>

        <label for="editorial">Editorial</label><br>
        <input type="text" name="editorial"><br>

        <label for="year">Año</label><br>
        <input type="text" name="year"><br>

        <label for="language">Idioma</label><br>
        <select name="language" id="language">
            <option value="spanish">Español</option>
            <option value="english">Ingles</option>
            <option value="french">Frances</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>