<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/vitrine.css')}}" />
<link rel="stylesheet" href="{{ asset('css/test.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script>
  WebFont.load({
    google: {
      families: ["Open Sans:300,400,500,600,700,800", "Open Sans:300,400,500,600,700,800", "Open Sans:300,400,500,600,700,800"]
    }
  });
</script>

<style>
  body {
    font-family: 'Open Sans' !important;
  }

  .page-header,
  h2 {
    font-family: 'Open Sans' !important;
  }

  .navbar-brand,
  .text-logo {
    font-family: 'Open Sans' !important;
  }

  .nav-item a {
    font-size: 15px;
  }

  p,
  .caption h4,
  label,
  table,
  .panel,
  #contactpage>h2.success,
  #contactpage h2.error {
    font-size: 14px !important;
  }

  h2 {
    font-size: 30px !important;
  }

  .navbar-brand,
  .text-logo {
    font-size: 14px !important;
  }

  .navbar-left a {
    font-size: 12px !important;
  }
</style>



<script async src="https://www.googletagmanager.com/gtag/js?id=G-JBWEC7QQTS"></script>

<style>
  h2 {
    font-size: 30px !important;
  }

  h1 {
    font-size: 25px !important;
  }
</style>

<head>
  <title>Lopes & Souza</title>



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
          <li class="nav-item ">
            <a class="nav-link" href="/">Inicio </span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/imoveis">Realize seus sonhos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/quemsomos">Quem somos</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <div class="container">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-12">
        <h1 class="page-header">Nossos Imoveis</h1>
      </div>


    </div>

    <div class="row">
      <!-- filter mobile -->
      <div class=" col-6 d-md-none">
        <div class="row justify-content-between mt-2">
          <div class="col-12 product-qty">
            <strong>{{count($imovel)}} Imovel(s)</strong>
          </div>

        </div>
      </div>

      <div class="col-6 d-md-none">
        <a class="btn btn-outline-secondary btn-filter btn-block my-0 mb-3 d-md-none" data-toggle="collapse" href="#collapsefiltro" role="button" aria-expanded="false" aria-controls="collapseExample">
          <i class="fas fa-sliders-h"></i> Filtros <span class="badge badge-light"></span></a>

      </div>
      <div class="collapse" id="collapsefiltro">
        <div class="col-6 d-md-none">
          <form id="filters" method="get" action="/imoveis">

            @csrf

            <div>

              <h4>Filtrar por:</h4>

              <div>
                <h5>Tipo:</h5>
                <ul class="category_menu_list small">

                  <li>
                    <div class="custom-control custom-radio">

                      <input type="radio" id="casa1" class="custom-control-input checkbox " name="select" value=1 @if($select==1 ) checked @else @endif onChange='this.form.submit()'>
                      <label class="custom-control-label name" for="casa1">Casa</label>

                    </div>
                  </li>

                  <li>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="terreno1" class="custom-control-input checkbox" name="select" value=2 @if($select==2 ) checked @else @endif onChange='this.form.submit()'>
                      <label class="custom-control-label name" for="terreno1">Terreno</label>

                    </div>
                  </li>

                  <li>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="apartamento" class="custom-control-input checkbox" name="select" value=3 @if($select==3 ) checked @else @endif onChange='this.form.submit()'>
                      <label class="custom-control-label name" for="apartamento">Apartamento</label>

                    </div>
                  </li>

                  <li>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="galpao1" class="custom-control-input checkbox" name="select" value=4 @if($select==4 ) checked @else @endif onChange='this.form.submit()'>
                      <label class="custom-control-label name" for="galpao1">Galpão</label>

                    </div>
                  </li>
                </ul>
              </div>
              <h5>Negociação:</h5>
              <ul class="category_menu_list small">

                <li>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="aluguel" class="custom-control-input checkbox" name="select1" value="1" @if($select1==1 ) checked @else @endif onChange='this.form.submit()'>
                    <label class="custom-control-label name" for="aluguel">Aluguel</label>
                  </div>
                </li>

                <li>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="venda" class="custom-control-input checkbox" name="select1" value="2" @if($select1==2 ) checked @else @endif onChange='this.form.submit()'>
                    <label class="custom-control-label name" for="venda">Venda</label>
                  </div>
                </li>
              </ul>

              <br> <a class="btn btn-lg btn-warning" href="/imoveis" role="button">Limpar Filtros</a>
            </div>
        </div>
        </form>

      </div>
    <!-- end filter mobile -->

    <div class="col-lg-3 col-md-4">
      <form id="filters" method="get" action="/imoveis">

        @csrf

        <div id="side-filters">

          <h4>Filtrar por</h4>

          <div class="filter_wrapper card p-3 mb-3">
            <h5>Tipo</h5>
            <ul class="category_menu_list small">

              <li>
                <div class="custom-control custom-radio">

                  <input type="radio" id="casa1" class="custom-control-input checkbox " name="select" value=1 @if($select==1 ) checked @else @endif onChange='this.form.submit()'>
                  <label class="custom-control-label name" for="casa1">Casa</label>

                </div>
              </li>

              <li>
                <div class="custom-control custom-radio">
                  <input type="radio" id="terreno1" class="custom-control-input checkbox" name="select" value=2 @if($select==2 ) checked @else @endif onChange='this.form.submit()'>
                  <label class="custom-control-label name" for="terreno1">Terreno</label>

                </div>
              </li>

              <li>
                <div class="custom-control custom-radio">
                  <input type="radio" id="apartamento" class="custom-control-input checkbox" name="select" value=3 @if($select==3 ) checked @else @endif onChange='this.form.submit()'>
                  <label class="custom-control-label name" for="apartamento">Apartamento</label>

                </div>
              </li>

              <li>
                <div class="custom-control custom-radio">
                  <input type="radio" id="galpao1" class="custom-control-input checkbox" name="select" value=4 @if($select==4 ) checked @else @endif onChange='this.form.submit()'>
                  <label class="custom-control-label name" for="galpao1">Galpão</label>

                </div>
              </li>
            </ul>
          </div>
          <div class="filter_wrapper card p-3 mb-3">
            <h5></h5>
            <ul class="category_menu_list small">

              <li>
                <div class="custom-control custom-radio">
                  <input type="radio" id="aluguel" class="custom-control-input checkbox" name="select1" value="1" @if($select1==1 ) checked @else @endif onChange='this.form.submit()'>
                  <label class="custom-control-label name" for="aluguel">Aluguel</label>
                </div>
              </li>

              <li>
                <div class="custom-control custom-radio">
                  <input type="radio" id="venda" class="custom-control-input checkbox" name="select1" value="2" @if($select1==2 ) checked @else @endif onChange='this.form.submit()'>
                  <label class="custom-control-label name" for="venda">Venda</label>
                </div>
              </li>
            </ul>

            <br> <a class="btn btn-lg btn-warning" href="/imoveis" role="button">Limpar Filtros</a>
          </div>
        </div>
      </form>
    </div>



    <div class="col-lg-9 col-md-8">

      <div class="row justify-content-between mb-4">
        <div class="col-md-5 product-qty d-none d-md-block">
          <strong>{{count($imovel)}} Imovel(s)</strong>
        </div>

        <div class="col-lg-7 col-md-7 d-none d-md-block">
          <div class="form-group row">
            <label class="col-sm-12 col-md-4 col-form-label col-form-label-sm text-md-right">Pesquisar:</label>
            <div class="col-sm-12 col-md-8">
              <div class="field-group select">
                <form action="/imoveis" method="GET" class="form form-inline">
                  @csrf
                  <input type="text" id="search" name="search" placeholder="Buscar:" class="form-control">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </form>

                </input>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-md-5 mb-4 mx-n2">

        <div class="col-lg-3 col-6 product-block mb-4 px-2">
          @foreach ($imovel as $imovels)
          <a class="justify-content-center" href="/detalhes/{{$imovels->id}}">
            <img class=" justify-content-center h-50 w-100 img-fluid img-portfolio img-hover mb-2" src="/Images/imoveis/{{$imovels->image}}" alt="placeholder" />
          </a>

          <div class="caption">
            <h3><a href="/detalhes/{{$imovels->id}}">{{$imovels->rua}} - {{$imovels->bairro}} - {{$imovels->cidade}}</a></h3>
            <div class="price-mob mb-2">


              R${{$imovels->preço}}


            </div>
            <div class="clearfix"></div>



          </div>

        </div>

        <div class="col-lg-3 col-6 product-block mb-4 px-2">
          @endforeach



          <div class="col-12">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- Footer -->
  <hr>
  <div class="container">
    <footer>
      <div class="row">
        <div class="col-12 col-md-6 order-2 order-md-1">
          <p class="powered-by">&copy; 2021 Lopes & Souza. </p>
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2">

        </div>

      </div>
    </footer>

  </div>

  <!-- /.container -->

  <!-- Css -->
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- Bootstrap Core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="{{asset('jquery.min.js')}}"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>

</html>