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
                        <div class="manufacture">
                            <h2 class="philosophy">GUEST ROOM ITEMS</h2>
                            <p class="philosophy-text">We Offer A Personal Touch To Customer Service. If You Have Any
                                Enquiries Or Are In Need On Clarification On Any Aspect, Please Contact</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="philosophy-right-box">
                <img src="{{ asset('assets/web/image/i-img1.png') }}" alt="">
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
                            <h2 class="product-heading Clients-heading">Our Products</h2>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="filter-box">
                            <h4 class="filter">Filter</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true">
                                    <span class="title">Collapsible Group Item #1 </span>
                                    <span class="accicon"><i class="fa fa-chevron-down rotate-icon"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="title">Collapsible Group Item #2</span>
                                    <span class="accicon"><i class="fa fa-chevron-down rotate-icon"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false">
                                    <span class="title">Collapsible Group Item #3</span>
                                    <span class="accicon"><i class="fa fa-chevron-down rotate-icon"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="our-products-right-section">
                            <div class="row">
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

@endsection
