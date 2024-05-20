@extends('web.layout.app')
@section('title', 'Account Settings')
@section('content')
    <div class="main-philosophy-section">
        <div class="contact-section">
            {{-- <div class="borderTop"></div> --}}
            <div class="borderLeft" style="background-color: #fff"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="philosophy">Hello</h2>
                        <p class="philosophy-text letter-spacing">We offer a personal touch to customer service.
                             If you have any enquiries or are in need on clarification on any aspect, please
                              contact</p>
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
    <div class="contactOpine-main-section">
        <div class="contactOpine-setion">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="tab-content" id="TabContent">
                            <div class="tab-pane fade show active contact-opine-main-section" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="account-setting">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="nav flex-column nav-pills nav-div" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active navigator" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Account settings</a>
                                                <a class="nav-link navigator" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Order history</a>
                                                <div class="arrow-img">
                                                    <img src="{{ asset('assets/web/image/Vector.png') }}" alt="">
                                                </div>
                                                <div class="arrow-img2">
                                                    <img src="{{ asset('assets/web/image/Vector.png') }}" alt="">
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-md-9">
                                           <div class="account-box">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                @include('web.customer.profile')
                                                
                                                @include('web.customer.order_history')
                                                
                                              </div>
                                           </div>
                                           
                                           
                                        </div>
                                    </div>
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

