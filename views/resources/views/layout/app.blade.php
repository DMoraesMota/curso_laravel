<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TituloFixo - @yield('titulo')</title>
</head>
<body>
    @section('barralateral')
        <p> Esta parte da seção é do template pai. </p>
    @show

    <div>        
        @yield('conteudo')
    </div>
</body>
</html>