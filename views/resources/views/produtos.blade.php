<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Com Bootstrap</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >    
</head>
<body>

    @if( isset($produtos) )

        @if (count($produtos) == 0)
            <h1>
                Nenhum produto na variável
            </h1>
        @else
            <h1>
                @foreach ($produtos as $item)
                    <p> {{$item}} </p>
                @endforeach
            </h1>
        @endif

    @else
        <h2>
            Não temos Produtos
        </h2>
    @endif

    <script src="{{ asset('js/app.js') }}" type="text/javascript" ></script>
</body>
</html>