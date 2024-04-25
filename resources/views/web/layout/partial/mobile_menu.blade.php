<div class="col-md-6 col-2 mobile-view">
    <div id="mySidenav" class="sidenav">
        <div class="responsive-menu-box">
            <div class="header-logo">
                <img src="{{asset('assets/web/image/logo.png')}}" alt="image">
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
                        src="{{asset('assets/web/image/nextArro.png')}}" alt=""> PRODUCTS
                </p>
                
                @foreach($categories as $key=> $category)
                <a id="productMaterail" onclick="getSubCategoryMenu({{$category->id}})" class="card-link product-arro accordion-heading-box productMaterail">
                    {{$category->name ??''}}
                    <i class="fa fa-angle-right angle-icon" aria-hidden="true"></i>
                </a>
                @endforeach
            </div>

            <div id="productByMaterial_menu" class="productByMaterial_menu getThemobileSubcategoryList">

                
            </div>
            
        </div>
    </div>

    <span class="responsive-icon" onclick="openNav()">&#9776;</span>
</div>

@section('js')
<script src="{{asset('assets/web/js/mobileViewCategory.js')}}"></script>
@endsection