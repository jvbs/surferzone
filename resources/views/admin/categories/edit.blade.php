@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-1">
            <a href="{{ route('admin.categories.show') }}" class="btn btn-sm btn-secondary">Voltar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1>Editar categoria</h1>
        </div>
    </div>
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="input-product-id">ID</label>
                <input type="text" class="form-control" id="input-product-id" name="id" value="{{ $category->id }}" readonly>
            </div>
            <div class="form-group col-11">
                <label for="input-category-name">Nome</label>
                <input
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    id="input-category-name"
                    name="name"
                    value="{{ old('name') ?? $category->name }}"
                    autocomplete="off">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <button class="btn btn-success pull-right"><i class="fa fa-check-circle"></i> Salvar</button>
    </form>
</div>

@endsection
