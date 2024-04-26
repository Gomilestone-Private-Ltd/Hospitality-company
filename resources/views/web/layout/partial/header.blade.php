<header class="main-header" id="main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-3">
                <div class="header-left">
                    <a href="/"><img src="{{ asset('assets/web/image/logo.png') }}" alt="logo"></a>
                </div>
                <div class="col-md-10 col-sm-9 col-9 text-right">
                    <div class="header-center">
                       
                        <!-- Include Web Menu------------>
                        @include('web.layout.partial.web_menu')

                        <!-- Include Mobile Menu------------>
                        @include('web.layout.partial.mobile_menu')

                        <div class="header-right">
                            <img src="{{asset('assets/web/image/icon.svg')}}" alt="img">
                            <img class="searchIcon" src="{{asset('assets/web/image/search.svg')}}" alt="img">
                        </div>
                        <div class="borderB"></div>
                    </div>
                    <div class="col-md-6 col-2 mobile-view">
                        <div id="mySidenav" class="sidenav">
                            <div class="responsive-menu-box">
                                <div class="header-logo">
                                    <img src="{{ asset('assets/web/image/logo.png') }}" alt="image">
                                </div>

                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="productHide">
                                    <a id="PRODUCTS" class="card-link product-arro accordion-heading-box">
                                        PRODUCTS <i class="fa fa-angle-right angle-icon" aria-hidden="true"></i>
                                    </a>
                                    <a class="menu-inner accordion-heading-box" href="#">OUR STORY</a>
                                    <a class="menu-inner accordion-heading-box" href="#">CONTACT</a>
                                </div>

                                <div id="productMenu" class="productMenu">
                                    <p id="backProduct" class="back-btn-box"><img class="backArro"
                                            src="{{ asset('assets/web/image/nextArro.png') }}" alt="">
                                        PRODUCTS
                                    </p>
                                    <a id="productMaterail" class="card-link product-arro accordion-heading-box">
                                        PRODUCTS BY MATERIAL <i class="fa fa-angle-right angle-icon"
                                            aria-hidden="true"></i>
                                    </a>
                                    <a id="productCollection" class="menu-inner product-arro accordion-heading-box">
                                        PRODUCTS BY COLLECTION <i class="fa fa-angle-right angle-icon"
                                            aria-hidden="true"></i></a>
                                    <a class="menu-inner product-arro accordion-heading-box">
                                        PRODUCTS BY USE <i class="fa fa-angle-right angle-icon"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div id="productByMaterial_menu" class="productByMaterial_menu">
                                    <p id="backProductByMaterial" class="back-btn-box"><img class="backArro"
                                            src="{{ asset('assets/web/image/nextArro.png') }}" alt="">
                                        PRODUCTS
                                        / PRODUCTS BY MATERIAL</p>
                                    <div class="productByMaterial_subMenu">
                                        <p>LEATHERETTE</p>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Item #1</a>
                                                <a href="#">Menu Item #1</a>
                                                <a href="#">Menu Item #1</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="productByMaterial_subMenu">
                                        <p>METAL</p>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Item #2</a>
                                                <a href="#">Menu Item #2</a>
                                                <a href="#">Menu Item #2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="productByMaterial_subMenu">
                                        <p>WOOD</p>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Item #3</a>
                                                <a href="#">Menu Item #3</a>
                                                <a href="#">Menu Item #3</a>
                                                <a href="#">Menu Item #3</a>
                                                <a href="#">Menu Item #3</a>
                                                <a href="#">Menu Item #3</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="productByCollection_menu" class="productByCollection_menu">
                                    <p id="backProductByCollection" class="back-btn-box"><img class="backArro"
                                            src="{{ asset('assets/web/image/nextArro.png') }}" alt="">
                                        PRODUCTS
                                        / PRODUCTS BY COLLECTION</p>
                                    <div class="productByMaterial_subMenu">
                                        <p>CLASSIC COLLECTION</p>
                                        <ul>
                                            <li>
                                                <a href="#">BR</a>
                                                <a href="#">BL</a>
                                                <a href="#">HN</a>
                                                <a href="#">GR</a>
                                                <a href="#">TN</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="productByMaterial_subMenu">
                                        <p>FEATURED COLLECTION</p>
                                        <ul>
                                            <li>
                                                <a href="#">Text</a>
                                                <a href="#">Text</a>
                                                <a href="#">Text</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="productByMaterial_subMenu">
                                        <p>HAMMERED COLLECTION</p>
                                        <ul>
                                            <li>
                                                <a href="#">RIPPLE COLLECTION</a>
                                                <a href="#">EMBOSSED</a>
                                                <a href="#">WROUGHT</a>
                                                <a href="#">GLINT COLLECTION</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="productByMaterial_subMenu">
                                        <p>C-SHAPE COLLECTION</p>
                                        <ul>
                                            <li>
                                                <a href="#">ARCH ASSORTMENT</a>
                                                <a href="#">CRESCENT SERIES</a>
                                                <a href="#">ARCADIAN SERIES</a>
                                                <a href="#">CUBIST SERIES</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span class="responsive-icon" onclick="openNav()">&#9776;</span>
                    </div>
                    <div class="header-right">
                        <img src="{{ asset('assets/web/image/icon.svg') }}" alt="img">
                        <img class="searchIcon" src="{{ asset('assets/web/image/search.svg') }}" alt="img">
                    </div>
                    <div class="borderB"></div>
                </div>
            </div>
        </div>
    </div>
</header>
