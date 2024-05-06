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
                        <h2 class="philosophy">{{$getsupSubcategory->name ??'DESK ACCESSORIES'}}</h2>
                        <p class="desk-text">{{$getsupSubcategory->description ??'No Data Found'}}. </p>

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
                            <img class="GuestRoomItems-image" src="{{ asset($getsupSubcategory->image ??'assets/web/image/customisation-img.png') }}"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(count($getProducts))
           @foreach($getProducts as $key=> $getProduct)
            <div class=" @if($key == 0) GuestServiceDirectory  @else GuestServiceBlotter @endif" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="desk-left-img-box">
                                <img id="expandedImg" style="width:100%">
                                <div id="imgtext">
                                    <img class="desk-img" src="{{ asset($getProduct->gen_image[0] ??'assets/web/image/guest-room/desk-img1.png') }}"
                                        alt="image">
                                </div>

                            </div>
                            <div class="material-btn-box">
                                @if(count($getProduct->gen_image))
                                    @foreach($getProduct->gen_image as $image)
                                        <div class="column">
                                            <img onclick="myFunction(this);" class="desk-small-img"
                                                src="{{ asset($image??'assets/web/image/guest-room/desk-img1.png') }}" alt="image">
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            


                        </div>
                        <div class="col-md-6">
                            <div class="desk-right-text-box">
                                <h3 class="guest-heading"><a href="{{url('/product')}}/{{$getProduct->meta_url ??''}}/{{$getProduct->slug ??''}}">{{$getProduct->name ??''}}</a></h3>
                                <p class="guest-text">{{$getProduct->description ??''}}</p>
                                @if(count($getProduct->material))
                                    <div class="material-box">
                                        <h4>MATERIAL</h4>
                                        <div class="material-btn-box">
                                            @foreach($getProduct->material as $key=>$material)
                                                <a href="#" class="material-btn @if($key == 1) materialActive @endif {{$material->material}}">{{$material->material ??''}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                
                                @if(count($getProduct->color))
                                <div class="material-box">
                                    <h4>COLOUR</h4>
                                    <div class="material-btn-box">
                                    @foreach($getProduct->color as $key=>$color)
                                        <a href="" class="material-btn @if($key == 0) materialActive @endif {{$color->color_name}}">{{$color->color_name ??''}}</a>
                                    @endforeach
                                    </div>
                                </div>
                                @endif
                                 
                                @if(count($getProduct->size))
                                    <div class="material-box">
                                        <h4>Size</h4>
                                        <div class="material-btn-box">
                                            @foreach($getProduct->size as $key=>$sizes)
                                            <a href="" class="material-btn @if($key == 0) materialActive @endif {{$sizes->size}}">{{$sizes->size ??''}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <div class="material-box">
                                    <h4>MINIMUM QUANTITY</h4>
                                    <div class="material-btn-box select-box">
                                        {{$getProduct->moq ??''}}
                                        <!-- <select name="" id="">
                                            <option value="">500-1000</option>
                                            <option value="">500-1000</option>
                                            <option value="">500-1000</option>
                                        </select> -->
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
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = "";
            expandImg.parentElement.style.display = "block";
            document.getElementById("expandedImg").style.display = "block";
        }

        $('.material-btn').on('click', function() {
            $('button').removeClass('materialActive');
            $(this).addClass('materialActive');
        });
    </script>
@endsection
