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
                        <h2 class="philosophy">{{ $getsupSubcategory->name ?? 'DESK ACCESSORIES' }}</h2>
                        <p class="desk-text">{{ $getsupSubcategory->description ?? 'No Data Found' }}. </p>

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
            <div class="deskRoomItems-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="GuestRoomItems-image-box">
                            <img class="GuestRoomItems-image"
                                src="{{ asset($getsupSubcategory->image ?? 'assets/web/image/customisation-img.png') }}"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (count($getProducts))
            @foreach ($getProducts as $key => $getProduct)
                <div class=" @if ($key == 0) GuestServiceDirectory  @else GuestServiceBlotter @endif">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery js-gallery">
                                    <div class="gallery__hero desk-left-img-box">
                                        <img class="desk-img"
                                            src="{{ asset($getProduct->gen_image[0] ?? 'assets/web/image/guest-room/desk-img1.png') }}">
                                    </div>
                                    <div class="gallery__thumbs material-btn-box">
                                        @if (count($getProduct->gen_image))
                                            @foreach ($getProduct->gen_image as $image)
                                                {{-- <div class="column">
                                                    <img onclick="myFunction(this);" class="desk-small-img"
                                                        src="{{ asset($image ?? 'assets/web/image/guest-room/desk-img1.png') }}"
                                                        alt="image">
                                                </div> --}}
                                                <a href="{{ asset($image ?? 'assets/web/image/guest-room/desk-img1.png') }}"
                                                    data-gallery="thumb" class="is-active">
                                                    <img class="desk-small-img"
                                                        src="{{ asset($image ?? 'assets/web/image/guest-room/desk-img1.png') }}">
                                                </a>
                                            @endforeach
                                        @endif
                                        
                                    </div>
                                </div>
                                {{-- <div class="desk-left-img-box">
                                <img id="expandedImg" style="width:100%">{{ asset($getProduct->gen_image[0] ??'assets/web/image/guest-room/desk-img1.png') }}
                                <div id="imgtext">
                                    <img class="desk-img" src=""
                                        alt="image">
                                </div>

                            </div> --}}
                                {{-- <div class="material-btn-box">
                                @if (count($getProduct->gen_image))
                                    @foreach ($getProduct->gen_image as $image)
                                        <div class="column">
                                            <img onclick="myFunction(this);" class="desk-small-img"
                                                src="{{ asset($image??'assets/web/image/guest-room/desk-img1.png') }}" alt="image">
                                        </div>
                                    @endforeach
                                @endif

                            </div> --}}



                            </div>
                            <div class="col-md-6">
                                <div class="desk-right-text-box">
                                    <h3 class="guest-heading"><a
                                            href="{{ url('/product') }}/{{ $getProduct->meta_url ?? '' }}/{{ $getProduct->slug ?? '' }}">{{ $getProduct->name ?? '' }}</a>
                                    </h3>
                                    <p class="guest-text">{{ $getProduct->description ?? '' }}</p>
                                    @if (count($getProduct->material))
                                        <div class="material-box">
                                            <h4>MATERIAL</h4>
                                            <div class="material-btn-box">
                                                @foreach ($getProduct->material as $key => $material)
                                                    <button
                                                        class="material-btn @if ($key == 1)  @endif {{ $material->material }}">{{ $material->material ?? '' }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    @if (count($getProduct->color))
                                        <div class="material-box">
                                            <h4>COLOUR</h4>
                                            <div class="material-btn-box">
                                                @foreach ($getProduct->color as $key => $color)
                                                    <button
                                                        class="color-btn @if ($key == 0)  @endif {{ $color->color_name }}">{{ $color->color_name ?? '' }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    @if (count($getProduct->size))
                                        <div class="material-box">
                                            <h4>Size</h4>
                                            <div class="material-btn-box">
                                                @foreach ($getProduct->size as $key => $sizes)
                                                    <button
                                                        class="size-btn @if ($key == 0)  @endif {{ $sizes->size }}">{{ $sizes->size ?? '' }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    <div class="material-box">
                                        <h4>MINIMUM QUANTITY</h4>
                                        <div class="material-btn-box select-box">
                                            
                                            <div class="value-add-btn-box productMoqBox{{$getProduct->id}}">
                                                <button class="value-add-btn" onclick="productMoqAddon('moqSub',{{$getProduct->id}},{{$getProduct->moq}})"> – </button>
                                                <div class="value-btn">
                                                    <p class="productMoq{{$getProduct->id}}">{{ $getProduct->moq ?? '' }}</p>
                                                </div>
                                                <button class="value-add-btn" onclick="productMoqAddon('moqAdd',{{$getProduct->id}},{{$getProduct->moq}})"> + </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="material-box">
                                        <button class="add-project-btn">ADD TO PROJECT</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        @else
            @include('web.product.partial.demo_product')
        @endif
    </div>
    <!-- Include get_in_touch -->
    <div class="get-in-touch">
        @include('web.layout.partial.get_in_touch')
    </div>
    
    <script> 
        function productMoqAddon(type,productId,minMoq){
            var addonMoq = $('.productMoq'+productId).text();
            var newMoq = minMoq; 
            if(type == 'moqAdd'){ 
                if(addonMoq < minMoq){
                    addonMoq  = minMoq+1;
                }else{
                    addonMoq++;
                }
            }else if(type == 'moqSub'){
                if(minMoq < addonMoq){
                    addonMoq--;
                }else{
                    addonMoq  = minMoq;
                }
            }
            $('.productMoq'+productId).html(addonMoq);
        }
    </script>

    <script>
        $('.material-btn').on('click', function() {
            $('.material-btn').removeClass('materialActive');
            $(this).addClass('materialActive');
        });
        $('.color-btn').on('click', function() {
            $('.color-btn').removeClass('materialActive');
            $(this).addClass('materialActive');
        });
        $('.size-btn').on('click', function() {
            $('.size-btn').removeClass('materialActive');
            $(this).addClass('materialActive');
        });


        var App = (function() {
            'use strict';
            var gallery = $('.js-gallery');
            var Gallery = {
                switch: function(trigger, imgContainer) {
                    var src = trigger.attr('href'),
                        thumbs = trigger.siblings(),
                        img = trigger.parent().prev().children();
                    trigger.addClass('is-active');
                    thumbs.each(function() {
                        if ($(this).hasClass('is-active')) {
                            $(this).removeClass('is-active');
                        }
                    });
                    img.attr('src', src);
                }
            };

            function init() {
                gallery.delegate('a', 'click', function(event) {
                    var trigger = $(this);
                    var triggerData = trigger.data("gallery");
                    if (triggerData === 'zoom') {
                        var imgContainer = trigger.parent(),
                            img = trigger.siblings();
                        Gallery.zoom(imgContainer, img);
                    } else if (triggerData === 'thumb') {
                        var imgContainer = trigger.parent().siblings();
                        Gallery.switch(trigger, imgContainer);
                    } else {
                        return;
                    }
                    event.preventDefault();
                });
            }
            return {
                init: init
            };
        })();
        App.init();
    </script>
@endsection
