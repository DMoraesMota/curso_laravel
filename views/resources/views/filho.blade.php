@extends('layout.app')

@section('titulo','minhaPagina Nada')

@section('barralateral')
    @parent
    <p> Esta parte é do template filho</p>
@endsection

@section('conteudo')
    <p>Este é o conteúdo o filho</p>
@endsection