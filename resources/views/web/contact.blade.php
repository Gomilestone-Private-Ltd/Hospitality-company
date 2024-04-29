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
                            <h2 class="philosophy">CONTACT US</h2>
                            <p class="philosophy-text letter-spacing">We Offer A Personal Touch To Customer Service. If You Have Any
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
    <div class="contactOpine-main-section">
        <div class="contactOpine-setion">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
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
                                            <div class="col-md-12 text-center p-0">
                                                <div class="our-product Queries-box" style="border-right: none">
                                                    <h2 class="product-heading Queries-heading">For Queries In
                                                        India
                                                    </h2>

                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4">
                                                <div class="QueriesIndia-img">
                                                    <img src="{{ asset('assets/web/image/user-img3.png') }}" alt="image">
                                                    <h4>Michelle Luzzi</h4>
                                                    <p>Sr. Sales Manager</p>
                                                    <p class="QueriesIndia-email">Michelle@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
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
                                            <div class="col-md-12 text-center p-0">
                                                <div class="our-product Queries-box" style="border-right: none">
                                                    <h2 class="product-heading Queries-heading">For Queries In
                                                        Dubai
                                                    </h2>

                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4">
                                                <div class="QueriesIndia-img">
                                                    <img src="{{ asset('assets/web/image/user-img1.png') }}" alt="image">
                                                    <h4>John Eilers</h4>
                                                    <p>Sales Director</p>
                                                    <p class="QueriesIndia-email">John@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
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
                                                <div class="col-md-12 text-center p-0">
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
                                                <div class="col-md-4 p-0">
                                                    <div class="call-box">
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
                                                <div class="col-md-4">
                                                    <div class="call-box">
                                                        <img src="{{ asset('assets/web/image/message-icon.png') }}"
                                                            alt="">
                                                        <div>
                                                            <a
                                                                href="mailto:opinelifestyles.india@gmail.com">Opinelifestyles.India@Gmail.Com</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="call-box">
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
                                        <div class="row mb-5">
                                            <div class="col-md-12 text-center p-0">
                                                <div class="our-product Queries-box" style="border-right: none">
                                                    <h2 class="product-heading CustomerService-heading">Leave A
                                                        Message
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Company Name*</h4>
                                                        <input type="text" name="company" id="company">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Type of Company*</h4>
                                                        <select name="" id="">
                                                            <option id="hideOption">Select Company</option>
                                                            <option value="">Company 1</option>
                                                            <option value="">Company 2</option>
                                                            <option value="">Company 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Full Name*</h4>
                                                        <input type="name" name="name" id="name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Email*</h4>
                                                        <input type="email" name="email" id="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Phone Number*</h4>
                                                        <select name="" id="">
                                                            <option id="hideOption1">Select Number</option>
                                                            <option value="">+91 124 4222424</option>
                                                            <option value="">+971 55 1532259</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Job Title*</h4>
                                                        <input type="text" name="job" id="job">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>What Role Best Describes You?</h4>
                                                        <select name="describes" id="describes">
                                                            <option id="hideOption2">Select Describes</option>
                                                            <option value="">Describes 1</option>
                                                            <option value="">Describes 2</option>
                                                            <option value="">Describes 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>City</h4>
                                                        <input type="text" name="city" id="city">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>State</h4>
                                                        <input type="text" name="state" id="state">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Postal Code</h4>
                                                        <input type="text" name="postal" id="postal">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-box">
                                                        <h4>Country*</h4>
                                                        <select name="country" id="country">
                                                            <option id="hideOption3">Select Country</option>
                                                            <option value="">India</option>
                                                            <option value="">UAE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-box">
                                                        <h4>How Can We Help?*</h4>
                                                        <textarea name="message" id="message" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-box">
                                                        <h4>Message</h4>
                                                        <textarea name="message" id="message" rows="3"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 text-right">
                                                    <button type="button" class="submit-btn">SUBMIT</button>
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
                            <div class="india-location-box">
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
            <div class="work-with-us">
                <div class="container">
                    <div class="work-with-us-box">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="work-with-us-left">
                                    <img src="{{ asset('assets/web/image/work-img.png') }}" alt="image">

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12 pl-0">
                                <div class="work-with-us-right">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <input type="name" name="name" id="name"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <input type="email" name="email" id="email"
                                                        placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-box">
                                                    <textarea name="message" id="message" rows="3" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <div class="upload-btn-wrapper">
                                                        <button class="upload-btn">Upload a file
                                                            <img src="{{ asset('assets/web/image/upload-icon.png') }}"
                                                                alt="icon">
                                                        </button>
                                                        <input type="file" name="myfile" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-right">
                                                <button type="button" class="submit-btn">SUBMIT</button>
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
    </div>

    <script>
        (function() {
            document.getElementById("hideOption").text = "";
            document.getElementById("hideOption1").text = "";
            document.getElementById("hideOption2").text = "";
            document.getElementById("hideOption3").text = "";
        })()
    </script>
@endsection
