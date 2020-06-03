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
        <div class="block-options">
            <label for="amount">Quantidade</label>
            <input type="number" name="amount" class="form-control" min="1" max="10" value="1">
        </div>
        <div class="block-button"><button class="button" type="button"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button></div>
    @endif
</div>
