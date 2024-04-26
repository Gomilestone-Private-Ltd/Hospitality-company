<header class="main-header" id="main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-3">
                <div class="header-left">
                    <a href="/"><img src="{{ asset('assets/web/image/logo.png') }}" alt="logo"></a>
                </div>
<<<<<<< HEAD
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
=======
            </div>
            <div class="col-md-10 col-sm-9 col-9 text-right">
                <div class="header-center">
                    <div id="action-box" class="Web-view">
                        <div id="menu-wrap">
                            <input type="checkbox" class="toggler" />
                            <div class="dots">
                                <img class="header-menu-icon" src="{{ asset('assets/web/image/menu1.png') }}"
                                    alt="image">
                            </div>
                            <div class="menu">
                                <ul class="header-menu ruby-menu">
                                    <li class="ruby-menu-mega-shop">
                                        <a id="hoverProduct" class="menu-drop">PRODUCTS</a>
                                        <div class="main-mega-menu-box">
                                            <ul class="pro-menu">
                                                <li id="show" class="ruby-active-menu-item active-sub-menu"><a
                                                        class="menu-sub-drop">Products by Material</a>
                                                    <div class="ruby-grid ruby-grid-lined ProductsBy">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <h3 class="ruby-list-heading">LEATHERETTE
                                                                        </h3>
                                                                        <ul>
                                                                            <li><a href="#">Menu Item #1</a></li>
                                                                            <li><a href="#">Menu Item #2</a></li>
                                                                            <li><a href="#">Menu Item #3</a></li>
                                                                            <li><a href="#">Menu Item #4</a></li>
                                                                            <li><a href="#">Menu Item #5</a></li>
                                                                            <li><a href="#">Menu Item #5</a></li>
                                                                            <li><a href="#">Menu Item #5</a></li>
                                                                            <li><a href="#">Menu Item #5</a></li>
                                                                            <li><a href="#">Menu Item #5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="ruby-list-heading">METAL</h3>
                                                                        <ul>
                                                                            <li><a href="#">Menu Item #1</a></li>
                                                                            <li><a href="#">Menu Item #2</a></li>
                                                                            <li><a href="#">Menu Item #3</a></li>
                                                                            <li><a href="#">Menu Item #4</a></li>
                                                                            <li><a href="#">Menu Item #5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="ruby-list-heading">WOOD</h3>
                                                                        <ul>
                                                                            <li><a href="#">Menu Item #1</a></li>
                                                                            <li><a href="#">Menu Item #2</a></li>
                                                                            <li><a href="#">Menu Item #3</a></li>
                                                                            <li><a href="#">Menu Item #4</a></li>
                                                                            <li><a href="#">Menu Item #5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="menu-right-img">
                                                                    <img src="{{ asset('assets/web/image/menu-img.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="hide" class="hoverNone"><a class="menu-sub-drop">Products
                                                        by
                                                        Collection</a>
                                                    <div class="ruby-grid ruby-grid-lined Collection">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <h3 class="ruby-list-heading">CLASSIC
                                                                            COLLECTION
                                                                        </h3>
                                                                        <ul>
                                                                            <li><a href="#">BR</a></li>
                                                                            <li><a href="#">BL</a></li>
                                                                            <li><a href="#">HN</a></li>
                                                                            <li><a href="#">GR</a></li>
                                                                            <li><a href="#">TN</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="ruby-list-heading">FEATURED
                                                                            COLLECTION
                                                                        </h3>
                                                                        <ul>
                                                                            <li><a href="#">text</a></li>
                                                                            <li><a href="#">text</a></li>
                                                                            <li><a href="#">text</a></li>
                                                                            <li><a href="#">text</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="ruby-list-heading">HAMMERED
                                                                            COLLECTION
                                                                        </h3>
                                                                        <ul>
                                                                            <li><a href="#">RIPPLE COLLECTION</a>
                                                                            </li>
                                                                            <li><a href="#">EMBOSSED</a></li>
                                                                            <li><a href="#">WROUGHT</a></li>
                                                                            <li><a href="#">GLINT COLLECTION</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="ruby-list-heading">C-SHAPE
                                                                            COLLECTION
                                                                        </h3>
                                                                        <ul>
                                                                            <li><a href="#">ARCH ASSORTMENT</a>
                                                                            </li>
                                                                            <li><a href="#">CRESCENT SERIES</a>
                                                                            </li>
                                                                            <li><a href="#">ARCADIAN SERIES</a>
                                                                            </li>
                                                                            <li><a href="#">CUBIST SERIES</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="menu-right-img">
                                                                    <img src="{{ asset('assets/web/image/menu-img.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="hide" class="hoverNone"><a class="menu-sub-drop">Products
                                                        by
                                                        Use</a>
                                                    <div class="ruby-grid ruby-grid-lined">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <h3 class="ruby-list-heading">GUEST ROOM
                                                                            ITEMS</h3>
                                                                        <ul>
                                                                            <li><a href="#">DESK ACCESSORIES</a>
                                                                            </li>
                                                                            <li><a href="#">NIGHTSTAND
                                                                                    ACCESSORIES</a></li>
                                                                            <li><a href="#">WARDROBE ACC.</a>
                                                                            </li>
                                                                            <li><a href="#">MINIBAR ACC.</a></li>
                                                                            <li><a href="#">HOUSEKEEPING ACC.</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h3 class="ruby-list-heading">GUEST BATH
                                                                            ITEMS</h3>
                                                                        <ul>
                                                                            <li><a href="#">VANITY TOP ACC.</a>
                                                                            </li>
                                                                            <li><a href="#">AMENITY DISPLAY
                                                                                    ACC.</a>
                                                                            </li>
                                                                            <li><a href="#">BASKETS AND
                                                                                    HAMPERS</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h3 class="ruby-list-heading">PUBLIC AREA
                                                                            AND FRONT
                                                                            OFFICE</h3>
                                                                        <ul>
                                                                            <li><a href="#">FRONT DESK ACC.</a>
                                                                            </li>
                                                                            <li><a href="#">OPERATIONAL
                                                                                    AMENITIES</a></li>
                                                                            <li><a href="#">PUBLIC AREA
                                                                                    BATHROOMS</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h3 class="ruby-list-heading">F&B</h3>
                                                                        <ul>
                                                                            <li><a href="#">F&B MENU FOLDERS</a>
                                                                            </li>
                                                                            <li><a href="#">BILL FOLDERS</a></li>
                                                                            <li><a href="#">TABLETOP ACC.</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h3 class="ruby-list-heading">BANQUET</h3>
                                                                        <ul>
                                                                            <li><a href="#">CONFERENCING ACC.</a>
                                                                            </li>
                                                                            <li><a href="#">ACCESSORIES TO
                                                                                    ENHANCE</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="menu-right-img">
                                                                    <img src="{{ asset('assets/web/image/menu-img.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/philosophy">PHILOSOPHY</a>
                                    </li>
                                    <li>
                                        <a href="">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
>>>>>>> 7d4bb382c43e0ea440d5b2d5b7aff8d271b34036
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
