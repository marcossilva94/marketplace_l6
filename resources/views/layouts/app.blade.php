<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace L6</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 40px;">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">Marketplace L6</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @auth
              <ul class="navbar-nav mr-auto">
                <li class="nav-item @if (request()->is('admin/orders*')) active @endif">
                  <a class="nav-link" aria-current="page" href="{{route('admin.orders.my')}}">Meus Pedidos</a>
                </li>
                <li class="nav-item @if (request()->is('admin/stores*')) active @endif">
                  <a class="nav-link" aria-current="page" href="{{route('admin.stores.index')}}">Loja</a> <span class="sr-only">(current)</span>
                </li>
                <li class="nav-item @if (request()->is('admin/products*')) active @endif" >
                  <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>
                </li>
                <li class="nav-item @if (request()->is('admin/categories*')) active @endif" >
                  <a class="nav-link" href="{{route('admin.categories.index')}}">Categorias</a>
                </li>
              </ul>
              <div class="my-2 my-lg-0">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          
                        <a href="{{route('admin.notifications.index')}}" class="nav-link">
                        <span class="badge badge-danger">{{auth()->user()->unreadNotifications->count()}}</span>
                        <i class="fa fa-bell"></i>
                      </a>
                      </li>
                      <li class="nav-item mr-auto">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('form.logout').submit(); ">Sair</a>
                        <form action="{{route('logout')}}" class="logout" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </li class="nav-item">
                        <span class="nav-link">{{auth()->user()->name}}</span>
                      <li>

                      </li>
                  </ul>
              </div>
            @endauth
            
          </div>
        </div>
    </nav>

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    
</body>
</html>