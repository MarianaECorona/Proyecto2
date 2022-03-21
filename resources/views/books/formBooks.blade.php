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

    <form action="/books/store" method="POST">
        <label for="title">Titulo</label><br>
        <input type="text" name="title"><br>

        <label for="autor">Autor</label><br>
        <input type="text" name="autor"><br>

        <label for="editorial">Editorial</label><br>
        <input type="text" name="editorial"><br>

        <label for="year">Año</label><br>
        <input type="text" name="year"><br>

        <label for="language">Lenguaje</label><br>
        <select name="language" id="language">
            <option value="spanish">Español</option>
            <option value="english">Ingles</option>
            <option value="french">Frances</option>
        </select><br>

        <label for="synopsis">Sinopsis</label><br>
        <textarea name="synopsis"rows="10" cols="30"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>