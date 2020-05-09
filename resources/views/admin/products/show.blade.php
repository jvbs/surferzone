@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1 style="display: contents">Produtos</h1>
            <a href="{{ route('admin.products.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Criar</a>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered compact" id="datatable">
                    <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Desconto</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                        {{-- <th>Imagem</th> --}}
                    </thead>
                    <tbody>
                        @foreach ($data as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->discount*100 }}%</td>
                                <td>{{ $product->description }}</td>
                                <td style="display:inline-flex;align-content:space-between">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-circle btn-md btn-warning" style="margin-right:2px"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-circle btn-md btn-danger" style="margin-left:2px"><i class="fa fa-trash"></i></a>
                                </td>
                                {{-- <td><img src="{{ $product->img }}" alt=""></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
