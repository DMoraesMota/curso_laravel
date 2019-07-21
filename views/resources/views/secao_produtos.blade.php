<!-- Para externder um layout, basta usar o extends -->
@extends('layout.meulayout')

@section('minha_secao_produtos')
    @if(isset($palavra))
        A palavra é: {{$palavra}}
    @endif    
@endsection