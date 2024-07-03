<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lopes & Souza</title>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
  <link rel="stylesheet" href="{{ asset('css/test.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
</head>
<body>
<style>

@media (max-width: 576px) { 
  
.carousel{
max-height: 280px;
}


.carousel-inner{
height: 200px;
font-size: 10px;
}

.carousel-item{
height: 230px;
}

.carousel-item h1{
  font-size: 20px;
}

.carousel-item .btn{
  font-size: 10px;
}

.carousel img {
max-height: 200px;

}
}

@media (min-width: 768px) { 


  
}


@media (min-width: 992px) {


}

@media (min-width: 1200px) {

  
}
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
            <li class="nav-item">
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
<body>
<main role="main">

<div class="row featurette">
<div class="col-md-7">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          @if($imovel->image1!= NULL)
          <li data-target="#myCarousel" data-slide-to="1"></li>
          @endif

          @if($imovel->image2!= NULL)
          <li data-target="#myCarousel" data-slide-to="2"></li>
          @endif

          @if($imovel->image3!= NULL)
          <li data-target="#myCarousel" data-slide-to="3"></li>
          @endif

          @if($imovel->image4!= NULL)
          <li data-target="#myCarousel" data-slide-to="4"></li>
          @endif

          @if($imovel->image5!= NULL)
          <li data-target="#myCarousel" data-slide-to="5"></li>
          @endif

          @if($imovel->image6!= NULL)
          <li data-target="#myCarousel" data-slide-to="6"></li>
          @endif
          
          @if($imovel->image7!= NULL)
          <li data-target="#myCarousel" data-slide-to="7"></li>
          @endif

          @if($imovel->image8!= NULL)
          <li data-target="#myCarousel" data-slide-to="8"></li>
          @endif

          @if($imovel->image9!= NULL)
          <li data-target="#myCarousel" data-slide-to="9"></li>
          @endif

          @if($imovel->image10!= NULL)
          <li data-target="#myCarousel" data-slide-to="10"></li>
          @endif

          @if($imovel->image11!= NULL)
          <li data-target="#myCarousel" data-slide-to="11"></li>
          @endif

          @if($imovel->image12!= NULL)
          <li data-target="#myCarousel" data-slide-to="12"></li>
          @endif
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image}}" alt="First slide">
            <div class="container">
            </div>
          </div>

          @if($imovel->image1!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image1}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image2!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image2}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>

          @endif

          @if($imovel->image3!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image3}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image4!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image4}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image5!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image5}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image6!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image6}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image7!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image7}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image8!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image8}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image9!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image9}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image10!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image10}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image11!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image11}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

          @if($imovel->image12!= NULL)
          <div class="carousel-item">
            <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image12}}" alt="Second slide"></img>
            <div class="container">
            </div>
          </div>
          @endif

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
  </div> <!-- Fim carrossel-->
  <div class="col-md-5">
  <h3 class="featurette-heading">{{$imovel->tipo}} disponivel para {{$imovel->venda}} em: <span class="text-muted">{{$imovel->rua}} - {{$imovel->bairro}} - {{$imovel->cidade}}</span></h3>
  
  <br><p class="card-title">Tipo de imóvel: <span class="text-muted">{{$imovel->tipo}}</span></p>
 
  <p class="card-title">Número de ambientes: <span class="text-muted">{{$imovel->ambiente}}</span></p>
  <p class="card-title">Preço: <span class="text-muted">R${{$imovel->preço}}</span></p>
    <p class="card-title">Descrição: <span class="text-muted">{{$imovel->descricao}}</span></p><br>
        


    <!-- Inicio da chamada do modal -->
    
<p>@if($imovel->video!= NULL)<button class="btn btn-primary" data-toggle="modal" data-target="#video">Assista ao Video </button>@endif <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=5511998451616&fbclid=IwAR20GIQkzSZkoG3QDaVtDR6g653jD3RHPulp7vzcsfZ4_CstEoYeT4EUao8" role="button">Fechar negócio</a></p>

<div class="modal fade" id="video" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Video</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
<!-- Fim da chamada do modal -->
</div>
<!-- Inicio do Corpo do modal -->
<div class="modal-body">

<video width="560" height="320" controls="controls" autoplay muted>
<source src="/Images/Video/{{$imovel->video}}" type="video/mp4" />
<!--Suportado em IE9, Chrome 6 e Safari 5 -->
O seu navegador não suporta a tag vídeo
</video>
<!-- Fim do Corpo do modal -->

<div class="modal-footer">

</div>
</div>
</div>
</div>
</div>
</div>

</div>

    </main>
    <script src="{{asset('jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  </body>
</html>