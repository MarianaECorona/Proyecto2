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

    @isset($book)
        <form action="/books/{{$book->id}}" method="POST" enctype = "multipart/form-data"> {{-- editar --}}
        @method('PATCH') 
    @else
        <form action="/books" method="POST" enctype = "multipart/form-data"> {{-- Crear --}}
    @endisset

        @csrf

        <label for="title">Titulo</label><br>
        <input type="text" name="title" value="{{ isset($book) ? $book->title : '' }} {{old('title')}} "><br>

        <br> 
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="author">Autor</label><br>
        <input type="text" name="author"  value="{{ isset($book) ? $book ->author : ''  }} {{old('author')}}"><br>

        <br> 
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="editorial">Editorial</label><br>
        <input type="text" name="editorial"  value="{{ isset($book) ? $book ->editorial : '' }} {{old('editorial')}}"><br>

        <br> 
        @error('editorial')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="year">Año</label><br>
        <input type="text" name="year"  value="{{ isset($book) ? $book ->year : ''  }} {{old('year')}}"><br>

        <br> 
        @error('year')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="language">Idioma</label><br>
        <select name="language" id="language">
            <option value="spanish"{{ isset($book) && $book->language == 'spanish' ? 'selected' : '' }}>Español</option>
            <option value="english"{{ isset($book) && $book->language == 'english' ? 'selected' : '' }}>Ingles</option>
            <option value="french"{{ isset($book) && $book->language == 'french' ? 'selected' : '' }}>Frances</option>
        </select><br>

        <br> 
        @error('language')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>