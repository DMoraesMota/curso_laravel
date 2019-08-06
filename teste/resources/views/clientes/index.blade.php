<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @extends('layouts.principal')

    @section('titulo','clientes')

    @section('conteudo')

        <h1>clientes</h1>
        <a href="{{ route('clientes.create' )}}">Novo Cliente</a>

        @if(count($clientes)>0)

        <ul>
            @foreach ($clientes as $c)
                <li>
                    {{$c['nome']}} |
                    <a href="{{ route('clientes.edit', $c['id'] )}}">Editar</a> | 
                    <a href="{{ route('clientes.show', $c['id'] )}}">Informações</a>

                    <form action=" {{ route('clientes.destroy', $c['id']) }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Apagar">
                    </form>    
                </li>
            @endforeach
        </ul>

        <hr>

        <center><h1>LOOPS</h1></center>

        <h5>
            FOR
        </h5>

    

        @for ($i = 0 ; $i < count($clientes) ; $i++)
            {{$i}}
        @endfor

        <br>

        <hr>

        <h5>
            FOREACH
        </h5>

        @foreach ($clientes as $c )
            {{$c['nome']}} | 
            @if ($loop->first)
                (primeiro) |
            @endif

            @if ($loop->last)
                (ultimo) |
            @endif

            ({{$loop->index}}) / {{$loop->iteration}} /  {{$loop->count}}

        @endforeach

        @else

            <h4> Não existe clientes cadastrados </h4>

        @endif

    @endsection

</body>
</html>