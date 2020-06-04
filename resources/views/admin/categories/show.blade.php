@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')
<script defer>
    $(function(){
        $("#datatable").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json",
            },
            "bInfo": false,
            "order": [[ 0, "desc" ]],
            "columnDefs": [
                { "orderable": false, "targets": 2 },
                // { "orderable": false, "targets": 3 }
            ]
        })
    })
</script>
<div class="container">
    <div class="row mb-4">
        <div class="col-1">
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary">Voltar</a>
        </div>
        <div class="col-11">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus-circle"></i> Criar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1 style="display: contents">Categorias</h1>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered compact" id="datatable">
                    <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td style="display:inline-flex;align-content:space-between">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-circle btn-md btn-warning" style="margin-right:2px"><i class="fa fa-pencil"></i></a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" onsubmit="return confirm('Você tem certeza que excluir: {{ $category->name }}?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-circle btn-md btn-danger" style="margin-left:2px"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
