@extends('layout.meulayout')

@section('minha_secao_produtos')

    Você escolheu a opção: 

    @if (isset($opcao))

        @switch($opcao)
            @case(1)
                <span class="badge badge-primary">
                    Você escolheu a opção 1
                </span>
                @break
            @case(2)
                <span class="badge badge-danger">
                    Você escolheu a opção 2
                </span>
                @break
            @case(3)
                <span class="badge badge-success">
                    Você escolheu a opção 3
                </span>
                @break
            @case(4)
                <span class="badge badge-warning">
                    Você escolheu a opção 4
                </span>
                @break
            @case(5)
                <span class="badge badge-light">
                    Você escolheu a opção 5
                </span>
                @break                
            @default
                OPS: Nenhuma opção válida
        @endswitch
    
    @else
        <h1>
            Opção não existente.
        </h1>
    @endif

@endsection