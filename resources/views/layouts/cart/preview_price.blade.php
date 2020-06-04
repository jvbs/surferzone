<div class="bg-color padding-b order-total">
    <div class="order-center col-md-12">
        <div class="texts pull-left">
            <span>TOTAL:</span>
            @php
                $totalPrice = 0;
                foreach ($products as $product){
                    $discount = ($product->price * $product->discount)/100;
                    $price = str_replace(',', '', number_format((($product->price) - $discount), 2));
                    $totalPrice += $price;
                }
            @endphp
            <span>R$ {{ $totalPrice }}</span>
        </div>
        <div class="cart-options-buttons pull-right" style="display: flex">
            <a href="{{ route('show') }}" class="btn btn-default" style="margin-right: 5px">Continuar comprando</a>
            <form action="{{ route('admin.orders.store') }}" method="post">
                @csrf
                <input type="text" name="total" value={{ $totalPrice }} style="display: none">
                <button type="submit" class="btn btn-success" type="button">Finalizar compra</button>
            </form>
        </div>
    </div>
</div>
