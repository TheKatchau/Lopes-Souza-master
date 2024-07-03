
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modificar o imóvel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/imov/update/{{$imovel->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <main role="main">

                        <div class="row featurette">
                        <div class="col-md-7">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                
                                <li data-target="#myCarousel" data-slide-to="1"></li>

                                <li data-target="#myCarousel" data-slide-to="2"></li>
                               
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                
                                <li data-target="#myCarousel" data-slide-to="4"></li>


                                
                                <li data-target="#myCarousel" data-slide-to="5"></li>


                                
                                <li data-target="#myCarousel" data-slide-to="6"></li>

                                
                               
                                <li data-target="#myCarousel" data-slide-to="7"></li>


                               
                                <li data-target="#myCarousel" data-slide-to="8"></li>


                                
                                <li data-target="#myCarousel" data-slide-to="9"></li>


                               
                                <li data-target="#myCarousel" data-slide-to="10"></li>


                                
                                <li data-target="#myCarousel" data-slide-to="11"></li>


                                
                                <li data-target="#myCarousel" data-slide-to="12"></li>
                                </ol>


                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image}}" alt="First slide" >
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image" name="image" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @if($imovel->image1!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image1}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image1" name="image1" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="First slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image1" name="image1" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($imovel->image2!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image2}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image2" name="image2" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image2" name="image2" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @endif

                                @if($imovel->image3!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image3}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image3" name="image3" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image3" name="image3" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @endif

                                @if($imovel->image4!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image4}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image4" name="image4" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image4" name="image4" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @endif

                                @if($imovel->image5!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image5}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image5" name="image5" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image5" name="image5" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($imovel->image6!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image6}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image6" name="image6" class="btn btn-warning" >
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image6" name="image6" class="btn btn-warning" >
                                        </div>
                                    </div>
                                </div>

                                @endif

                                @if($imovel->image7!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image7}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image7" name="image7" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image7" name="image7" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @endif

                                @if($imovel->image8!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image8}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image8" name="image8" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image8" name="image8" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @endif

                                @if($imovel->image9!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image9}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image9" name="image9" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image9" name="image9" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($imovel->image10!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image10}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image10" name="image10" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image10" name="image10" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($imovel->image11!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image11}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image11" name="image11" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image11" name="image11" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @endif

                                @if($imovel->image12!= NULL)
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/imoveis/{{$imovel->image12}}" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <input type="file" id="image12" name="image12" class="btn btn-warning">
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="carousel-item">
                                    <img class="h-100 w-100 d-flex justify-content-center" src="/Images/background-wallpaper-preto.jpg" alt="Second slide"></img>
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                        <input type="file" id="image12" name="image12" class="btn btn-warning">
                                        </div>
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
                        </div> 
                        
                        <!-- Fim carrossel-->
                        <div class="col-md-5">
                        <label for="title">Rua:</label>
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Nome da Rua" value="{{$imovel->rua}}" required><br>
                        <label for="title">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Nome do bairro" value="{{$imovel->bairro}}" required><br>
                        <label for="title">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da cidade" value="{{$imovel->cidade}}" required><br>
                        <label for="title">Tipo de Imóvel</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="Terreno">Terreno</option>
                            <option value="Casa"{{$imovel->tipo == 'Casa' ? "selected='selected'" : ""}}>Casa</option>
                            <option value="Apartamento"{{$imovel->tipo == 'Apartamento' ? "selected='selected'" : ""}}>Apartamento</option>
                            <option value="Galpão"{{$imovel->tipo == 'Galpão' ? "selected='selected'" : ""}}>Galpão</option>
                        </select><br>    
                        
                        
                        <label for="title">Numéro de ambientes:</label>
                        <input type="text" class="form-control" id="ambiente" name="ambiente" onkeypress="$(this).mask('000');"placeholder="Numero de ambientes do imóvel" value="{{$imovel->ambiente}}" required><br>
                        
                        <label for="title">Está á venda ou alugando?</label>
                        <select name="venda" id="venda" class="form-control">
                            <option value="Venda">Venda</option>
                            <option value="Aluguel"{{$imovel->venda == 'Aluguel' ? "selected='selected'" : ""}}>Aluguel</option>
                        </select><br>

                       
                        <label for="title">Deseja adicionar aos destaques?</label>
                        <select name="destaque" id="destaque" class="form-control">
                            <option value="0">Não</option>
                            <option value="1"{{$imovel->destaque == 1 ? "selected='selected'" : ""}}>Sim</option>
                        </select><br>

                        <span> Preço do imóvel: </span>
                        <input type="text" class="form-control" name="preço" id="preço" placeholder="Preço do imóvel"onkeypress="$(this).mask('#.##0,00', {reverse: true});" required value="{{$imovel->preço}}"><br>
                        
                        <label for="title">Descrição:</label>
                        <textarea name="descricao" id="descricao" class="form-control" placeholder="{{$imovel->descricao}}"  required>{{$imovel->descricao}}</textarea>
                        
                        
                        <br>
                        <!-- Imagem editor...-->
                        <label for="video" class="col-sm-3 col-form-label" >Video Mp4:</label>
                        <p><input type="file" id="video" name="video" class="form-control-file"></p><br>
                        
                        <input type="submit" class="btn btn-warning" value="Concluir edição"> </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
