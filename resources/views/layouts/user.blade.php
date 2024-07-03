<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lopes & Souza</title>
  <link rel="icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
  <link rel="stylesheet" href="{{ asset('css/test.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
</head>
<body>

<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Inicio </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/imoveis">Realize seus sonhos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/quemsomos">Quem somos</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <li class="nav-item"> 
            <a class="btn btn-outline-success my-2 my-sm-0" href="/login">Modo administrador</a>
            </li>
          </form>
        </div>
      </nav>
</header>