<div class="col-md-6">
    <div class="block-name-price">
        <h2>{{ $data->name }}</h2>
        @php
            if($data->discount > 0){
                $discount = ($data->price * $data->discount)/100;
                echo "<span>R$ ".number_format(($data->price - $discount), 2)."</span>";
            }
        @endphp
        <span>R$ {{ $data->price }}</span>
    </div>
    <div class="block-stock">
        Disponibilidade:
        @if($data->stock > 0)
            <span class="has-stock">Em estoque</span>
        @else
            <span class="has-no-stock">Fora de estoque</span>
        @endif
    </div>
    <div class="block-text" style="margin-top:12px">
        <strong>Descrição</strong>
        <p>{{ $data->description }}</p>
    </div>
    @if($data->stock > 0)
        <form action="{{ route('cart.store', $data->id) }}" method="POST">
            @csrf
            <div class="block-button">
                <button class="button" type="submit"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
            </div>
        </form>
    @endif
</div>
