<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    
    @isset($book) 

        <div class="container text-center mt-5">
            <h1>Editar Libro</h1>
        </div>
        <section class="d-flex justify-content-center">
            <div class="col-md-2 mt-5">
                <div class="mb-3 mt-3">
                    <!--INICIO FORMULARIO-->
                    <form action="/books/{{$book->id}}" method="POST" enctype = "multipart/form-data"> {{-- editar --}}
                     @method('PATCH') 

    @else

        <div class="container text-center mt-5">
            <h1>Agregar Libros</h1>
        </div>
        <section class="d-flex justify-content-center">
            <div class="col-md-2 mt-5">
                <div class="mb-3 mt-3">
                    <!--INICIO FORMULARIO-->
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

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input class="btn btn-dark" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>