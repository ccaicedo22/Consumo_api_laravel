<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#000000" />
        <!-- Bootstrap -->
        {{-- @vite(['resources/js/app.js'])  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .center {
                text-align: center;
            }
            .frame {
                border: 1px solid black;
                padding: 10px;
            }
            .description-box {
                border: 1px solid black;
                padding: 20px;
                margin-top: 20px;
                max-width: 100%;
            }
          </style>
    </head>
    <body> 

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" ><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="http://127.0.0.1:8000">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('products') }}">Productos </a>
                        </li>
                    <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/carlos-balaguera-caicedo-dev/">Contacto</a>
                    </li> 
                </ul>
            </div>
        </div>
        </nav>
        <br>
        <br>
    </header>
<hr>
    <h1 class="center">Prueba Técnica sobre Consumo de APIs</h1>
    <hr>
    <div class="center">
      <img src="{{ asset('images/construccion.gif') }}" alt="Proyecto en Construcción" class="frame">
    </div>
    <hr>
    <div class="description-box">
        <p class="center"><br>
          Debes desarrollar una aplicación web para administrar un catálogo de productos. La aplicación
          debe permitir a los usuarios ver la lista de productos, buscar productos por nombre y ver los
          detalles de un producto específico. Los datos de los productos se obtendrán a través de una API
          libre y se mostrarán utilizando el framework Bootstrap.
        </p>
      </div>
    <div class="container mt-5 mb-5">
        <div class="col-md-6">
            <div class="tecnologias">
              <strong>Lenguaje(s) / Tecnología(s): </strong><br>
              <div class="d-inline-block">
                <figure id="attachment_32306" aria-describedby="caption-attachment-32306" style="width: 80px" class="wp-caption alignnone">
                  <img decoding="async" loading="lazy" src="https://blog.nubecolectiva.com/wp-content/uploads/2023/02/laravel.png" alt="" width="80" height="80" class="wp-image-32306" title="Laravel Framework" />
                  <figcaption id="caption-attachment-32306" class="wp-caption-text">Laravel Framework</figcaption>
                </figure>
              </div>
              <div class="d-inline-block">
                <figure id="attachment_32356" aria-describedby="caption-attachment-32356" style="width: 80px" class="wp-caption alignnone">
                  <img decoding="async" loading="lazy" src="https://blog.nubecolectiva.com/wp-content/uploads/2023/02/mysql.png" alt="" width="80" height="80" class="wp-image-32356" title="MySQL" />
                  <figcaption id="caption-attachment-32356" class="wp-caption-text">MySQL</figcaption>
                </figure>
              </div>
              <div class="d-inline-block">
                <figure id="attachment_32350" aria-describedby="caption-attachment-32350" style="width: 80px" class="wp-caption alignnone">
                  <img decoding="async" loading="lazy" src="https://blog.nubecolectiva.com/wp-content/uploads/2023/02/php.png" alt="" width="80" height="80" class="wp-image-32350" title="PHP" />
                  <figcaption id="caption-attachment-32350" class="wp-caption-text">PHP</figcaption>
                </figure>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="herramientas">
              <strong>Herramienta(s) Empleada(s): </strong><br>
              <div class="d-inline-block">
                <figure id="attachment_32074" aria-describedby="caption-attachment-32074" style="width: 80px" class="wp-caption alignnone">
                  <img decoding="async" loading="lazy" src="https://blog.nubecolectiva.com/wp-content/uploads/2022/10/vscode.png" alt="" width="80" height="80" class="wp-image-32074" title="Visual Studio Code" />
                  <figcaption id="caption-attachment-32074" class="wp-caption-text">Visual Studio Code</figcaption>
                </figure>
              </div>
              <div class="d-inline-block">
                <figure id="attachment_32073" aria-describedby="caption-attachment-32073" style="width: 80px" class="wp-caption alignnone">
                  <img decoding="async" loading="lazy" src="https://blog.nubecolectiva.com/wp-content/uploads/2022/10/xampp.png" alt="" width="80" height="80" class="wp-image-32073" title="XAMPP" />
                  <figcaption id="caption-attachment-32073" class="wp-caption-text">XAMPP</figcaption>
                </figure>
              </div>
            </div>
          </div>	
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

