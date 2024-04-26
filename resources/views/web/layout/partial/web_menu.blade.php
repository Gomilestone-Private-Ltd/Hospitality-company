    <div id="action-box" class="Web-view">
        <div id="menu-wrap">
            <input type="checkbox" class="toggler" />
            <div class="dots">
                <img class="header-menu-icon" src="{{asset('assets/web/image/menu1.png')}}" alt="">
            </div>
            <div class="menu">
                <ul class="header-menu ruby-menu">
                    <li class="ruby-menu-mega-shop">
                        <a id="hoverProduct" class="menu-drop">PRODUCTS</a>
                        <div class="main-mega-menu-box">
                            <ul class="pro-menu">
                                @foreach($categories as $key=> $category)
                                <li @if($key== 0) id="show" class="ruby-active-menu-item active-sub-menu" @else id="hide" class="hoverNone" @endif>
                                    @if($key== 0)
                                        <a class="menu-sub-drop"> {{$category->name ??''}}</a>
                                        <div class="ruby-grid ruby-grid-lined ProductsBy">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="row">
                                                    @foreach($category->getSubCategory as $subcategory)
                                                        <div class="col-md-3">
                                                            <h3 class="ruby-list-heading">{{$subcategory->name ??""}}
                                                            </h3>
                                                            <ul>
                                                                @foreach($subcategory->getSuperSubCategory as $superSubCategory)
                                                                <li><a href="#">{{$superSubCategory->name ??''}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endforeach    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="menu-right-img">
                                                        <img src="{{asset($category->image ??'assets/web/image/menu-img.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <a class="menu-sub-drop"> {{$category->name ??''}}</a>
                                        <div class="ruby-grid ruby-grid-lined Collection">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="row">
                                                    @foreach($category->getSubCategory as $subcategory)
                                                        <div class="col-md-3">
                                                            <h3 class="ruby-list-heading">{{$subcategory->name ??''}} </h3>
                                                            <ul>
                                                                @foreach($subcategory->getSuperSubCategory as $superSubCategory)
                                                                    <li><a href="#">{{$superSubCategory->name ??''}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endforeach    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="menu-right-img">
                                                        <img src="{{asset($category->image ??'assets/web/image/menu-img.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </li>
                                
                                @endforeach
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
    </div>