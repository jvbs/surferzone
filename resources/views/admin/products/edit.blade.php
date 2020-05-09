@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1>Editar produto</h1>
        </div>
    </div>
    <form action="">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="input-product-id">ID</label>
                <input type="text" class="form-control" id="input-product-id" name="id" value="{{ $product->id }}" readonly>
            </div>
            <div class="form-group col-md-11">
                <label for="input-product-name">Nome</label>
                <input type="text" class="form-control" id="input-product-name" name="name" value="{{ $product->name }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="input-product-description">Descrição</label>
                <textarea name="description" class="form-control" id="input-product-description" rows="5" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="input-product-price">Preço</label>
                <input type="number" class="form-control" id="input-product-price" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group col-md-6">
                <label for="input-product-discount">Desconto</label>
                <input type="number" class="form-control" id="input-product-discount" name="discount" value="{{ $product->discount }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="input-product-size_id">Tamanho</label>
                <input type="number" class="form-control" id="input-product-size_id" name="size_id" value="{{ $product->size_id }}">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-brand_id">Marca</label>
                <input type="number" class="form-control" id="input-product-brand_id" name="brand_id" value="{{ $product->brand_id }}">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-category_id">Categoria</label>
                <input type="number" class="form-control" id="input-product-category_id" name="category_id" value="{{ $product->category_id }}">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-color_id">Cor</label>
                <input type="number" class="form-control" id="input-product-color_id" name="color_id" value="{{ $product->color_id }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile">Escolher imagem...</label>
                </div>
            </div>
        </div>
        <button class="btn btn-success pull-right"><i class="fa fa-check-circle"></i> Editar produto</button>
    </form>
</div>

@endsection
