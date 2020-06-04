@extends('layouts.admin')

@section('content')
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
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-bottom:35px">
            <h1>Histórico de Pedidos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped compact" id="datatable" style="margin-top: 25px">
                <thead>
                    <th scope="col"># Pedido</th>
                    <th scope="col">Data</th>
                    <th scope="col">Valor total</th>
                    <th scope="col">Pagamento</th>
                    <th scope="col">Estado</th>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>R$ {{ $order->total }}</td>
                            <td>Cartão de Crédito final {{ rand(1000, 9999) }}</td>
                            <td>
                                <span class="badge badge-success">{{ strtoupper($order->status) }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
