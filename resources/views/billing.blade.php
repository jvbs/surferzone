@extends('layouts.template')

@section('title', 'Checkout')

@section('content')
    <section id="main-content">
        <div class="section-container">
            <div class="section-wrapper">

                <!-- INICIO TOP CONTENT -->
                @include('layouts.billing.topcontent')
                <!-- FIM TOP CONTENT -->

                <div class="billing-content">
                    <!-- INICIO ADDRESS -->
                        @include('layouts.billing.address')
                    <!-- FIM ADDRESS -->

                    <!-- INICIO DELIVER-->
                        @include('layouts.billing.shipping')
                    <!-- FIM DELIVER -->

                    <!-- INICIO PAYMENT-->
                    @include('layouts.billing.payment')
                    <!-- FIM PAYMENT -->

                    <!-- INICIO ORDER TOTAL-->
                    @include('layouts.billing.order_total')
                    <!-- FIM ORDER TOTAL -->
                </div>
            </div>
        </div>
    </section>
@endsection
