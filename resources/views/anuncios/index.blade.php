<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Anuncios</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  
</head>

<body>
  <div class="container">
      <section>
          <div class="page-header">
            <h1>ANUNCIOS</h1>
          </div>
      </section>
      <section class="col-sm-4" style="margin-top:20px">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <div>
                            <div id="carousel-example-vertical" class="carousel vertical slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="" alt="miniatura" height="70px" width="100px">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4>Titulo Anuncio</h4>
                                                <p>descripcion anuncio</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="" alt="miniatura" height="70px" width="100px">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4>Titulo Anuncio</h4>
                                                <p>descripcion anuncio</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="" alt="miniatura" height="70px" width="100px">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4>Titulo Anuncio</h4>
                                                <p>descripcion anuncio</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="" alt="miniatura" height="70px" width="100px">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4>Titulo Anuncio</h4>
                                                <p>descripcion anuncio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
      </section>
      <section>
        <table class="table">
            <thead>
                <tr>
                    <th>titulo</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anuncios as $anuncio)
                    <tr>
                        <td>{{ $anuncio->titulo }}</td>
                        <td>{{ $anuncio->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
      </section>
 </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>  
</body>
</html>
