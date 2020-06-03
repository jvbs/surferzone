@extends('layouts.template')

@section('title', 'Visualizar produto')

@section('content')
        <!-- INCIO MAIN-CONTENT -->
        <section id="main-content">
            <!-- INCIO SECTION-CONTAINER -->
            <div class="section-container">
                <div class="section-wrapper">
                    <!-- INICIO TOPCONTENT -->
                    @include('layouts.detail.topcontent')
                    <!-- FIM TOPCONTENT -->
                    <div class="detail-a bg-color padding-d">
                        <!-- INICIO PREVIEW -->
                        @include('layouts.detail.preview')
                        <!-- FIM PREVIEW -->

                        <!-- INICIO PREVIEW INFO -->
                        @include('layouts.detail.preview_info')
                        <!-- FIM PREVIEW INFO -->
                    </div>
                    <div class="detail-b bg-color padding-d">
                        <!-- INICIO DETAIL TABS -->
                        {{-- @include('layouts.detail.tabs') --}}
                        <!-- FIM DETAIL TABS -->
                    </div>
                </div>
            </div>
            <!-- INCIO SECTION-CONTAINER -->
        </section>
        <!-- FIM MAIN-CONTENT -->
@endsection
