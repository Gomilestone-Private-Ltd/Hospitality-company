<div class="Sidebar sidebar-web-view" id="main-sidebar">

    <div class="side-bar">
        <div class="menu">
            <div class="item">
                <a href="{{ route('dashboard') }}" class="sub-btn nav-link dropdown-btns" id="crunch"> Dashboard </a>
                <a href="{{ route('category') }}" class="sub-btn nav-link dropdown-btns" id="crunch"> Category </a>
                <a href="{{ route('subcategory') }}" class="sub-btn nav-link dropdown-btns" id="crunch"> Sub Category
                </a>
                <a href="{{ route('supersubcategory') }}" class="sub-btn nav-link dropdown-btns" id="crunch">Super
                    Sub Category </a>
                <a href="{{ route('products') }}" class="sub-btn nav-link dropdown-btns" id="crunch"> Products </a>
                <a href="{{ route('orders') }}" class="sub-btn nav-link dropdown-btns" id="crunch"> Orders </a>

                <a href="{{ route('get.in.touch') }}" class="sub-btn nav-link dropdown-btns" id="crunch"> Get In Touch </a>
                <a href="{{ route('work.with.us') }}" class="sub-btn nav-link dropdown-btns" id="crunch"> Work With Us </a>
                <a href="{{ route('contact.us') }}" class="sub-btn nav-link dropdown-btns" id="crunch"> Contact Us </a>
                <div class="accordion" id="accordionSidebar">
                    <div class="card side-setting-drop">
                        <div class="card-header sub-btn nav-link dropdown-btns collapsed" data-toggle="collapse"
                            data-target="#settingDrop">
                            <span class="accordion-title">Setting</span>
                            <span class="accicon"><i class="fa fa-angle-down rotate-icon" aria-hidden="true"></i></span>
                        </div>
                        
                        <div id="settingDrop" class="collapse" data-parent="#accordionSidebar">
                            <div class="card-body side-setting-dropdown">
                                <div>
                                    <a href="{{ route('color') }}" class="sub-btn nav-link" id="crunch"> Color </a>
                                    <a href="{{ route('size') }}" class="sub-btn nav-link" id="crunch">  Size </a>
                                    <a href="{{ route('material') }}" class="sub-btn nav-link" id="crunch"> Material </a>
                                    <a href="{{ route('ideal.for') }}" class="sub-btn nav-link" id="crunch"> Ideal For </a>
                                    <a href="{{ route('area.of.use') }}" class="sub-btn nav-link" id="crunch"> Area of Use </a>
                                    <a href="{{ route('setting') }}" class="sub-btn nav-link" id="crunch"> Gerneral Setting
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded-box"></div>
    <div class="rounded-small-box"></div>
</div>
