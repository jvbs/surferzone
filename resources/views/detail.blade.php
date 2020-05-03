@extends('layouts.template')

@section('title', 'Visualizar produto')

@section('content')
        <!-- START MAIN-CONTENT -->
        <section id="main-content">
            <!-- START SECTION-CONTAINER -->
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
                        @include('layouts.detail.detail_tabs')
                        <!-- FIM DETAIL TABS -->
                    </div>
                </div>
            </div>
        </section>
@endsection
