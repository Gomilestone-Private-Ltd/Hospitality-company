@extends('web.layout.app')
@section('title', 'Opine')
@section('content')

    <style>
        .who-we-are-slider .slick-list {
            overflow: hidden;
            width: 100%;
        }

        .who-we-are-slider .slick-track {
            height: auto !important;
            padding-bottom: 100px;
        }

        .who-we-are-slider .slick-current img {
            height: 300px !important;
        }

        .who-we-are-slider .slick-slide img {
            height: 320px !important;
            margin-top: 20px !important;
        }

        .who-we-are-slider .slick-slide {
            padding: 0px !important;
            margin-right: 25px !important;
        }

        .multi-slider-img img {
            height: 300px !important;
        }

        .our-client-img-box img {
            height: auto !important;
        }

        .who-we-are-slider .slick-prev {
            right: 120px !important;
            left: auto;
        }

        .who-we-are-slider .slick-next {
            right: 36px !important;
            top: 88.8%;
        }
    </style>
    <div class="main-philosophy-section">
        <div class="desk-detail-section">
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

        <div class="RelatedProducts-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="manufacture" style="margin-bottom: 0px">
                            <div class="row">
                                <div class="col-md-12 text-center p-0">
                                    <div class="our-product our-proces-box" style="border-right: none">
                                        <h2 class="product-heading CustomerService-heading">Related Products</h2>

                                        <p class="Process-text">For rooms and suites, the idea is to collaborate with hotel
                                            architects and housekeeping teams to understand the design language and guest
                                            servicing requirements respectively for designing an entire range of products to
                                            accentuate the space with a warm and personalized touch. The most skilled
                                            craftsmen make the tableware and decorative range, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider -->
                    <div class="col-md-12">
                        <div class="slider responsive main-sliser">
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image" />
                                <div class="desk-slide-img">
                                    <p>GUEST SERVICE DIRECTORY</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image" />
                                <div class="desk-slide-img">
                                    <p>GUEST SERVICE DIRECTORY</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image" />
                                <div class="desk-slide-img">
                                    <p>GUEST SERVICE DIRECTORY</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image" />
                                <div class="desk-slide-img">
                                    <p>GUEST SERVICE DIRECTORY</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image" />
                                <div class="desk-slide-img">
                                    <p>GUEST SERVICE DIRECTORY</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/guest-room/slide-img.png') }}" alt="image" />
                                <div class="desk-slide-img">
                                    <p>GUEST SERVICE DIRECTORY</p>
                                </div>
                            </div>
                        </div>
                        <!-- control arrows -->
                        <div class="prev">
                            <img class="slide-arrow" src="{{ asset('assets/web/image/left-arrow.png') }}" alt="image" />
                        </div>
                        <div class="next">
                            <img class="slide-arrow" src="{{ asset('assets/web/image/right-arrow.png') }}"
                                alt="image" />
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="contactOpine-setion terms-condition-main-section">
            <div class="container">
                <div class="terms-condition-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">TERMS &
                                        CONDITION</button>
                                </li>

                                <li class="nav-item tab-mE" role="presentation">
                                    <button class="nav-link " id="profile-tab" data-toggle="tab" data-target="#profile"
                                        type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">PRODUCT SPECIFICATIONS</button>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content" id="TabContent">
                                <div class="tab-pane fade show active contact-opine-main-section" id="home"
                                    role="tabpanel" aria-labelledby="home-tab">

                                    <div class="QueriesInIndia-box">
                                        <div class="row">
                                            <div class="col-md-12 text-center p-0">
                                                <div class="our-product Queries-box" style="border-right: none">
                                                    <h2 class="product-heading CustomerService-heading">Terms & Condition
                                                    </h2>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="terms-condition-box">
                                                    <p class="guest-text">A Terms and Conditions agreement acts as a
                                                        legal contract between
                                                        you (the company) and the user. It's where you maintain your
                                                        rights to exclude users from your app in the event that they
                                                        abuse your website/app, set out the rules for using your service
                                                        and note other important details and disclaimers.
                                                    </p>
                                                    <p class="guest-text">Having a Terms and Conditions agreement is
                                                        completely optional. No laws require you to have one. Not even
                                                        the super-strict and wide-reaching General Data Protection
                                                        Regulation (GDPR)
                                                    </p>
                                                    <p class="guest-text">
                                                        Your Terms and Conditions agreement will be uniquely yours.
                                                        While some clauses are standard and commonly seen in pretty much
                                                        every Terms and Conditions agreement, it's up to you to set the
                                                        rules and guidelines that the user must agree to.
                                                    </p>
                                                    <p class="guest-text">
                                                        <a target="_blank" class="underline-text"
                                                            href="https://www.termsfeed.com/dictionary/terms-and-conditions-definition/">Terms
                                                            and Conditions</a> agreements are also known as <a
                                                            target="_blank" class="underline-text"
                                                            href="https://www.termsfeed.com/dictionary/terms-of-service-definition/">Terms
                                                            of
                                                            Service</a> or <a target="_blank" class="underline-text"
                                                            href="https://www.termsfeed.com/dictionary/terms-of-use-definition/">Terms
                                                            of Use</a> agreements. These terms are
                                                        interchangeable, practically speaking. More rarely, it may be
                                                        called something like an End User Services Agreement (EUSA)
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade Have-opine-contact-main-section" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">

                                    <div class="QueriesInIndia-box">
                                        <div class="row">
                                            <div class="col-md-12 text-center p-0">
                                                <div class="our-product Queries-box" style="border-right: none">
                                                    <h2 class="product-heading Request-heading">Product Specifications
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="product-specification">
                                                    <div class="product-name-box">
                                                        <p class="productTitle">Product Name <span>:</span></p>
                                                        <p class="productName">Soap Dish</p>
                                                    </div>
                                                    <div class="product-name-box">
                                                        <p class="productTitle">Product Code <span>:</span></p>
                                                        <p class="productName">SL/BL001</p>
                                                    </div>
                                                    <div class="product-name-box">
                                                        <p class="productTitle">Dimensions <span>:</span></p>
                                                        <p class="productName">3.5" x 3.5"</p>
                                                    </div>
                                                    <div class="product-name-box">
                                                        <p class="productTitle">Material <span>:</span></p>
                                                        <p class="productName">Metal</p>
                                                    </div>
                                                </div>
                                                <div class="email-box">
                                                    <input type="email" name="email" id="email" placeholder="Enter Email For Specifications">
                                                    <button class="send-btn">SEND</button>
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
        <!-- Include get_in_touch -->
        <div class="get-in-touch">
            @include('web.layout.partial.get_in_touch')
        </div>

    </div>

    <script>
        $('.responsive').slick({
            dots: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            infinite: true,
            speed: 300,
            autoplay: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.material-btn').on('click', function() {
            $('button').removeClass('materialActive');
            $(this).addClass('materialActive');
        });
    </script>

@endsection
