@extends('web.layout.app')
@section('title', 'Opine')
@section('content')
    <div class="main-philosophy-section">
        <div class="contact-section">
            {{-- <div class="borderTop"></div> --}}
            <div class="borderLeft" style="background-color: #fff"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="philosophy">{{$getSubcategory->name ??''}}</h2>
                        <p class="philosophy-text letter-spacing">{{$getSubcategory->description ??''}}</p>
                    </div>
                </div>
            </div>
            <div class="philosophy-right-box">
                <img src="{{ asset('assets/web/image/i-img1.png') }}" alt="">
            </div>
            <div class="scroll-box1">
                <a href="#about">
                    <img src="{{ asset('assets/web/image/scroll-icon2.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="GuestRoomItems-main-section">
        <div class="container">
            <div class="GuestRoomItems-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="GuestRoomItems-image-box">
                            <img class="GuestRoomItems-image" src="{{ asset($getSubcategory->image ??'assets/web/image/customisation-img.png') }}"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-md-12 text-center p-0">
                        <div class="our-product our-proces-box" style="border-right: none">
                            <h2 class="product-heading">Our Products</h2>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="filter-box">
                            <h4 class="filter">Filter</h4>
                        </div>
                        @include('web.product.partial.filter')
                    </div>
                    <div class="col-md-9">

                        <div class="our-products-right-section">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <select name="" id="" class="drop-btn">
                                        <option>Sorting</option>
                                        <option value="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/RECOMMENDED">Recommended</option>
                                        <option value="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/ASC">Name A To Z</option>
                                        <option value="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/DESC">Name Z To A</option>
                                        <option value="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/PRICELOWTOHIGH">Price Low To High</option>
                                        <option value="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/PRICEHIGHTOLOW">Price High To Low</option>
                                        <option value="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/NEWIN">New In</option>
                                    </select>
                                    {{-- <div class="dropdown dropdown-box">
                                        <button type="button" class="dropdown-toggle drop-btn" data-toggle="dropdown">
                                            Sorting
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/RECOMMENDED">Recommended </a>
                                            <a class="dropdown-item" href="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/ASC">Name A To Z</a>
                                            <a class="dropdown-item" href="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/DESC">Name Z To A</a>
                                            <a class="dropdown-item" href="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/PRICELOWTOHIGH">Price Low To High</a>
                                            <a class="dropdown-item" href="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/PRICEHIGHTOLOW">Price High To Low</a>
                                            <a class="dropdown-item" href="{{url('/category')}}/{{$getSubcategory->meta_url ??''}}/{{$getSubcategory->slug ??''}}/NEWIN">New In</a>
                                        </div>
                                    </div> --}}
                                </div>
                                @if(count($getProducts))
                                    @foreach($getProducts as $getProduct)
                                    <div class="col-md-4">
                                        <div class="our-product-right-img-box">
                                            <img class="our-product-img"
                                                src="{{ asset($getProduct->gen_image[0] ??'assets/web/image/guest-room/guest-room-img.png') }}"
                                                alt="image">
                                            <a href="{{url('/product')}}/{{$getProduct->meta_url ??''}}/{{$getProduct->slug ??''}}" class="our-product-text">{{$getProduct->name ??''}}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                @endif
                            </div>
                            @if(count($getProducts))
                               {!! $getProducts->links() !!} 
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include get_in_touch -->
    <div class="get-in-touch">
        @include('web.layout.partial.get_in_touch')
    </div>
  

@endsection