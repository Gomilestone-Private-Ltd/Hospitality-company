@extends('web.layout.app')
@section('title','Opine')
@section('content')
    
    <!-- Include Slider -->
    @include('web.layout.partial.slider')
    
    <!-- Include About Us -->
    @include('web.layout.partial.about')

    <!-- Include Product -->
    @include('web.layout.partial.product')

    <!-- Include Restaurant -->
    @include('web.layout.partial.restaurant')

    <!-- Include get_in_touch -->
    @include('web.layout.partial.get_in_touch')
    
@endsection