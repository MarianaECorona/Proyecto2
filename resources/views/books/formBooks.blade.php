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
    <style type="text/css">
        body{
            background:#2A3F54;
        }
    </style>
    @isset($book) 

        <section class="d-flex justify-content-center">
            <div class=" card col-sm-5 p-3">
                <div class="mb-3">
                    <div class="container text-center mt-2">
                        <h1>Editar Libro</h1>
                    </div>
                    <!--INICIO FORMULARIO-->
                    <form action="/books/{{$book->id}}" method="POST" enctype = "multipart/form-data"> {{-- editar --}}
                     @method('PATCH') 

    @else

        <section class="d-flex justify-content-center">
            <div class="card col-sm-5 p-3">
                <div class="mb-3 ">
                    <div class="container text-center mt-2">
                        <h1>Agregar Libros</h1>
                    </div>
                    <!--INICIO FORMULARIO-->
                    <form action="/books" method="POST" enctype = "multipart/form-data"> {{-- Crear --}}
    @endisset

                        @csrf
                        <div class="mb-2"> 
                            <label clas="form-label" for="title">Titulo</label>
                            <input class="form-control" type="text" name="title" value="{{ isset($book) ? $book->title : '' }} {{old('title')}} "><br>
                            
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2"> 
                            <label clas="form-label" for="author">Autor</label>
                            <input class="form-control" type="text" name="author"  value="{{ isset($book) ? $book ->author : ''  }} {{old('author')}}"><br>

                            @error('author')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2"> 
                            <label clas="form-label" for="editorial">Editorial</label><br>
                            <input class="form-control" type="text" name="editorial"  value="{{ isset($book) ? $book ->editorial : '' }} {{old('editorial')}}"><br>

                            @error('editorial')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label clas="form-label" for="year">Año</label><br>
                            <input class="form-control" type="text" name="year"  value="{{ isset($book) ? $book ->year : ''  }} {{old('year')}}"><br>

                            @error('year')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label clas="form-label" for="language">Idioma</label><br>
                            <select class="form-select" name="language" id="language">
                                <option value="spanish"{{ isset($book) && $book->language == 'spanish' ? 'selected' : '' }}>Español</option>
                                <option value="english"{{ isset($book) && $book->language == 'english' ? 'selected' : '' }}>Ingles</option>
                                <option value="french"{{ isset($book) && $book->language == 'french' ? 'selected' : '' }}>Frances</option>
                            </select><br>

                            @error('language')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input class="btn btn-lg btn-dark" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>