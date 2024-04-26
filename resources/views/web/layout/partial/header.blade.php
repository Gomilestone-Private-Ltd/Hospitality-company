<header class="main-header" id="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-3">
                    <div class="header-left">
                       <a href="/"> <img src="{{asset('assets/web/image/logo.png')}}" alt="image"></a>
                    </div>
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
                </div>
            </div>
        </div>
    </header>