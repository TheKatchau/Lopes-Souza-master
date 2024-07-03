<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lopes & Souza</title>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/test.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
  <style>
    .sign{
      font-size: 5px;
    }
    @media (max-width: 576px) {

      .carousel {
        max-height: 280px;
      }


      .carousel-inner {
        height: 200px;
        font-size: 10px;
      }

      .carousel-item {
        height: 230px;
      }

      .carousel-item h1 {
        font-size: 20px;
      }

      .carousel-item .btn {
        font-size: 10px;
      }

      .carousel img {
        max-height: 200px;

      }
    }

    @media (min-width: 768px) {}


    @media (min-width: 992px) {}

    @media (min-width: 1200px) {}
  </style>
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
      </div>
    </nav>
  </header>
  <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="Images/41311.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1 class="text-black"> Imoveis </h1>
              <p class="text-black">Nossos melhores imóveis reunidos em um só lugar, especialmente para você</p>
              <p><a class="btn btn-lg btn-primary" href="/imoveis" role="button">Saiba mais</a></p>

            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="second-slide" src="Images/41311.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1 class="text-black">Siga-nos no instagram</h1>
              <p class="text-black">Saiba em primeira mão quais os melhores imóveis que temos a oferecer, diretamente em uma das redes sociais mais utilizadas da atualidade</p>
              <p><a class="btn btn-lg btn-secondary" href="https://www.instagram.com/lopesesouza.consultoria/" role="button">Nosso instagram</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="https://image.freepik.com/fotos-gratis/e-mail-e-icone-do-usuario-sinal-simbolo-de-marketing-ou-conceito-de-boletim-informativo-diagrama-enviando-e-mail-correio-em-massa-conceito-de-marketing-de-e-mail-e-sms-esquema-de-vendas-diretas-em-negocios-lista-de-clientes-para-envio_150455-7546.jpg" alt="Third slide">
          <div class="carousel-caption text-right">
            <h1>Fale conosco</h1>
            <p>Realizar seus sonhos nunca foi tão fácil e acessivel, trazemos seu novo imóvel até a ponta de seus dedos!</p>
            <p><a class="btn btn-lg btn-success" href="https://api.whatsapp.com/send?phone=5511998451616&fbclid=IwAR20GIQkzSZkoG3QDaVtDR6g653jD3RHPulp7vzcsfZ4_CstEoYeT4EUao8" role="button">Entre em contato</a></p>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <hr class="featurette-divider">
    </div>
  </main>

      <!-- Destaques
      ================================================== -->
      <div class="container">
        <h3 class="text-heading">Destaques!</h3>
        <hr class="featurette-divider2">

        <!-- Three columns of text below the carousel -->
        <div id="cards-container" class="row">
          @foreach($destaque as $destaques)
          <div class="card col-lg-3 d-flex">
            <img class="h-100 w-100 d-flex justify-content-center" src="Images/imoveis/{{$destaques->image}}" alt="Imagemdoimóvel">
            <div class="card-body">
              <h5 class="card-title"> {{$destaques->rua}} - {{$destaques->bairro}} - {{$destaques->cidade}}</h5>
              <p class="card-price">R$ {{$destaques->preço}}</p>
            </div>
            <p><a class="btn btn-warning" href="/detalhes/{{$destaques->id}}" role="button">Ver detalhes &raquo;</a></p>
              <div class="col-12">
              </div>
          </div><!-- /.col-lg-4 -->
          @endforeach


        </div><!-- /.row -->


        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->

</body>
<!-- Footer -->
<hr>
  <div class="container">
    <footer>
      <div class="row">
        <div class="col-12 col-md-6 order-2 order-md-1">
          
          <p class="powered-by">&copy; 2021 Lopes & Souza.    <a class="sign">   Powered By Katchaurt</a> </p>
          
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2">

        </div>

      </div>
    </footer>

  </div>

<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="{{asset('jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html>