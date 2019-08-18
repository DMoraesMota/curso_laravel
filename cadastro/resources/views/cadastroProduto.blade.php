@extends('layout.app', ["current"=>"Produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto"> Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection