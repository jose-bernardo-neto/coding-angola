<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css"
    />
  

</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">DeliveryNow</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/products/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index')}}">Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index')}}">Pedidos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true"> Disabled</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-dark"> <i class="iconoir-cart"></i></a>
                <a href="#" class="btn btn-dark"><i class="iconoir-bell-notification"></i></a>
                
              </div>
            </div>
          </nav>
          <div class="container">
              @yield('content')
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>