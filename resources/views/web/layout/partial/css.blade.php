<style>
        .slider-section {
            background: #f0efeb;
            padding: 40px 0;
            padding-bottom: 0px;
            position: relative;
            width: 100%;
            padding-bottom: 50px;
        }

        .borderS {
            position: absolute;
            transform: rotate(180deg);
            top: -80px;
            right: 400px;
            width: 1px;
            background-color: #fff;
            height: 770px;
        }

        .text-box {
            position: absolute;
            top: 43%;
            left: 49%;
            transform: translate(-48%, -50%);
            z-index: 1;
        }

        .heading {
            font-size: 75px;
            font-family: "Bodoni Moda", serif;
            font-weight: 500;
            color: #fff;
            margin: 0;
            text-align: center;
        }

        .MODERN{
            font-weight: 700;
        }

        .slick-slide {
            transform: scale(0.9);
            transition: all 0.4s ease-in-out;
            padding: 40px 0;
            position: relative;
            height: auto;
        }

        .slick-slider {
            overflow: hidden;
            z-index: 1;
        }

        .slick-slide img {
            max-width: 100%;
            transition: all 0.4s ease-in-out;
        }

        .slick-center {
            transform: scale(1.1);
        }

        .slick-prev {
            left: 140px;
            z-index: 9;
            top: 91%;
            background-image: url({{asset('assets/web/image/slide-arrow.png')}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 50px;
            height: 30px;
        }

        .slick-prev:hover,
        .slick-prev:focus {
            top: 88.6% !important;
            background-image: url({{asset('assets/web/image/scroll-img.png')}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 50px;
            height: 30px;
            transform: rotate(180deg) !important;
        }


        .slick-next:hover,
        .slick-next:focus {
            background-image: url({{asset('assets/web/image/scroll-img.png')}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 50px;
            height: 30px;
            transform: rotate(0deg) !important;
        }

        .slick-next {
            right: 140px;
            top: 88%;
            background-image: url({{asset('assets/web/image/slide-arrow.png')}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 50px;
            height: 30px;
            transform: rotate(180deg);
        }

        .slick-track {
            padding-bottom: 60px;
            display: flex;
            align-items: center;
            height: 620px;
        }

        .slick-current img {
            height: 500px !important;
            width: 100%;
        }

        .slick-slide img {
            width: 100%;
            height: 380px;
        }

        .slick-list {
            width: 85%;
            margin: auto;
            overflow: visible;
        }

        .slick-prev:before,
        .slick-next:before {
            display: none;
        }

        @media (max-width:1022px) {

            .slick-list {
                width: 100%;
            }

            .slick-track {
                left: -220px;
            }

            .heading {
                font-size: 45px;
            }

            .borderS {
                right: 250px;
            }

            .call-main-box {
                padding-left: 25px;
            }

            .get-in-touch-box {
                padding: 20px 0;
            }
        }

        @media (max-width:800px) {
            .slick-track {
                left: -170px;
            }
        }

        @media (max-width:600px) {
            .slick-slide p {
                font-size: 15px;
            }

            .heading {
                font-size: 26px;
                line-height: 36px;
            }

            .slick-track {
                left: -136px;
            }

            .slick-list {
                width: 100% !important;
            }

            .slick-slide img {
                height: 350px;
            }

            .slick-prev {
                left: 25px;
            }

            .slick-next {
                right: 25px;
            }

            .slick-prev:hover,
            .slick-prev:focus {
                top: 84% !important;
            }

            .scroll-box p {
                font-size: 13px;
            }

            .scroll-box img {
                width: 34px;
            }

            .about-center-box img {
                height: 220px !important;
            }

            .slick-current img {
                height: 260px !important;
                width: 100%;
            }

            .slick-slide img {
                height: 220px;
            }

            .slick-track {
                height: 380px;
            }

            img.backArro {
                height: 27px;
                transform: rotate(180deg);
                margin-right: 8px;
            }

            .accordion-heading-box:hover{
                color: #c4383d;
            }
        }

        @media (max-width:425px) {


            .slick-track {
                left: -100px;
            }
        }

        #productByMaterial_menu {
            display: none;
        }

        #productByCollection_menu {
            display: none;
        }
    </style>