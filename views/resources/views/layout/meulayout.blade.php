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

    <!-- Validando a existência da seção antes de montar o layout -->
    @hasSection ('minha_secao_produtos')
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="width:500px; margin:10px; "> Produtos </h5>
                    <p class="card-text">                
                        <!-- Chamando a seção da página filha para mostrar no template pai -->
                        @yield('minha_secao_produtos')
                    </p>
                    <a href="#" class="card-link"> Informações</a>
                    <a href="#" class="card-link"> Ajuda</a>
                    <a href="/mostraropcoes" class="card-link"> Voltar</a>
                </div>
        </div>
    @else
        <h1>
            Nao tem a seção especificada
        </h1>
    @endif

    


    <script src="{{ asset('js/app.js') }}" type="text/javascript" ></script>
</body>
</html>