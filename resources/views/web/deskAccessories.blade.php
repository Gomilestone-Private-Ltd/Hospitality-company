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
                        <h2 class="philosophy">DESK ACCESSORIES</h2>
                        <p class="desk-text">Our artisanal techniques enable us to craft luxurious,
                            contemporary accessories with a focus on functionality. The line of desk accessories are
                            customized to complement the brand’s required size and aesthetics through handpicked
                            textures, materials and hues as well as logo personalization including embossed, engraved or
                            printed logo and taglines. </p>

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
                            <img class="GuestRoomItems-image" src="{{ asset('assets/web/image/customisation-img.png') }}"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="GuestServiceDirectory">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="gallery js-gallery">
                            <div class="gallery__hero desk-left-img-box">
                                <img class="desk-img" src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}">
                            </div>
                            <div class="gallery__thumbs material-btn-box">
                                <a href="{{ asset('assets/web/image/guest-room/desk-img1.png') }}" data-gallery="thumb"
                                    class="is-active">
                                    <img class="desk-small-img"
                                        src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}">
                                </a>
                                <a href="{{ asset('assets/web/image/ourProces-img3.png') }}" data-gallery="thumb">
                                    <img class="desk-small-img" src="{{ asset('assets/web/image/ourProces-img3.png') }}">
                                </a>
                                <a href="{{ asset('assets/web/image/ourProces-img2.png') }}" data-gallery="thumb">
                                    <img class="desk-small-img" src="{{ asset('assets/web/image/ourProces-img2.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="desk-right-text-box">
                            <h3 class="guest-heading">GUEST SERVICE DIRECTORY</h3>
                            <p class="guest-text">Our artisanal techniques enable us to craft luxurious, contemporary
                                accessories with a focus
                                on functionality. The line of desk accessories are customized to complement the brand’s
                                required size and aesthetics through handpicked textures, materials and hues as well as logo
                                personalization including embossed, engraved or printed logo and taglines.
                            </p>

                            <div class="material-box">
                                <h4>MATERIAL</h4>
                                <div class="material-btn-box">
                                    <button class="material-btn">LEATHERETTE</button>
                                    <button class="material-btn">METAL</button>
                                    <button class="material-btn">WOOD</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>COLOUR</h4>
                                <div class="material-btn-box">
                                    <button class="color-btn">RED</button>
                                    <button class="color-btn">YELLOW</button>
                                    <button class="color-btn">GREEN</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>SIZE</h4>
                                <div class="material-btn-box">
                                    <button class="size-btn">Small</button>
                                    <button class="size-btn">Large</button>
                                    <button class="size-btn">Medium</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>MINIMUM QUANTITY</h4>
                                <div class="material-btn-box select-box">
                                    <select name="" id="">
                                        <option value="">500-1000</option>
                                        <option value="">500-1000</option>
                                        <option value="">500-1000</option>
                                    </select>
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
        <div class="GuestServiceBlotter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="gallery js-gallery">
                            <div class="gallery__hero desk-left-img-box">
                                <img class="desk-img" src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}">
                            </div>
                            <div class="gallery__thumbs material-btn-box">
                                <a href="{{ asset('assets/web/image/guest-room/desk-img1.png') }}" data-gallery="thumb"
                                    class="is-active">
                                    <img class="desk-small-img"
                                        src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}">
                                </a>
                                <a href="{{ asset('assets/web/image/ourProces-img3.png') }}" data-gallery="thumb">
                                    <img class="desk-small-img" src="{{ asset('assets/web/image/ourProces-img3.png') }}">
                                </a>
                                <a href="{{ asset('assets/web/image/ourProces-img2.png') }}" data-gallery="thumb">
                                    <img class="desk-small-img" src="{{ asset('assets/web/image/ourProces-img2.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="desk-right-text-box">
                            <h3 class="guest-heading">DESK BLOTTER</h3>
                            <p class="guest-text">Our artisanal techniques enable us to craft luxurious, contemporary
                                accessories with a focus
                                on functionality. The line of desk accessories are customized to complement the brand’s
                                required size and aesthetics through handpicked textures, materials and hues as well as logo
                                personalization including embossed, engraved or printed logo and taglines.
                            </p>

                            <div class="material-box">
                                <h4>MATERIAL</h4>
                                <div class="material-btn-box">
                                    <button class="material-btn">LEATHERETTE</button>
                                    <button class="material-btn">METAL</button>
                                    <button class="material-btn">WOOD</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>COLOUR</h4>
                                <div class="material-btn-box">
                                    <button class="color-btn">RED</button>
                                    <button class="color-btn">YELLOW</button>
                                    <button class="color-btn">GREEN</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>SIZE</h4>
                                <div class="material-btn-box">
                                    <button class="size-btn">Small</button>
                                    <button class="size-btn">Large</button>
                                    <button class="size-btn">Medium</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>MINIMUM QUANTITY</h4>
                                <div class="material-btn-box select-box">
                                    <select name="" id="">
                                        <option value="">500-1000</option>
                                        <option value="">500-1000</option>
                                        <option value="">500-1000</option>
                                    </select>
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
        <div class="GuestServiceBlotter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="gallery js-gallery">
                            <div class="gallery__hero desk-left-img-box">
                                <img class="desk-img" src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}">
                            </div>
                            <div class="gallery__thumbs material-btn-box">
                                <a href="{{ asset('assets/web/image/guest-room/desk-img1.png') }}" data-gallery="thumb"
                                    class="is-active">
                                    <img class="desk-small-img"
                                        src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}">
                                </a>
                                <a href="{{ asset('assets/web/image/ourProces-img3.png') }}" data-gallery="thumb">
                                    <img class="desk-small-img" src="{{ asset('assets/web/image/ourProces-img3.png') }}">
                                </a>
                                <a href="{{ asset('assets/web/image/ourProces-img2.png') }}" data-gallery="thumb">
                                    <img class="desk-small-img" src="{{ asset('assets/web/image/ourProces-img2.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="desk-right-text-box">
                            <h3 class="guest-heading">TISSUE BOX HOLDER</h3>
                            <p class="guest-text">Our artisanal techniques enable us to craft luxurious, contemporary
                                accessories with a focus
                                on functionality. The line of desk accessories are customized to complement the brand’s
                                required size and aesthetics through handpicked textures, materials and hues as well as logo
                                personalization including embossed, engraved or printed logo and taglines.
                            </p>

                            <div class="material-box">
                                <h4>MATERIAL</h4>
                                <div class="material-btn-box">
                                    <button class="material-btn">LEATHERETTE</button>
                                    <button class="material-btn">METAL</button>
                                    <button class="material-btn">WOOD</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>COLOUR</h4>
                                <div class="material-btn-box">
                                    <button class="color-btn">RED</button>
                                    <button class="color-btn">YELLOW</button>
                                    <button class="color-btn">GREEN</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>SIZE</h4>
                                <div class="material-btn-box">
                                    <button class="size-btn">Small</button>
                                    <button class="size-btn">Large</button>
                                    <button class="size-btn">Medium</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>MINIMUM QUANTITY</h4>
                                <div class="material-btn-box select-box">
                                    <select name="" id="">
                                        <option value="">500-1000</option>
                                        <option value="">500-1000</option>
                                        <option value="">500-1000</option>
                                    </select>
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
        <div class="GuestServiceBlotter WASTEBIN">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="gallery js-gallery">
                            <div class="gallery__hero desk-left-img-box">
                                <img class="desk-img" src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}">
                            </div>
                            <div class="gallery__thumbs material-btn-box">
                                <a href="{{ asset('assets/web/image/guest-room/desk-img1.png') }}" data-gallery="thumb"
                                    class="is-active">
                                    <img class="desk-small-img"
                                        src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}">
                                </a>
                                <a href="{{ asset('assets/web/image/ourProces-img3.png') }}" data-gallery="thumb">
                                    <img class="desk-small-img" src="{{ asset('assets/web/image/ourProces-img3.png') }}">
                                </a>
                                <a href="{{ asset('assets/web/image/ourProces-img2.png') }}" data-gallery="thumb">
                                    <img class="desk-small-img" src="{{ asset('assets/web/image/ourProces-img2.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="desk-right-text-box">
                            <h3 class="guest-heading">WASTEBIN</h3>
                            <p class="guest-text">Our artisanal techniques enable us to craft luxurious, contemporary
                                accessories with a focus
                                on functionality. The line of desk accessories are customized to complement the brand’s
                                required size and aesthetics through handpicked textures, materials and hues as well as logo
                                personalization including embossed, engraved or printed logo and taglines.
                            </p>

                            <div class="material-box">
                                <h4>MATERIAL</h4>
                                <div class="material-btn-box">
                                    <button class="material-btn">LEATHERETTE</button>
                                    <button class="material-btn">METAL</button>
                                    <button class="material-btn">WOOD</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>COLOUR</h4>
                                <div class="material-btn-box">
                                    <button class="color-btn">RED</button>
                                    <button class="color-btn">YELLOW</button>
                                    <button class="color-btn">GREEN</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>SIZE</h4>
                                <div class="material-btn-box">
                                    <button class="size-btn">Small</button>
                                    <button class="size-btn">Large</button>
                                    <button class="size-btn">Medium</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>MINIMUM QUANTITY</h4>
                                <div class="material-btn-box select-box">
                                    <select name="" id="">
                                        <option value="">500-1000</option>
                                        <option value="">500-1000</option>
                                        <option value="">500-1000</option>
                                    </select>
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
    </div>
    <!-- Include get_in_touch -->
    <div class="get-in-touch">
        @include('web.layout.partial.get_in_touch')
    </div>

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
