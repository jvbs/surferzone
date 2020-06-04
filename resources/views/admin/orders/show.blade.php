@extends('layouts.admin')

@section('content')
<script defer>
    $(function(){
        $("#datatable").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json",
            },
            "bInfo": false,
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
                    <tr>
                        <th scope="col">Referência do pedido</th>
                        <th scope="col">Data</th>
                        <th scope="covv">Valovvr total</th>
                        <th scope="col">Pagamento</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a>SMSNOLQVJ<a></th>
                            <td>26-09-2017</td>
                        <td>R$ 156,10</td>
                        <td>Boleto Itau</td>
                        <td>Enviado</td>
                    </tr>
                    <tr>
                        <th scope="row"><a>YECQZOWDG<a></th>
                            <td>31-10-2018</td>
                            <td>R$ 201,28</td>
                            <td>Mercado Pago - Boleto</td>
                            <td>Enviado</td>
                        </tr>
                        <tr>
                            <th scope="row"><a>EEAHOVTEC<a></th>
                                <td>27-05-2019</td>
                                <td>R$ 133,71</td>
                                <td>Mercado Pago - Cartão de Crédito</td>
                                <td>Cancelado</td>
                            </tr>
                            <tr>
                                <th scope="row"><a>EZTEWOVAP<a></th>
                                    <td>27-05-2019</td>
                                    <td>R$ 529,23</td>
                                    <td>Depósito com desconto</td>
                                    <td>Cancelado</td>
                    </tr>
                    <tr>
                        <th scope="row"><a>EBGMZROWK<a></th>
                        <td>27-05-2019</td>
                        <td>R$ 133,71</td>
                        <td>Mercado Pago - Boleto</td>
                        <td>Enviado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
