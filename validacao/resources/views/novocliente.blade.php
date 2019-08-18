<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>Castro de Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">                        
                    <div class="card-header">
                            <div class="card-title">
                                Cadastro de Cliente
                            </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Cliente">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="text" name="idade" id="idade" class="form-control" placeholder="idade do Cliente">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereco do Cliente</label>
                                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="endereco do Cliente">
                            </div>
                            <div class="form-group">
                                <label for="email">Email do Cliente</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="email do Cliente">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-primary btn-sm">Cancelar</button>
                        </form>
                    </div>
                    @if ($errors->any())
                        <div class="card-footer">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <script src=" {{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>