<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
</head>
<body>
    <x-layout>
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
                <h1>Informacion del Libro</h1>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a class="btn btn-dark mt-3" href="/books">Regresar</a>     
                    </span>
                  </div>
                </div>
              </div>
            </div> 
          </div>
    
          <div class="table-responsive-sm">
            <table class="table table-hover"> 
              <thead class="table-dark">
                <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Autor</th>
                  <th>Editorial</th>
                  <th>Año</th>
                  <th>Lenguaje</th>
                </tr>
              </thead>

                <tr>
                  <td>{{$book->id}}</td>
                  <td>{{$book->title}}</td>
                  <td>{{$book->author}}</td>
                  <td>{{$book->editorial}}</td>
                  <td>{{$book->year}}</td>
                  <td>{{$book->language}}</td>
                </tr>
            </table>
          </div>
        </div>
      </x-layout>
</body>
</html>