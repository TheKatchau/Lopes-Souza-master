
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar imoveis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/addimoveis" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="title">Rua:</label>
                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Nome da Rua" required>
                        </div><br></br>
                        <div class="form-group">
                            <label for="title">Bairro:</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Nome do bairro" required>
                        </div><br></br>
                        <div class="form-group">
                            <label for="title">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da cidade" required>
                        </div><br></br>
                        <div class="form-group" >
                            <label for="title">Tipo de Imóvel</label>
                            <select name="tipo" id="tipo" class="form-control">
                            <option value="Terreno">Terreno</option>
                            <option value="Casa">Casa</option>
                            <option value="Apartamento">Apartamento</option>
                            <option value="Galpão">Galpão</option>
                            </select>    
                        </div><br></br>
                        <div class="form-group" >
                            <label for="title">Numéro de ambientes:</label>
                            <input type="text" class="form-control" id="ambiente" name="ambiente" onkeypress="$(this).mask('000');"placeholder="Numero de ambientes do imóvel" required>
                        </div><br></br>
                        <div class="form-group" >
                            <label for="title">Está á venda ou alugando?</label>
                            <select name="venda" id="venda" class="form-control">
                            <option value="Venda">Venda</option>
                            <option value="Aluguel">Aluguel</option>
                            </select>
                        </div><br></br>
                        <div class="form-group" >
                            <label for="title">Deseja adicionar aos destaques?</label>
                            <select name="destaque" id="destaque" class="form-control">
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                            </select>
                        </div><br></br>

                        <span> Preço do imóvel: </span>
                        <input type="text" class="form-control" name="preço" id="preço" placeholder="Preço do imóvel"onkeypress="$(this).mask('#.##0,00', {reverse: true});"required > <br></br>
                        
                            <div class="form-group">
                            <label for="title">Descrição:</label>
                            <textarea name="descricao" id="descricao" class="form-control" placeholder="Digite a descrição do imóvel" required></textarea>
                        </div>
                        
                        <br></br>
                        <div class="form-group">
                            <label for="image">Foto principal do imóvel:</label><br></br>
                            <input type="file" id="image" name="image" class="form-control-file" required>
                        </div>
                        <br><div class="form-group">
                        <label for="video" class="col-sm-3 col-form-label" >Escolher Video, somente formato Mp4:</label>
                        <input type="file" id="video" name="video" class="form-control-file">
                        
                        <br><br><div class="form-group">
                        <label for="image1" class="col-sm-3 col-form-label" >Escolher Demais Fotos:</label>
                            <div class="col-md-6">
                                <input type="file" id="image1" name="image1" class="form-control-file">
                                <input type="file" id="image2" name="image2" class="form-control-file">
                                <input type="file" id="image3" name="image3" class="form-control-file">
                                <input type="file" id="image4" name="image4" class="form-control-file">
                                <input type="file" id="image5" name="image5" class="form-control-file">
                                <input type="file" id="image6" name="image6" class="form-control-file">
                                <input type="file" id="image7" name="image7" class="form-control-file">
                                <input type="file" id="image8" name="image8" class="form-control-file">
                                <input type="file" id="image9" name="image9" class="form-control-file">
                                <input type="file" id="image10" name="image10" class="form-control-file">
                                <input type="file" id="image11" name="image11" class="form-control-file">
                                <input type="file" id="image12" name="image12" class="form-control-file">
                        </div>
                    </div>    

                    
                        <br></br>
                        <input type="submit" class="btn btn-success" value="Adicionar imóvel"> </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
