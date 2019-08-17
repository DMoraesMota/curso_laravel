<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @extends('layouts.principal')

    @section('titulo', 'clientes - edição')

    @section('conteudo')
        <h3> Novo Cliente </h3>

        <form action="{{ route('clientes.update', $cliente['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="nome" value="{{ $cliente['nome'] }}">
            <input type="submit" value="Atualizar Cliente">
        </form>

    @endsection
    
</body>
</html>