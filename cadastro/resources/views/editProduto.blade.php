@extends('layout.app', ["current"=>"produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos/{{$produto_sele->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto"> Nome do Produto</label>
                    <input type="text" class="form-control" 
                      name="nomeProduto" id="nomeProduto" placeholder="Nome do Produto" value="{{$produto_sele->nome}}">
                    <label for="estoque"> Estoque </label>
                    <input type="number" class="form-control" name="estoque" id="estoque" placeholder="Quantidade estoque" value="{{$produto_sele->estoque}}">
                    <label for="preco"> Preço </label>
                    <input type="number" class="form-control" name="preco" id="preco" placeholder="Preço" value="{{$produto_sele->preco}}">
                    <label for="categoria"> Categoria </label>                    
                    <select id="categoria" class="form-control" name="categoria" id="categoria" placeholder="Seleciona uma categoria"> 

                        @foreach ($categorias as $cat )
                            @if ($cat->id == $produto_sele->categoria_id)
                                <option selected value="{{ $produto_sele->categoria_id }}"> {{ $cat->nome }} </option>
                            @else 
                                <option value="{{ $cat->id }}"> {{ $cat->nome }} </option>
                            @endif
                        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelara</button>
            </form>
        </div>
    </div>
@endsection