@extends('layouts.template')

@section('title', 'Início')

@section('content')
    <!-- INICIO SLIDER -->
    @include('layouts.welcome.slider')
    <!-- FIM SLIDER -->

    <!-- INICIO DIVIDER -->
    @include('layouts.welcome.divider')
    <!-- FIM DIVIDER -->

    <!-- INICIO MOSAIC -->
    @include('layouts.welcome.mosaic')
    <!-- FIM MOSAIC -->

    <!-- INICIO NEWSLETTER -->
    @include('layouts.welcome.newsletter')
    <!-- FIM NEWSLETTER -->
@endsection
