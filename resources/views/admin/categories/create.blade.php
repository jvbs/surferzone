@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1>Nova categoria</h1>
        </div>
    </div>
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-12">
                <label for="input-category-name">Nome</label>
                <input
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    id="input-category-name"
                    name="name"
                    value="{{ old('name') }}"
                    autocomplete="off">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <button class="btn btn-success pull-right"><i class="fa fa-check-circle"></i> Cadastrar</button>
    </form>
</div>

@endsection