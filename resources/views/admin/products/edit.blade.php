@extends('layouts.admin')

@section('content')
<script src="{{ asset('js/plugins/jquery.mask.min.js') }}" defer></script>
<script src="{{ asset('js/maskForm.js') }}" defer></script>
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1>Editar produto</h1>
        </div>
    </div>
    <form class="mb-5" action="{{ route('admin.products.update', $data['product']->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="input-product-id">ID</label>
                <input type="text" class="form-control" id="input-product-id" name="id" value="{{ $data['product']->id }}" readonly>
            </div>
            <div class="form-group col-md-11">
                <label for="input-product-name">Nome</label>
                <input
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    id="input-product-name"
                    name="name"
                    value="{{ old('name') ?? $data['product']->name }}"
                    autocomplete="off">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="input-product-description">Descrição</label>
                <textarea
                    name="description"
                    class="form-control @error('description') is-invalid @enderror"
                    id="input-product-description"
                    rows="5"
                    autocomplete="off">{{ old('description') ?? $data['product']->description }}</textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="input-product-price">Preço</label>
                <input
                    type="text"
                    class="form-control @error('price') is-invalid @enderror"
                    id="input-product-price"
                    name="price"
                    value="{{ old('price') ?? $data['product']->price }}"
                    autocomplete="off">

                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="input-product-discount">Desconto</label>
                <input
                    type="text"
                    class="form-control @error('discount') is-invalid @enderror"
                    id="input-product-discount"
                    name="discount"
                    value="{{ old('discount') ?? $data['product']->discount }}"
                    autocomplete="off">

                @error('discount')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="input-product-stock">Estoque</label>
                <input
                    type="number"
                    min="1"
                    max="999"
                    value="{{ old('stock') ?? $data['product']->stock }}"
                    class="form-control @error('stock') is-invalid @enderror"
                    id="input-product-stock"
                    name="stock"
                    autocomplete="off">

                    @error('stock')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="input-product-size_id">Tamanho</label>
                <input
                    type="number"
                    value="{{ old('size_id') ?? $data['product']->size_id }}"
                    class="form-control @error('size_id') is-invalid @enderror"
                    id="input-product-size_id"
                    name="size_id"
                    autocomplete="off">

                @error('size_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-brand_id">Marca</label>
                <select class="form-control" name="brand_id" id="input-product-brand_id">
                    <option value="">--SELECIONE--</option>
                    @foreach ($data['brands'] as $brand)
                        @php
                            if($brand->id == $data['product']->brand_id){
                                echo "<option value='$brand->id' selected>$brand->name</option>";
                            } else {
                                echo "<option value='$brand->id'>$brand->name</option>";
                            }
                        @endphp
                    @endforeach
                </select>

                @error('brand_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-category_id">Categoria</label>
                <select class="form-control" name="category_id" id="input-product-category_id">
                    <option value="">--SELECIONE--</option>
                    @foreach ($data['categories'] as $categories)
                        @php
                            if($categories->id == $data['product']->category_id){
                                echo "<option value='$categories->id' selected>$categories->name</option>";
                            } else {
                                echo "<option value='$categories->id'>$categories->name</option>";
                            }
                        @endphp
                    @endforeach
                </select>

                @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="input-product-color_id">Cor</label>
                <input
                    type="number"
                    class="form-control @error('color_id') is-invalid @enderror"
                    id="input-product-color_id"
                    name="color_id"
                    value="{{ old('color_id') ?? $data['product']->category_id }}"
                    autocomplete="off">

                @error('color_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-12">
                <div class="custom-file">
                    <input
                        type="file"
                        class="custom-file-input @error('img') is-invalid @enderror"
                        name="img"
                        id="input-product-img"
                        value="{{ old('img') }}">
                    <label class="custom-file-label" for="input-product-img">Escolher imagem...</label>

                    @error('img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-row" style="display:grid">
            <span>Preview:</span>
            <img style="width:30%;height:auto;box-shadow: 0px 0px 20px #0000004d;margin-top:5px" src="{{ asset('storage/img/products/'.$data['product']->img) }}" alt="Imagem {{ $data['product']->name }}">
        </div>
        <button class="btn btn-success pull-right"><i class="fa fa-check-circle"></i> Editar produto</button>
    </form>
</div>

@endsection
