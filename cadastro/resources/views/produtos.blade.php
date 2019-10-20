@extends('layout.app', ["current" =>"produtos"])

@section('body')
     
<div class="card border">
        <div class="card-body">
            <h5 class="card-title">Catalogo de Produtos</h5>

    @if (count($prod) > 0)

        <table class="table table-hover">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thread>
            @foreach ($prod as $prod)
                <tbody>
                    <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->nome}}</td>
                        <td>{{$prod->estoque}}</td>
                        <td>{{$prod->preco}}</td>
                        <td>{{$prod->categoria_id}}</td>
                        <td>
                            <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach      

        </table>
    @endif
</div>

<div class="card-footer">
    <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button"> Novo Produto</a>
</div>

</div>
@endsection