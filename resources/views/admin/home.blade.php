@extends('layouts.admin')

@section('content')
<div class="container center-block">
    <div class="row mt-3 mb-4">
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                {{-- <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Categorias" alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Meu Perfil</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="{{ route('admin.categories.show') }}" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                {{-- <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Categorias" alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Meus Pedidos</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="{{ route('admin.orders.show') }}" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div>
    </div>
    @if(auth()->user()->isAdmin())
    <div class="row mb-4">
        <div class="col-12">
            <h3>Admin</h3><hr>
        </div>
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                {{-- <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Categorias" alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Categorias</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="{{ route('admin.categories.show') }}" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                {{-- <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Marcas" alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Marcas</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="#" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                {{-- <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Produtos" alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Produtos</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="{{ route('admin.products.show') }}" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
