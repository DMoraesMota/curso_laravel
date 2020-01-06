<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Acesso Identificado</title>
</head>
<body>
<h4>Seja Bem Vindo {{$nome}}</h4>

    <p>Você acabou de acessar o sistema utilizando o e-mail {{$email}} </p>

    <p>Data/Hora de acesso: {{$datahora}} </p>

    <div>
        <img width="10%" height="10%" 
            src="{{ $message->embed( public_path() . '/img/laravel.jpg' ) }}">
    </div>
</body>
</html>