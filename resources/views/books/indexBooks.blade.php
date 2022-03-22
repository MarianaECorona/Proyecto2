<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h1>Libros</h1>
    <a href="books/create">Añadir Libro</a>
    <table> 
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Año</th>
            <th>Lenguaje</th>
            <th>Acciones</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->editorial}}</td>
                <td>{{$book->year}}</td>
                <td>{{$book->language}}</td>
                <td>
                    <a href="books/{{$book->id}}">Ver detalle</a> |
                    <a href="books/{{$book->id}}/edit">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
    
</body>
</html>