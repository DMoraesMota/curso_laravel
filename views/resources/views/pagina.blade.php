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
    @alerta(['tipo'=>'light', 'titulo'=>'Errooo'])
        <strong>Erro: </strong> Sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'danger', 'titulo'=>'Fudeu'])
        <strong>Erro: </strong> Sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'warning', 'titulo'=>'Quase Fudeu'])
        <strong>Erro: </strong> Sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'success', 'titulo'=>'Sucesso Geral'])
        <strong>Erro: </strong> Sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'secondary', 'titulo'=>'Sucesso Geral'])
        <strong>Erro: </strong> Sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'dark', 'titulo'=>'Sucesso Geral'])
        <strong>Erro: </strong> Sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'info', 'titulo'=>'Sucesso Geral'])
        <strong>Erro: </strong> Sua mensagem de erro.
    @endalerta

    <script src="{{ asset('js/app.js') }}" type="text/javascript" ></script>
</body>
</html>