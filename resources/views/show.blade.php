<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#000000" />
        <!-- Bootstrap -->
        @vite(['resources/js/app.js'])   

    </head>

    <body> 
<!--Modal Detalles-->
{{-- <div class="modal" id="productModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalles del Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <h4>{{ $producto->nombre }}</h4>
                <p>{{ $producto->descripcion }}</p> --}}
                <!-- Mostrar otros detalles del producto -->
            </div>
        </div>
    </div>
</div> --}}
  
  
  <!--fin modal-->
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
        </header>

      <div class="container mt-5 mb-5">

          <div class="row">

            <div class="col-md-12">

            </br>

              <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                    <h1 style="font-size: 28px;" class=" text-center">Detalles Del producto </h1>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group form">
                      </div>
                    </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        
                      </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">
        
            <div class="col-md-10">        
        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">
                
                <div class="panel-body">

                  @if(Session::has('message'))
                    <div class="alert alert-primary" role="alert">
                      {{ Session::get('message') }}
                    </div>
                  @endif 
                  
                    <p class="h5">Nombre:</p>
                    <p class="h6 mb-3">{{$products['title'] }}</p>

                    <p class="h5">Precio:</p>
                    <p class="h6 mb-3">{{ $products['price'] }}</p>

                    <p class="h5">Descripcion:</p>
                    <p class="h6 mb-3">{{ $products['description'] }}</p>
                    
                    <p class="h5">Categoria:</p>
                    <p class="h6 mb-3">{{ $products['category'] }}</p>
                </div>

                <a href="{{ route('products') }}" class="btn btn-warning mt-3">Volver</a>

              </div>

          </div>

        </div>

      </div>

      </div>

        </div>
              
            </div>

          </div>          

  </body>
</html>