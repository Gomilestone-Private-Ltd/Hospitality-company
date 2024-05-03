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
                        <div class="desk-left-img-box">
                            <img id="expandedImg" style="width:100%">
                            <div id="imgtext">
                                <img class="desk-img" src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}"
                                    alt="image">
                            </div>

                        </div>
                        <div class="material-btn-box">
                            <div class="column">
                                <img onclick="myFunction(this);" class="desk-small-img"
                                    src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}" alt="image">
                            </div>
                            <div class="column">
                                <img onclick="myFunction(this);" class="desk-small-img"
                                    src="{{ asset('assets/web/image/ourProces-img.png') }}" alt="image">
                            </div>
                            <div class="column">
                                <img onclick="myFunction(this);" class="desk-small-img"
                                    src="{{ asset('assets/web/image/ourProces-img3.png') }}" alt="image">
                            </div>
                            <div class="column">
                                <img onclick="myFunction(this);" class="desk-small-img"
                                    src="{{ asset('assets/web/image/ourProces-img2.png') }}" alt="image">
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
                                    <button class="material-btn">RED</button>
                                    <button class="material-btn">YELLOW</button>
                                    <button class="material-btn">GREEN</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>COLOUR</h4>
                                <div class="material-btn-box">
                                    <button class="material-btn">RED</button>
                                    <button class="material-btn">YELLOW</button>
                                    <button class="material-btn">GREEN</button>
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
                        <div class="desk-left-img-box">
                            <img class="desk-img" src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}"
                                alt="image">

                        </div>
                        <div class="material-btn-box">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">

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
                                    <button class="material-btn">RED</button>
                                    <button class="material-btn">YELLOW</button>
                                    <button class="material-btn">GREEN</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>COLOUR</h4>
                                <div class="material-btn-box">
                                    <button class="material-btn">RED</button>
                                    <button class="material-btn">YELLOW</button>
                                    <button class="material-btn">GREEN</button>
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
                        <div class="desk-left-img-box">
                            <img class="desk-img" src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}"
                                alt="image">

                        </div>
                        <div class="material-btn-box">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">

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
                                    <button class="material-btn">RED</button>
                                    <button class="material-btn">YELLOW</button>
                                    <button class="material-btn">GREEN</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>COLOUR</h4>
                                <div class="material-btn-box">
                                    <button class="material-btn">RED</button>
                                    <button class="material-btn">YELLOW</button>
                                    <button class="material-btn">GREEN</button>
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
                        <div class="desk-left-img-box">
                            <img class="desk-img" src="{{ asset('assets/web/image/guest-room/desk-img1.png') }}"
                                alt="image">

                        </div>
                        <div class="material-btn-box">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">
                            <img class="desk-small-img" src="{{ asset('assets/web/image/guest-room/desk-img.png') }}"
                                alt="image">

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
                                    <button class="material-btn">RED</button>
                                    <button class="material-btn">YELLOW</button>
                                    <button class="material-btn">GREEN</button>
                                </div>
                            </div>
                            <div class="material-box">
                                <h4>SIZE</h4>
                                <div class="material-btn-box">
                                    <button class="material-btn">SMALL</button>
                                    <button class="material-btn">MEDIUM</button>
                                    <button class="material-btn">LARGE</button>
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
