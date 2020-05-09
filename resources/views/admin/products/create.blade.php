@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1>Novo produto</h1>
        </div>
    </div>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="input-product-name">Nome</label>
                <input type="text" class="form-control" id="input-product-name" name="name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="input-product-description">Descrição</label>
                <textarea name="description" class="form-control" id="input-product-description" rows="5" ></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="input-product-price">Preço</label>
                <input type="number" class="form-control" id="input-product-price" name="price">
            </div>
            <div class="form-group col-md-6">
                <label for="input-product-discount">Desconto</label>
                <input type="number" class="form-control" id="input-product-discount" name="discount">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="input-product-size_id">Tamanho</label>
                <input type="number" class="form-control" id="input-product-size_id" name="size_id">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-brand_id">Marca</label>
                <input type="number" class="form-control" id="input-product-brand_id" name="brand_id">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-category_id">Categoria</label>
                <input type="number" class="form-control" id="input-product-category_id" name="category_id">
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-color_id">Cor</label>
                <input type="number" class="form-control" id="input-product-color_id" name="color_id">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile">Escolher imagem...</label>
                </div>
            </div>
        </div>
        <button class="btn btn-success pull-right"><i class="fa fa-check-circle"></i> Cadastrar produto</button>
    </form>
</div>

@endsection
