@extends('layouts.template')

@section('title', 'Meu carrinho')

@section('content')
<section id="main-content">
    <div class="section-container">
        <div class="section-wrapper">
            <!-- INICIO TOP CONTENT -->
            @include('layouts.cart.topcontent')
            <!-- FIM TOP CONTENT -->

            <div class="cart-content">
            <div class="bg-color margin-b">
                <!-- INICIO TABLE -->
                @include('layouts.cart.table')
                <!-- FIM TABLE -->

                <!-- INICIO PREVIEW PRICE -->
                @include('layouts.cart.preview_price')
                <!-- FIM PREVIEW PRICE -->

            </div>
        </div>
    </div>
</section>
@endsection
