<x-app-layout>
<style>
    .dashboard-title-container{
        margin-bottom: 30px;
        margin-top: 30px;
    }

    .dashboard-imovels-container form{
        display: inline-block;
    }

    .dashboard-imovels-container th{
        width: 25%;
    }
    

</style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar imóveis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(count($imovel)>0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Operação</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($imovel as $imovels)
                                <tr>
                                    
                                    <td scope="row">{{$loop->index+1}}</td>
                                    <td><a>{{$imovels->rua}} - {{$imovels->bairro}} - {{$imovels->cidade}}</a></td>
                                    <td><a>{{$imovels->tipo}}</a></td>
                                    <td><a>{{$imovels->venda}}</a></td>
                                    <td>
                                    <div class="dashboard-imovels-container">
                                        <!-- Editar -->
                                            <a href="/edit/imov{{$imovels->id}}" class="btn btn-warning"> <i class="fa fa-paint-brush" aria-hidden="true"></i> Editar</a> 
                                            
                                            <!-- Deletar -->
                                             <button class="btn btn-danger" data-toggle="modal" data-target="#del"><i class="fa fa-trash"></i> Deletar</button>
                                                <div class="modal fade" id="del" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">Deseja deletar o Imóvel?</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                    <!-- Fim da chamada do modal -->

                                                    </div>

                                                    <!-- Inicio do Corpo do modal -->
                                                    <div class="modal-body">
                                                        <spam>Essa ação apagará permanentemente os dados desse imóvel, deseja continuar mesmo assim?</spam>
                                                    <div class="modal-footer">
                                                    <form action="/edit/{{ $imovels->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-trash"></i> Sim</button>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>

                                            </form>
                                             <a href="/detalhes/{{$imovels->id}}" class="btn btn-success"><i class="fa fa-eye"></i> Visualizar</a>
                                         </div>
                                    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>Voce ainda não tem imóveis, <a href="/Adicionarimoveis" >Adicionar imóveis</a></p>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</x-app-layout>
