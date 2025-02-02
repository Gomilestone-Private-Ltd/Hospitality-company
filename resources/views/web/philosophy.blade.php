@extends('web.layout.app')
@section('title', 'PHILOSOPHY')
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

        /* .who-we-are-slider .slick-prev {
                right: 120px !important;
                left: auto;
            } */

        .who-we-are-slider .slick-next {
            right: 36px !important;
            top: 88.8%;
        }

        .who-we-are-slider .slick-prev {
            right: 120px !important;
            left: auto;
            z-index: 9;
            background-image: url({{ asset('assets/web/image/left-arrow.png') }});
            background-repeat: no-repeat;
            background-position-x: left;
            width: 36px;
            height: 6px;
        }
        .slick-prev:hover, .slick-prev:focus{
            transform: none !important;
            top: 91.3% !important;
        }

        @media (max-width: 600px) {
            .who-we-are-slider .slick-slide img {
                height: auto !important;
            }

            .who-we-are-slider .slick-next {
                width: 41px;
                height: 25px;
                top: 84% !important;
            }

            .who-we-are-slider .slick-prev {
                right: 100px !important;
            }
            .who-we-are-slider .slick-prev:hover {
                top: 87.3% !important;
            }

            .multi-slider-img img {
                height: 200px !important;
            }

            .main-sliser .slick-track {
                height: 200px !important;
                padding-bottom: 20px !important;
                position: initial !important;
            }

            .img-overlay {
                padding: 10px 13px;
            }

            .slide-arrow {
                height: 28px;
            }

            img.slide-arrow1 {
                width: 33px;
            }

            .prev {
                right: 95px;
            }

            .client-arro {
                bottom: -14px;
            }

            .client-arro1 {
                bottom: -19px;
            }

        }
    </style>
    <div class="main-philosophy-section">
        <div class="philosophy-section">
            <div class="borderTop"></div>
            <div class="borderLeft"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="philosophy">PHILOSOPHY</h2>
                        <p class="philosophy-text">A hospitality-focused design company in new delhi, india, our service
                            includes design and development of customized interior accessories.</p>

                    </div>
                </div>
            </div>
            <div class="philosophy-right-box i-img">
                <img src="{{ asset('assets/web/image/i-img2.png') }}" alt="">
            </div>
            <div class="scroll-box1">
                <a href="#about">
                    <img src="{{ asset('assets/web/image/scroll-icon3.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="video-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-box">
                            <iframe width="100%" height="450" autoplay muted controls
                                src="https://www.youtube.com/embed/zumJJUL_ruM?si=QY1OBN5TTrvJwTvM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-12 who-we">
                        <div class="manufacture">
                            <div class="row">
                                <div class="col-md-12 text-center p-0">
                                    <div class="our-product our-proces-box" style="border-right: none">
                                        <h2 class="product-heading Clients-heading">Who We Are</h2>

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="who-we-are">
                                        <img class="who-we-img" src="{{ asset('assets/web/image/who-we-img.png') }}"
                                            alt="">
                                        <p class="who-we-text">Designs & Manufactures 1000's of Products</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="who-we-are">
                                        <img class="who-we-img" src="{{ asset('assets/web/image/who-we-img1.png') }}"
                                            alt="">
                                        <p class="who-we-text">In-Stock & Ready<br> to Ship</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="who-we-are">
                                        <img class="who-we-img" src="{{ asset('assets/web/image/who-we-img2.png') }}"
                                            alt="">
                                        <p class="who-we-text">Product Confidence Guarantee</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="who-we-are">
                                        <img class="who-we-img" src="{{ asset('assets/web/image/who-we-img3.png') }}"
                                            alt="">
                                        <p class="who-we-text">From Our <br>Hearts</p>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-5">
                                    <p class="text1">Opine Lifestyles designs luxurious accents and accessories across four
                                        key pillars
                                        of the hospitality industry: In-room, Bathroom, Bar & Restaurant, and F&B buffet
                                        displays:
                                        through a customized approach and an in-depth insight into a brand’s design and
                                        aesthetics.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="our-proces-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <div class="slider who-we-are-slider">
                            <div class="item">
                                <div class="philosophy-slide-img">
                                    <img src="{{ asset('assets/web/image/proces-img1.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="philosophy-slide-img">
                                    <img src="{{ asset('assets/web/image/proces-img.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="philosophy-slide-img">
                                    <img src="{{ asset('assets/web/image/proces-img2.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="philosophy-slide-img">
                                    <img src="{{ asset('assets/web/image/image3.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="manufacture" style="margin-bottom: 0px">
                            <div class="row">
                                <div class="col-md-12 text-center p-0">
                                    <div class="our-product our-proces-box" style="border-right: none">
                                        <h2 class="product-heading Clients-heading">Our Process</h2>
                                        <h3 class="Aesthetically">Aesthetically decorative & functional designs</h3>
                                        <h3 class="Manufacturing">Design & Manufacturing</h3>
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
                                <img src="{{ asset('assets/web/image/ourProces-img.png') }}" alt="image" />
                                <div class="img-overlay">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/ourProces-img1.png') }}" alt="image" />
                                <div class="img-overlay">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/ourProces-img2.png') }}" alt="image" />
                                <div class="img-overlay">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/ourProces-img3.png') }}" alt="image" />
                                <div class="img-overlay">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/ourProces-img2.png') }}" alt="image" />
                                <div class="img-overlay">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                            <div class="multi-slider-img">
                                <img src="{{ asset('assets/web/image/ourProces-img3.png') }}" alt="image" />
                                <div class="img-overlay">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <!-- control arrows -->
                        <div class="prev">
                            <img class="slide-arrow1" src="{{ asset('assets/web/image/left-arrow.png') }}"
                                alt="image" />
                        </div>
                        <div class="next">
                            <img class="slide-arrow" src="{{ asset('assets/web/image/right-arrow.png') }}"
                                alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-client">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="manufacture" style="margin-bottom: 0px">
                            <div class="row">
                                <div class="col-md-12 text-center p-0">
                                    <div class="our-product our-proces-box mb-0" style="border-right: none">
                                        <h2 class="product-heading Clients-heading">Our Clients</h2>
                                        <p class="Process-text">An extensive experience in manufacturing for hotels,
                                            restaurants and bar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider -->
                    <div class="col-md-12 p-0">
                        <div class="slider responsive1 main-sliser">
                            <div class="our-client-img-box">
                                <img src="{{ asset('assets/web/image/client-img.png') }}" alt="image" />
                            </div>
                            <div class="our-client-img-box">
                                <img src="{{ asset('assets/web/image/client-img1.png') }}" alt="image" />
                            </div>
                            <div class="our-client-img-box">
                                <img src="{{ asset('assets/web/image/client-img2.png') }}" alt="image" />
                            </div>
                            <div class="our-client-img-box">
                                <img src="{{ asset('assets/web/image/client-img3.png') }}" alt="image" />
                            </div>
                            <div class="our-client-img-box">
                                <img src="{{ asset('assets/web/image/client-img4.png') }}" alt="image" />
                            </div>
                            <div class="our-client-img-box">
                                <img src="{{ asset('assets/web/image/client-img5.png') }}" alt="image" />
                            </div>
                            <div class="our-client-img-box">
                                <img src="{{ asset('assets/web/image/client-img1.png') }}" alt="image" />
                            </div>
                            <div class="our-client-img-box">
                                <img src="{{ asset('assets/web/image/client-img3.png') }}" alt="image" />
                            </div>
                        </div>
                        <!-- control arrows -->
                        <div class="prev1 client-arro">
                            <img class="slide-arrow1" src="{{ asset('assets/web/image/left-arrow.png') }}"
                                alt="image" />
                        </div>
                        <div class="next1 client-arro1">
                            <img class="slide-arrow" src="{{ asset('assets/web/image/right-arrow.png') }}"
                                alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-presence">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="manufacture" style="margin-bottom: 0px">
                            <div class="row">
                                <div class="col-md-12 text-center p-0">
                                    <div class="our-product our-proces-box mb-0" style="border-right: none">
                                        <h2 class="product-heading">Our Presence</h2>
                                        <p class="Process-text">An extensive experience in manufacturing for hotels,
                                            restaurants and bar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="map-img-box">
                            <img class="" src="{{ asset('assets/web/image/map-img.png') }}" alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-customisation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="manufacture">
                            <div class="row">
                                <div class="col-md-12 text-center p-0">
                                    <div class="our-product our-proces-box" style="border-right: none">
                                        <h2 class="product-heading customisation-heading">Product Customisation</h2>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="customisation-img-box">
                                        <img class="customisation-img"
                                            src="{{ asset('assets/web/image/product-icon1.png') }}" alt="image">

                                        <p class="customisation-text">Hospitality</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="customisation-img-box">
                                        <img class="customisation-img"
                                            src="{{ asset('assets/web/image/product-icon2.png') }}" alt="image">
                                        <p class="customisation-text">Retail & Commercial</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="customisation-img-box">
                                        <img class="customisation-img"
                                            src="{{ asset('assets/web/image/product-icon.png') }}" alt="image">
                                        <p class="customisation-text">Residential</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="customisation-img-box">
                                        <img class="customisation-img"
                                            src="{{ asset('assets/web/image/product-icon3.png') }}" alt="image">
                                        <p class="customisation-text">Residential</p>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-md-5">
                                    <p class="Process-text">A customized process is followed from start to finish, where
                                        perfectly coordinated colors and quality fabrics are used to create exclusive,
                                        detailed designs relating to a brand. As Opine Lifestyles extends its services
                                        beyond design, to even manufacturing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center  mb-btn">
                        <a class="submit-btn">SUBMIT YOUR REQUIREMENT</a>
                        <div class="customisation-image-box">
                            <img class="customisation-image" src="{{ asset('assets/web/image/customisation-img.png') }}"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="green-measures">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="manufacture">
                            <div class="row">
                                <div class="col-md-12 text-center p-0">
                                    <div class="our-product our-proces-box" style="border-right: none">
                                        <h2 class="product-heading Measures-heading">Green Measures</h2>
                                        <p class="Process-text">For rooms and suites, the idea is to collaborate with hotel
                                            architects and housekeeping teams to understand the design language and guest
                                            servicing requirements respectively for designing an entire range of products to
                                            accentuate the space with a warm and personalized touch. The most skilled
                                            craftsmen make the tableware and decorative range,</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="measures-img-box">
                                        <img class="measures-img" src="{{ asset('assets/web/image/measures-img.png') }}"
                                            alt="image">

                                        <p class="measures-text">Carbon footprint measures</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="measures-img-box">
                                        <img class="measures-img" src="{{ asset('assets/web/image/measures-img1.png') }}"
                                            alt="image">
                                        <p class="measures-text">Waste collection & recycling</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="measures-img-box">
                                        <img class="measures-img" src="{{ asset('assets/web/image/measures-img2.png') }}"
                                            alt="image">
                                        <p class="measures-text">Sustainable<br> infrastructure</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-6">
                                    <div class="measures-img-box">
                                        <img class="measures-img" src="{{ asset('assets/web/image/measures-img3.png') }}"
                                            alt="image">
                                        <p class="measures-text">Optimisable<br> production</p>
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
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
    <script>
        $('.responsive1').slick({
            dots: true,
            prevArrow: $('.prev1'),
            nextArrow: $('.next1'),
            infinite: true,
            speed: 300,
            autoplay: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endsection
