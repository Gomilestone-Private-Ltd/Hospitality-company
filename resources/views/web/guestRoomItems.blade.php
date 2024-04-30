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
                        <h2 class="philosophy">GUEST ROOM ITEMS</h2>
                        <p class="philosophy-text letter-spacing">We Offer A Personal Touch To Customer Service. If You Have
                            Any
                            Enquiries Or Are In Need On Clarification On Any Aspect, Please Contact</p>

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
                            <img class="GuestRoomItems-image" src="{{ asset('assets/web/image/customisation-img.png') }}"
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
                        <div class="accordion" id="accordionFilter">
                            <div class="card accordion-card-box">
                                <div class="card-header arrordion-header" data-toggle="collapse" data-target="#SizeFilter"
                                    aria-expanded="true">
                                    <span class="accordion-title">Size</span>
                                    <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div id="SizeFilter" class="collapse show" data-parent="#accordionFilter">
                                    <div class="card-body accrodion-card-body">
                                        <form action="">
                                            <div class="check-box">
                                                <input type="checkbox" id="Size" name="Size">
                                                <p>I have a bike</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Size" name="Size">
                                                <p>I have a car</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Size" name="Size">
                                                <p>I have a boat</p><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-card-box">
                                <div class="card-header arrordion-header collapsed" data-toggle="collapse"
                                    data-target="#ColourFilter" aria-expanded="false" aria-controls="ColourFilter">
                                    <span class="accordion-title">Colour</span>
                                    <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div id="ColourFilter" class="collapse" data-parent="#accordionFilter">
                                    <div class="card-body accrodion-card-body">
                                        <form action="">
                                            <div class="check-box">
                                                <input type="checkbox" id="Colour" name="Colour">
                                                <p>Red</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Colour" name="Colour">
                                                <p>Beige</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Colour" name="Colour">
                                                <p>Black</p><br>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Colour" name="Colour">
                                                <p>Blue</p><br>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Colour" name="Colour">
                                                <p>Cream</p><br>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Colour" name="Colour">
                                                <p>Grey</p><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-card-box">
                                <div class="card-header arrordion-header collapsed" data-toggle="collapse"
                                    data-target="#MaterialFilter" aria-expanded="false">
                                    <span class="accordion-title">Material</span>
                                    <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div id="MaterialFilter" class="collapse" data-parent="#accordionFilter">
                                    <div class="card-body accrodion-card-body">
                                        <form action="">
                                            <div class="check-box">
                                                <input type="checkbox" id="Material" name="Material">
                                                <p>I have a bike</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Material" name="Material">
                                                <p>I have a car</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Material" name="Material">
                                                <p>I have a boat</p><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-card-box">
                                <div class="card-header arrordion-header collapsed" data-toggle="collapse"
                                    data-target="#AreaFilter" aria-expanded="false">
                                    <span class="accordion-title">Area of Use</span>
                                    <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div id="AreaFilter" class="collapse" data-parent="#accordionFilter">
                                    <div class="card-body accrodion-card-body">
                                        <form action="">
                                            <div class="check-box">
                                                <input type="checkbox" id="Area" name="Area">
                                                <p>I have a bike</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Area" name="Area">
                                                <p>I have a car</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Area" name="Area">
                                                <p>I have a boat</p><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-card-box">
                                <div class="card-header arrordion-header collapsed" data-toggle="collapse"
                                    data-target="#IdealFilter" aria-expanded="false">
                                    <span class="accordion-title">Ideal for</span>
                                    <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div id="IdealFilter" class="collapse" data-parent="#accordionFilter">
                                    <div class="card-body accrodion-card-body">
                                        <form action="">
                                            <div class="check-box">
                                                <input type="checkbox" id="Ideal" name="Ideal">
                                                <p>Boutique Hotel</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Ideal" name="Ideal">
                                                <p>Business Hotel</p>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="Ideal" name="Ideal">
                                                <p>Luxury Hotel</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <div class="our-products-right-section">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="dropdown dropdown-box">
                                        <button type="button" class="dropdown-toggle drop-btn" data-toggle="dropdown">
                                            Sorting
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="our-product-right-img-box">
                                        <img class="our-product-img"
                                            src="{{ asset('assets/web/image/guest-room/guest-room-img.png') }}"
                                            alt="image">
                                        <p class="our-product-text">GUEST SERVICE DIRECTORY</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="our-product-right-img-box">
                                        <img class="our-product-img"
                                            src="{{ asset('assets/web/image/guest-room/guest-room-img.png') }}"
                                            alt="image">
                                        <p class="our-product-text">GUEST SERVICE DIRECTORY</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="our-product-right-img-box">
                                        <img class="our-product-img"
                                            src="{{ asset('assets/web/image/guest-room/guest-room-img.png') }}"
                                            alt="image">
                                        <p class="our-product-text">GUEST SERVICE DIRECTORY</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="our-product-right-img-box">
                                        <img class="our-product-img"
                                            src="{{ asset('assets/web/image/guest-room/guest-room-img.png') }}"
                                            alt="image">
                                        <p class="our-product-text">GUEST SERVICE DIRECTORY</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="our-product-right-img-box">
                                        <img class="our-product-img"
                                            src="{{ asset('assets/web/image/guest-room/guest-room-img.png') }}"
                                            alt="image">
                                        <p class="our-product-text">GUEST SERVICE DIRECTORY</p>
                                    </div>
                                </div>
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
@endsection
