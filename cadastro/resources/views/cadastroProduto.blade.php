@extends('layout.app', ["current"=>"Produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto"> Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                    <label for="estoque"> Estoque </label>
                    <input type="number" class="form-control" name="estoque" id="estoque" placeholder="Quantidade estoque">
                    <label for="preco"> Preço </label>
                    <input type="number" class="form-control" name="preco" id="preco" placeholder="Preço">
                    <label for="categoria"> Categoria </label>                    
                    <select id="categoria" class="form-control" name="categoria" id="categoria" placeholder="Seleciona uma categoria">
                        @foreach ($categorias as $cat )
                            <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
                        @endforeach                            
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection