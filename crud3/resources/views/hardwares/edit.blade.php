@extends('layouts.app')

@section('title', 'Criação')

@section('content')
<!-- Tudo aqui dentro vai ser renderizado lá no nosso template (app.blade.php) -->

    <div class="container mt-5"> <!-- mt-5: margem do topo -->

        <h1>Editar hardware</h1>

        <hr>

        <!-- método 'post', pois vai salvar -->
        <!--como a rota necessita de um parâmetro 'id', aqui na view eu crio um parâmetro id também-->
        <!-- método 'POST', pois vai salvar -->
        <form action="{{ route('hardwares-update', ['id' => $hardwares->id]) }}" method="POST">

            @csrf <!--auxiliar de segurança da aplicação (se nao colocar da erro: pagina expirada 419)-->
            @method('PUT')
            <!-- o formulario só aceita o método 'post' ou 'get', ai tenho que forçar um método 'put' com a função method() -->

            <div class="form-group">

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $hardwares->nome }}" placeholder="Digite um nome...">
                    <!--value: trazendo dados do banco de dados e colocando em seus devidos campos na tela-->
                </div>

                <br>

                <div class="form-group">
                    <label for="valor">Quantidade:</label>
                    <input type="number" class="form-control" name="quantidade" value="{{ $hardwares->quantidade }}" placeholder="Digite uma quantidade...">
                </div>

                <br>

                <div class="form-group">
                    <label for="quantidade_estoque">Cor:</label>
                    <input type="text" class="form-control" name="cor" value="{{ $hardwares->cor }}" placeholder="Digite uma cor...">
                </div>

                <br>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Atualizar">
                </div>

            </div>

        </form>

    </div>

@endsection
