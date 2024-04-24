<header class="header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-11 col-10">
                <a class="signup" href="{{ url('/') }}"> 
                    <img class="header-left-img" src="{{ url($setting->logo ??'/assets/admin/logo.png')}}">
                </a>
            </div>
            <div class="col-md-1 text-right right-header-web-view">
                <div class="dropdown">
                    <button type="button" class="header-right-btn dropdown-toggle" data-toggle="dropdown">
                        <img class="header-img" src="{{ url(Masked::getUserAvtar()??'/assets/admin/img/profile-icon.png') }}">
                    </button>
                    <div class="dropdown-menu logout-box">
                        <a class="dropdown-item logout-sub-item" href="{{route('edit.profile')}}">
                            <i class="fa fa-user header-right-icon" aria-hidden="true">
                            </i> 
                            Profile
                        </a>
                        <a class="dropdown-item logout-sub-item" href="{{route('admin.logout')}}">
                            <i class="fa fa-sign-out header-right-icon" aria-hidden="true">
                            </i> 
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>