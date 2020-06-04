<div class="bg-color padding-b order-total">
    <div class="order-center col-md-12">
        <div class="texts pull-left">
            <span>TOTAL:</span>
            @php
                $totalPrice = 0;
                foreach ($products as $product){
                    $discount = ($product->price * $product->discount)/100;
                    $price = number_format((($product->price) - $discount), 2);
                    $totalPrice += $price;
                }
            @endphp
            <span>R$ {{ $totalPrice }}</span>
        </div>
        <div class="cart-options-buttons pull-right">
            <button class="btn btn-default" type="button">Continuar Comprando</button>
            <button class="btn btn-success" type="button">Finalizar Compra</button>
        </div>
    </div>
</div>
