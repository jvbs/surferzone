<div class="col-md-9 bg-color">
    <div class="product-grid row">
        @foreach ($data['produtos'] as $produto)
            <div class="col col-md-4 col-xs-6">
                <a class="product" href="detail.html">
                    <div class="product-img">
                        <div class="item">
                            <img src="{{ asset('storage/img/products/'.$produto->img) }}" alt="item">
                        </div>
                    </div>
                    <div class="name-price">
                        <h5>{{ $produto->name }}</h5>
                        @php
                            if($produto->discount > 0){
                                $discount = ($produto->price * $produto->discount)/100;
                                echo "<span>R$ ".number_format(($produto->price - $discount), 2)."</span>";
                            }
                        @endphp
                        <span>R$ {{ $produto->price }}</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="grid-pagination">
        <ul>
            <li><a class="highlight" href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="ion-chevron-right"></i></a></li>
        </ul>
    </div>
</div>
