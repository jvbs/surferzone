@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Categorias" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Categorias</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Produtos" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Produtos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('admin.products.show') }}" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Marcas" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Marcas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
