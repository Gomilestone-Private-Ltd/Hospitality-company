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
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                  <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 text-center p-0">
                                                        <div class="our-product setting-box" style="border-right: none">
                                                            <h2 class="product-heading setting-heading">Account settings
                                                            </h2>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="account-main">
                                                    <h1 class="Personal-text">Personal details</h1>
                                                   
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-box">
                                                                <form>
                                                                    <div class="form-group" id="before-otp">
                                                                        <label class="name-color" for="usr">Full Name*</label>
                                                                        <input type="text" class="form-control login-input" id="usr" required>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label class="name-color" for="pwd">Mobile*</label>
                                                                        <input type="password" class="form-control login-input" id="pwd">
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label class="name-color" for="pwd">Email - Id </label>
                                                                        <input type="email" class="form-control login-input" id="">
                                                                      </div>
                                                                      <div class="submit-button">
                                                                        <div class="line"></div>
                                                                      <button class="otp-button" type="submit">Update</button>
                                                                      </div>
                                                                    </div>
                                                                      
                                                                </form>
                                            
                                                        </div>
                                                    </div>
                                                   </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                   <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 text-center p-0">
                                                        <div class="our-product setting-box" style="border-right: none">
                                                            <h2 class="product-heading order-history">Order history
                                                            </h2>
                                                        </div>
                                                    </div>
                                                   </div>
                                                    <div class="order-histroy-box">
                                                       <div class="order-history-content">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="image-left">
                                                                    <img class="order-history-img" src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image">
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="order-history-text">
                                                                    <h1 class="history-heding">GUEST SERVICE DIRECTORY</h1>
                                                                    <div class="oredr-date">
                                                                        <p class="bill-number">#00001</p>
                                                                        <p class="date">01-05-2024</p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="material">
                                                                                <h1 class="mt-heading">MATERIAL </h1>
                                                                                <p class="mt-text">LEATHERETTE</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="material">
                                                                                <h1 class="mt-heading">COLOUR </h1>
                                                                                <p class="mt-text">RED</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="material">
                                                                                <h1 class="mt-heading">SIZE </h1>
                                                                                <p class="mt-text">BIG</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="">
                                                                                <h1 class="mt-heading">MOQ </h1>
                                                                                <p class="mt-text">10 pcs</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       </div>
                                                    </div>
                                                    <div class="order-histroy-box2">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="image-left">
                                                                    <img class="order-history-img" src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image">
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="order-history-text">
                                                                    <h1 class="history-heding">GUEST SERVICE DIRECTORY</h1>
                                                                    <div class="oredr-date">
                                                                        <p class="bill-number">#00001</p>
                                                                        <p class="date">01-05-2024</p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="material">
                                                                                <h1 class="mt-heading">MATERIAL </h1>
                                                                                <p class="mt-text">LEATHERETTE</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="material">
                                                                                <h1 class="mt-heading">COLOUR </h1>
                                                                                <p class="mt-text">RED</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="material">
                                                                                <h1 class="mt-heading">SIZE </h1>
                                                                                <p class="mt-text">BIG</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="">
                                                                                <h1 class="mt-heading">MOQ </h1>
                                                                                <p class="mt-text">10 pcs</p>
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
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
@section('js')
    <script src="{{ asset('assets/web/js/contact_us.js') }}"></script>
@endsection
