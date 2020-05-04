@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <h1>Produtos</h1>
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td><img src="{{ $product->img }}" alt=""></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @foreach ($data as $produto)

        @endforeach
    </div>
</div>

@endsection
