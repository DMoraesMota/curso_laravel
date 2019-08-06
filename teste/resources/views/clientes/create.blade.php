<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @extends('layouts.principal')

    @section('titulo','clientes - criar')

    @section('conteudo')

        <h3> Novo Cliente </h3>

        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <input type="text" name="nome">
            <input type="submit" value="Salvar Cliente">
        </form>

    @endsection


</body>
</html>