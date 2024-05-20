@extends('web.layout.app')
@section('title', 'Cart')
@section('content')
    <div class="main-philosophy-section">
        <div class="contact-section contact-responsive">
            {{-- <div class="borderTop"></div> --}}
            <div class="borderLeft" style="background-color: #fff"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="signin">Projects</h2>
                        <p class="login-text letter-spacing">We offer a personal touch to customer service. If you have any enquiries or are in need on clarification on any aspect, please contact</p>

                    </div>
                </div>
            </div>
            <div class="philosophy-right-box">
                <img src="{{ asset('assets/web/image/i-img1.png') }}" alt="img">
            </div>
            <div class="scroll-box1">
                <a href="#about">
                    <img src="{{ asset('assets/web/image/scroll-icon2.png') }}" alt="img">
                </a>
            </div>
        </div>
    </div>
    <div class="container-main">
        <div class="cart-box">
        <div class="cart-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="image-left">
                        <img class="cart-history-img" src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image">
                        </div>
                </div>
                <div class="col-md-9">
                    <h1 class="cart-heading">GUEST SERVICE DIRECTORY</h1>
                    <div class="cart-itum">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-6">
                                <p class="cart-para">MATERIAL</p>
                                <button class="material-btn" type="button">METAL</button>
                            </div>
                            <div class="col-md-3 col-sm-3 col-6">
                                <p class="cart-para">COLOUR</p>
                                <button class="material-btn" type="button">RED</button>
                            </div>
                            <div class="col-md-5 col-sm-6 col-12">
                                <p class="cart-para">MATERIAL</p>
                                <select name="" id="">
                                    <option value="">1</option>
                                    <option value="">2</option>
    
                                </select>
                            </div>
                        </div>
                       
                    </div>
                </div>
              </div>
        </div>
        <div class="cart-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="image-left">
                        <img class="cart-history-img" src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image">
                        </div>
                </div>
                <div class="col-md-9">
                    <h1 class="cart-heading">GUEST SERVICE DIRECTORY</h1>
                    <div class="cart-itum">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-6">
                                <p class="cart-para">MATERIAL</p>
                                <button class="material-btn" type="button">METAL</button>
                            </div>
                            <div class="col-md-3 col-sm-3 col-6">
                                <p class="cart-para">COLOUR</p>
                                <button class="material-btn" type="button">RED</button>
                            </div>
                            <div class="col-md-5 col-sm-6 col-12">
                                <p class="cart-para">MATERIAL</p>
                                <select name="" id="">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                       
                    </div>
                </div>
              </div>
        </div>
        <div class="request-btn">
            <button class="proposal-btn" type="button">REQUEST PROPOSAL</button>
        </div>
        </div>
    </div>


@endsection
@section('js')
    <script src="{{ asset('assets/web/js/contact_us.js') }}"></script>
@endsection
