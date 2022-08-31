@extends('layouts.app')

@section('title', 'Criação')

@section('content')
<!-- Tudo aqui dentro vai ser renderizado lá no nosso template (app.blade.php) -->

    <div class="container mt-5"> <!-- mt-5: margem do topo -->

        <h1>Crie um novo hardware</h1>

        <hr>

        <!-- método 'post', pois vai salvar -->
        <form action="{{ route('hardwares-store') }}" method="POST">

            @csrf <!--auxiliar de segurança da aplicação (se nao colocar da erro: pagina expirada 419)-->

            <div class="form-group">

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
                </div>

                <br>

                <div class="form-group">
                    <label for="valor">Quantidade:</label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Digite uma quantidade...">
                </div>

                <br>

                <div class="form-group">
                    <label for="quantidade_estoque">Cor:</label>
                    <input type="text" class="form-control" name="cor" placeholder="Digite uma cor...">
                </div>

                <br>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary btn-sm">
                </div>

            </div>

        </form>

    </div>

@endsection
