@extends('layout.app', ["current" =>"home"])

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadatro de Produto</h5>
                        <p class="card-text">
                            Aqui você cadastra todos os produtos
                            So não se esqueça de cadastrar previamente as categorias
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastro de produtos</a>
                    </div>
                </div>

                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadatro de Categorias</h5>
                        <p class="card-text">
                            Aqui você cadastra as categorias dos produtos
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastro de categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection