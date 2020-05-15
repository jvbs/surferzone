@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1>Editar produto</h1>
        </div>
    </div>
<form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="input-product-id">ID</label>
                <input type="text" class="form-control" id="input-product-id" name="id" value="{{ $product->id }}" readonly>
            </div>
            <div class="form-group col-md-11">
                <label for="input-product-name">Nome</label>
                <input type="text" class="form-control" id="input-product-name" name="name" value="{{ $product->name }}" autocomplete="off">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="input-product-description">Descrição</label>
                <textarea name="description" class="form-control" id="input-product-description" rows="5" autocomplete="off">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="input-product-price">Preço</label>
                <input type="number" class="form-control" id="input-product-price" name="price" value="{{ $product->price }}" autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="input-product-discount">Desconto</label>
                <input type="number" class="form-control" id="input-product-discount" name="discount" value="{{ $product->discount }}" autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="input-product-stock">Estoque</label>
                <input type="number" class="form-control" id="input-product-stock" name="stock" value="{{ $product->stock }}" autocomplete="off">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="input-product-size_id">Tamanho</label>
                <input type="number" class="form-control" id="input-product-size_id" name="size_id" value="{{ $product->size_id }}" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-brand_id">Marca</label>
                <input type="number" class="form-control" id="input-product-brand_id" name="brand_id" value="{{ $product->brand_id }}" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-category_id">Categoria</label>
                <input type="number" class="form-control" id="input-product-category_id" name="category_id" value="{{ $product->category_id }}" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-color_id">Cor</label>
                <input type="number" class="form-control" id="input-product-color_id" name="color_id" value="{{ $product->color_id }}" autocomplete="off">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img" id="input-product-img">
                    <label class="custom-file-label" for="input-product-img">Escolher imagem...</label>
                </div>
            </div>
        </div>
        <div class="form-row" style="display:grid">
            <span>Preview:</span>
            <img style="width:30%;height:auto;box-shadow: 0px 0px 20px #0000004d;margin-top:5px" src="{{ asset('storage/img/products/'.$product->img) }}" alt="Imagem {{ $product->name }}">
        </div>
        <button class="btn btn-success pull-right"><i class="fa fa-check-circle"></i> Editar produto</button>
    </form>
</div>

@endsection
