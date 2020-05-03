@extends('layouts.template')

@section('title', 'Produtos')

@section('content')
<section id="main-content">
    <div class="section-container">
        <!-- INICIO TOPCONTENT -->
        @include('layouts.products.topcontent')
        <!-- FIM TOPCONTENT -->

        <div class="grid-content">
            <!-- INICIO SIDEMENU -->
            @include('layouts.products.sidemenu')
            <!-- FIM SIDEMENU -->

            <!-- INICIO GRID DE PRODUTOS -->
            @include('layouts.products.grid')
            <!-- FIM GRID DE PRODUTOS -->
        </div>
    </div>
</section>
@endsection
