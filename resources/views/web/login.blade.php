@extends('web.layout.app')
@section('title', 'Sign In')
@section('content')
    <div class="main-philosophy-section">
        <div class="contact-section">
            {{-- <div class="borderTop"></div> --}}
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
            <div class="form-box">
                <form>
                   <div id="before">
                    <div class="form-group" id="before-otp">
                        <label class="name-color" for="usr">Full Name*</label>
                        <input type="text" class="form-control login-input" id="usr" required>
                      </div>
                      <div class="form-group">
                        <label class="name-color" for="pwd">Mobile*</label>
                        <input type="password" class="form-control login-input" id="pwd">
                      </div>
                      <div class="button-box">
                        <div class="line"></div>
                      <button class="otp-button" onclick="toggleForm()" type="submit">GET OTP</button>
                      </div>
                   </div>
                      <div id="after">
                        <div class="form-group"  id="before-otp">
                            <label class="name-color" for="usr">OTP</label>
                            <input type="text" class="form-control login-input" id="otp-text" required>
                            <div class="button-box">
                                <div class="line"></div>
                              <button class="otp-button" type="submit">SUBMIT</button>
                              </div>
                          </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
<script>
     function toggleForm(){
        document.getElementById('before').style.display="none";
        document.getElementById('after').style.display="block";
     }
</script>

@endsection
@section('js')
    <script src="{{ asset('assets/web/js/contact_us.js') }}"></script>
@endsection
