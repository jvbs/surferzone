<div class="table-a">
    <table>
        <thead>
            <tr class="table-head">
                <th>PRODUTOS</th>
                <th>NOME</th>
                <th>PREÇO DO ITEM</th>
                <th>REMOVER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        <a href="{{ route('show.product.detail', $product->id) }}">
                            <img class="cart-img" src="{{ asset('storage/img/products/' . $product->img) }}" alt="item">
                        </a>
                    </td>
                    <td>
                        <ul class="items">
                            <li style="white-space:normal;text-align:center">{{ $product->name }}</li>
                        </ul>
                    </td>
                    <td>
                        @php
                            if($product->discount > 0){
                                $discount = ($product->price * $product->discount)/100;
                                echo "R$ " . number_format(($product->price - $discount), 2);
                            }
                        @endphp
                    </td>
                    <td class="icons">
                        <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" style="border-radius:30px" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
