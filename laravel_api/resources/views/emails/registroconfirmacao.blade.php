<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail de confirmaçaõ de conta</title>
</head>
<body>
    <h4>Seja bem vindo, {{$nome}}</h4>
    <p>Você acabou de acessar o sistema utilizando o email {{$email}}</p>

    <p>Data / Hora de acesso: {{$datahora}}</p>

    <p>Clique no link abaixo para confirmar seu e-mail</p>
    <a href="{{$link}}"> CLIQUE AQUI</a>

</body>
</html>