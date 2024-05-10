@extends('web.layout.app')
@section('title', 'Contact Us')
@section('content')
    <div class="main-philosophy-section">
        <div class="contact-section">
            {{-- <div class="borderTop"></div> --}}
            <div class="borderLeft" style="background-color: #fff"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="philosophy">CONTACT US</h2>
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
    <div class="contactOpine-main-section">
        <div class="contactOpine-setion">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item tab-con" role="presentation">
                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">CONTACT
                                    OPINE</button>
                            </li>

                            <li class="nav-item tab-mE" role="presentation">
                                <button class="nav-link " id="profile-tab" data-toggle="tab" data-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">HAVE OPINE
                                    CONTACT ME</button>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="tab-content" id="TabContent">
                            <div class="tab-pane fade show active contact-opine-main-section" id="home" role="tabpanel"
                                aria-labelledby="home-tab">

                                <div class="QueriesInIndia-box">
                                    <div class="manufacture">
                                        <div class="row mb-5">
                                            <div class="col-md-12 col-sm-12 col-12 text-center p-0">
                                                <div class="our-product Queries-box" style="border-right: none">
                                                    <h2 class="product-heading Queries-heading">For Queries In
                                                        India
                                                    </h2>

                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4 col-sm-6 col-6">
                                                <div class="QueriesIndia-img">
                                                    <img src="{{ asset('assets/web/image/user-img3.png') }}" alt="image">
                                                    <h4>Michelle Luzzi</h4>
                                                    <p>Sr. Sales Manager</p>
                                                    <p class="QueriesIndia-email">Michelle@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-6">
                                                <div class="QueriesIndia-img">
                                                    <img src="{{ asset('assets/web/image/user-img.png') }}" alt="image">
                                                    <h4>Cherylee Cruz</h4>
                                                    <p>Sales Manager</p>
                                                    <p class="QueriesIndia-email">Charylee@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 text-center p-0">
                                                <div class="our-product Queries-box" style="border-right: none">
                                                    <h2 class="product-heading Queries-heading">For Queries In
                                                        Dubai
                                                    </h2>

                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4 col-sm-6 col-6">
                                                <div class="QueriesIndia-img">
                                                    <img src="{{ asset('assets/web/image/user-img1.png') }}" alt="image">
                                                    <h4>John Eilers</h4>
                                                    <p>Sales Director</p>
                                                    <p class="QueriesIndia-email">John@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-6">
                                                <div class="QueriesIndia-img">
                                                    <img src="{{ asset('assets/web/image/user-img2.png') }}" alt="image">
                                                    <h4>Kaitlyn Kynerd</h4>
                                                    <p>Sales Manager</p>
                                                    <p class="QueriesIndia-email">Kaityly@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                    <div class="CustomerService">
                                        <div class="manufacture">
                                            <div class="row mb-5">
                                                <div class="col-md-12 col-sm-12 col-12 text-center p-0">
                                                    <div class="our-product our-proces-box" style="border-right: none">
                                                        <h2 class="product-heading CustomerService-heading">
                                                            Customer
                                                            Service
                                                        </h2>
                                                        <p class="text1">We offer a personal touch to customer
                                                            service.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="call-box1">
                                                        <img src="{{ asset('assets/web/image/call-icon.png') }}"
                                                            alt="">
                                                        <div class="call-nu-box">
                                                            <a class="call-text-box" href="tel:+91 124 4222424"><img
                                                                    src="{{ asset('assets/web/image/india-logo.png') }}"
                                                                    alt="logo">
                                                                +91 124 4222424 (INDIA)</a>
                                                            <a class="call-text-box" href="tel:+971 55 1532259"><img
                                                                    src="{{ asset('assets/web/image/UAE-logo.png') }}"
                                                                    alt="logo"> +971 55 1532259 (UAE)</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="call-box1">
                                                        <img src="{{ asset('assets/web/image/message-icon.png') }}"
                                                            alt="">
                                                        <div>
                                                            <a
                                                                href="mailto:opinelifestyles.india@gmail.com">Opinelifestyles.India@Gmail.Com</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="call-box1">
                                                        <img class="whatsapp-icon"
                                                            src="{{ asset('assets/web/image/whatsApp-icon.png') }}"
                                                            alt="image">
                                                        <div>
                                                            <a href="mailto:opinelifestyles.india@gmail.com">Chat
                                                                on
                                                                WhatsApp</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade Have-opine-contact-main-section" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">

                                <div class="QueriesInIndia-box">
                                    <div class="manufacture">
                                        <div class="row mb-md-5">
                                            <div class="col-md-12 text-center p-0">
                                                <div class="our-product Queries-box" style="border-right: none">
                                                    <h2 class="product-heading CustomerService-heading">Leave A
                                                        Message
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-success contactSuccessMessage" style="text-align:center;"></p>
                                        <p class="text-danger contactErrorMessage" style="text-align:center;"></p>
                                        <form id="queryForm" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Company Name*</h4>
                                                        <input type="text" name="company" id="company">
                                                        <p class="text-danger company"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Type of Company*</h4>
                                                        <select name="company_type" id="">
                                                            <option id="hideOption">Select Company</option>
                                                            <option value="Company 1">Company 1</option>
                                                            <option value="Company 2">Company 2</option>
                                                            <option value="Company 3">Company 3</option>
                                                        </select>
                                                        <p class="text-danger company_type"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Full Name*</h4>
                                                        <input type="name" name="full_name" id="name">
                                                        <p class="text-danger full_name"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Email*</h4>
                                                        <input type="email" name="c_email" id="email">
                                                        <p class="text-danger c_email"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Phone Number*</h4>
                                                        <select name="phone_number" id="">
                                                            <option id="hideOption1">Select Number</option>
                                                            <option value="+91 124 4222424">+91 124 4222424</option>
                                                            <option value="+971 55 1532259">+971 55 1532259</option>
                                                        </select>
                                                        <p class="text-danger phone_number"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Job Title*</h4>
                                                        <input type="text" name="job_title" id="job">
                                                        <p class="text-danger job_title"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>What Role Best Describes You?</h4>
                                                        <select name="role_describes" id="describes">
                                                            <option id="hideOption2">Select Describes</option>
                                                            <option value="Describes 1">Describes 1</option>
                                                            <option value="Describes 2">Describes 2</option>
                                                            <option value="Describes 3">Describes 3</option>
                                                        </select>
                                                        <p class="text-danger role_describes"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>City</h4>
                                                        <input type="text" name="city" id="city">
                                                        <p class="text-danger city"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>State</h4>
                                                        <input type="text" name="state" id="state">
                                                        <p class="text-danger state"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Postal Code</h4>
                                                        <input type="text" name="postal" id="postal">
                                                        <p class="text-danger postal"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Country*</h4>
                                                        <select name="country" id="country">
                                                            <option id="hideOption3">Select Country</option>
                                                            <option value="India">India</option>
                                                            <option value="UAE">UAE</option>
                                                        </select>
                                                        <p class="text-danger country"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="textarea-box">
                                                        <h4>How Can We Help?*</h4>
                                                        <textarea name="how_can_we_help" id="message" rows="3"></textarea>
                                                        <p class="text-danger how_can_we_help"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="textarea-box">
                                                        <h4>Message</h4>
                                                        <textarea name="c_message" id="message" rows="3"></textarea>
                                                        <p class="text-danger c_message"></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 text-right">
                                                    <button type="button" class="submit-btn queryForm">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Custom-Project">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center p-0">
                            <div class="our-product our-proces-box" style="border-right: none">
                                <h2 class="product-heading Requirement-heading">Custom Project Requirement?
                                </h2>
                                <p class="text1 textPadding">For Rooms And Suites, The Idea Is To Collaborate With
                                    Hotel
                                    Architects And Housekeeping Teams To Understand The Design Language And Guest
                                    Servicing Requirements Respectively For Designing</p>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="submit-btn">SUBMIT YOUR REQUIREMENT</a>
                            <div class="customisation-image-box">
                                <img class="customisation-image"
                                    src="{{ asset('assets/web/image/customisation-img.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="Request-Catalogue">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center p-0">
                            <div class="our-product our-proces-box" style="border-right: none">
                                <h2 class="product-heading Request-heading">Request For Catalogue
                                </h2>
                                <p class="text1 textPadding">For Rooms And Suites, The Idea Is To Collaborate With
                                    Hotel
                                    Architects And Housekeeping Teams To Understand The Design Language And Guest
                                    Servicing Requirements Respectively For Designing</p>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="submit-btn">SUBMIT YOUR REQUIREMENT</a>
                            <div class="our-product our-proces-box" style="border-right: none">
                                <h2 class="product-heading location-heading">Locations</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="india-location-box location-mb">
                                <img src="{{ asset('assets/web/image/india-img.png') }}" alt="img">
                                <h4 class="india-name">INDIA NEW DELHI</h4>
                                <p class="contact-no">+91 124 4222424</p>
                                <p class="location-text">Plot No. 33 Sector 37 Pace City 1 Gurgaon, 122 001
                                    Haryana, India</p>
                                <div class="india-location">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d48267.178986628365!2d77.0861611691329!3d28.455692573212975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1714214426946!5m2!1sen!2sin"
                                        width="100%" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="india-location-box">
                                <img src="{{ asset('assets/web/image/UAE-img.png') }}" alt="img">
                                <h4 class="india-name">UNITED ARAB EMIRATES DUBAI</h4>
                                <p class="contact-no">+971 55 1532259</p>
                                <p class="location-text">3808 Al Mazaya Tower BB2 Al Mazaya Business Avenue
                                    Jumeirah Lake Towers</p>
                                <div class="india-location">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d48267.178986628365!2d77.0861611691329!3d28.455692573212975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1714214426946!5m2!1sen!2sin"
                                        width="100%" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center p-0">
                            <div class="our-product our-proces-box" style="border-right: none">
                                <h2 class="product-heading ">Work With Us
                                </h2>
                                <p class="text1 textPadding">For Rooms And Suites, The Idea Is To Collaborate With
                                    Hotel
                                    Architects And Housekeeping Teams To Understand The Design Language And Guest
                                    Servicing Requirements Respectively For Designing</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @include('web.layout.partial.contactus')
        </div>
    </div>


@endsection
@section('js')
    <script src="{{ asset('assets/web/js/contact_us.js') }}"></script>
@endsection
