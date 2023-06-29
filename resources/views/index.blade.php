<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#000000" />
        <!-- Bootstrap -->
        {{-- @vite(['resources/js/app.js'])  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
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
    </header>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
            <br>
                <div class="header">
                    <div class="container">
                        <div class="row">
                <div class="col-md-5">
                    <div class="row">
                    <div class="col-lg-12">
                    <div class="input-group form">
                        <form action="{{ route('products') }}" method="GET">
                            <span class="input-group-btn">
                                <input type="text"  name="name" placeholder="search for name">
                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </span>
                        </form>
                    </div>
                    </div>
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
                <div class="panel-heading">
                <div class="panel-title"><h2>Productos</h2></div>     
                </div>
                <div class="panel-body">

                    @if (count($productsArray) > 0)
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                            </tr>
                        </thead>
                    <tbody>                
                    @foreach($productsArray as $prod)
                    <tr>
                    <td class="v-align-middle">{{$prod['title']}}</td>
                    <td class="v-align-middle">{{$prod['price']}}</td>
                    <td class="v-align-middle">{{$prod['description']}}</td>
                    <td class="v-align-middle">{{$prod['category']}}</td>
                    <td class="v-align-middle">
                        
                        
                        <a href="{{ route('product/detail',$prod['id']) }}" class="btn btn-dark">Detalles</a>                                         
                    </td>                                                
                    </tr>                                          
                    @endforeach
                    </tbody>                
                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $productsArray->links()}} <!-- Mostrar los enlaces de paginación -->
                        @else
                            <p>No se encontraron resultados.</p>
                        @endif
                    </div> 
                       


                                                
                </div>
              </div>
          </div>
        </div>
      </div>
      </div>
        </div>              
            </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

