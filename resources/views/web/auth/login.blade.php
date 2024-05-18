@extends('web.layout.app')
@section('title', 'Sign In')
@section('content')
    <div class="main-philosophy-section">
        <div class="contact-section">
            
            <div class="borderLeft" style="background-color: #fff"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="signin">Sign In</h2>
                        <p class="login-text letter-spacing">We offer a personal touch to customer service. If you have any enquiries or are in need on clarification on any aspect, please contact</p>
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
    <div class="container-main">
        <div class="login-box">
            <h2 class="contact-heading">Sign In</h2>
            <p class="loginformMessage" style="text-align: center;"></p>
            <div class="form-box">
                <form id="user-login" method="post" enctype="multipart/forma-data">
                    @csrf
                   <div id="before">
                    <div class="form-group" id="before-otp">
                        <label class="name-color" for="usr">Full Name*</label>
                        <input type="text" class="form-control login-input fullname" id="usr" name="fullname" required>
                        <p class="text-danger fullname"></p>
                      </div>
                      <div class="form-group">
                        <label class="name-color" for="pwd">Mobile*</label>
                        <input type="password" class="form-control login-input mobile" id="pwd" name="mobile" required>
                        <p class="text-danger mobile"></p>
                      </div>
                      <div class="button-box">
                        <div class="line"></div>
                        <button class="otp-button submitloginForm"  type="submit">GET OTP</button> 
                     
                      </div>
                   </div>
                      <div id="after">
                        <div class="form-group"  id="before-otp">
                            <label class="name-color" for="usr">OTP</label>
                            <input type="text" class="form-control login-input get_otp" id="otp-text" name="otp" required>
                            <p class="text-danger otp"></p>
                            <div class="button-box">
                                <div class="line"></div>
                              <button class="otp-button submitloginOtpForm" type="submit">SUBMIT</button>
                              </div>
                          </div>
                      </div>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('js')
    <script src="{{ asset('assets/web/js/user_login.js') }}"></script>
    <script src="{{ asset('assets/web/js/contact_us.js') }}"></script>
@endsection
