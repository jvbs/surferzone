@extends('layouts.admin')

@section('content')
<style>
    .card-shadow {
        box-shadow: 0px 4px 7px #0000002e;
    }
</style>
<div class="container center-block">
    <div class="row mb-4">
        <div class="col-2">
            <a href="{{ route('index') }}" class="btn btn-sm btn-secondary"><i class="fa fa-home"></i> Início</a>
        </div>
    </div>
    <div class="row mt-3 mb-4">
        {{-- <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card card-shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">Perfil</h5>
                    <a href="{{ route('admin.categories.show') }}" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card card-shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">Pedidos</h5>
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
            <div class="card card-shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">Categorias</h5>
                    <a href="{{ route('admin.categories.show') }}" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card card-shadow">
                {{-- <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Marcas" alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Marcas</h5>
                    <a href="{{ route('admin.brands.show') }}" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card card-shadow">
                {{-- <img class="card-img-top" src="https://via.placeholder.com/286x180.png?text=Produtos" alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Produtos</h5>
                    <a href="{{ route('admin.products.show') }}" class="btn btn-primary mt-2">Visualizar</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
