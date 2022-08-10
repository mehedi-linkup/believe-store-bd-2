<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ ($pageName == 'content' || $pageName == 'slide' || $pageName == 'backimage' || $pageName == 'news' || $pageName == 'category' || $pageName == 'subcategory' || $pageName == 'management' || $pageName == 'video' || $pageName == 'gallery' || $pageName == 'product' || $pageName == 'partner' || $pageName == 'whatcontent' || $pageName == 'map' ? 'active' : 'collapsed') }}" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Web Content
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ ($pageName == 'content' || $pageName == 'slider' || $pageName == 'backimage' || $pageName == 'news' || $pageName == 'category' || $pageName == 'subcategory' || $pageName == 'management' || $pageName == 'video' || $pageName == 'gallery' || $pageName == 'product' || $pageName == 'partner' || $pageName == 'whatcontent' || $pageName == 'map' ? 'show' : '') }}" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('company.edit') }}"><i class="fa fa-minus"></i>&nbsp;Company Content</a>
                        <a class="nav-link" href="{{ route('slider.index') }}"><i class="fas fa-minus"></i>&nbsp;Slider</a>
                        <a class="nav-link" href="{{ route('whatwe.edit') }}"><i class="fas fa-minus"></i>&nbsp;About Us</a>
                        <a class="nav-link" href="{{ route('backimage.edit') }}"><i class="fas fa-minus"></i>&nbsp;Background Image</a>
                        <!-- <a class="nav-link" href="{{ route('service') }}">_Servi_ce</a> -->
                        <a class="nav-link" href="{{ route('admin.categories') }}"><i class="fas fa-minus"></i>&nbsp;Category</a>
                        <a class="nav-link" href="{{ route('admin.subcategories') }}"><i class="fas fa-minus"></i>&nbsp;Subcategory</a>
                        <a class="nav-link" href="{{ route('admin.products') }}"><i class="fas fa-minus"></i>&nbsp;Product</a>
                        <a class="nav-link" href="{{ route('management.index') }}"><i class="fas fa-minus"></i>&nbsp;Management</a>
                        <a class="nav-link" href="{{ route('gallery') }}"><i class="fas fa-minus"></i>&nbsp;Gallery</a>
                        <a class="nav-link" href="{{ route('videos') }}"><i class="fas fa-minus"></i>&nbsp;Video</a>
                        <a class="nav-link" href="{{ route('news') }}"><i class="fas fa-minus"></i>&nbsp;News & Events</a>
                        <a class="nav-link" href="{{ route('partner.index') }}"><i class="fas fa-minus"></i>&nbsp;Partner</a>
                        <a class="nav-link" href="{{ route('maps.edit') }}"><i class="fas fa-minus"></i>&nbsp;Map</a>
                    </nav>
                </div>

                {{-- <a class="nav-link {{ ($pageName == 'message' || $pageName == 'query') ? 'active' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                    Messages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> --}}
                {{-- <div class="collapse {{ ($pageName == 'message' || $pageName == 'query') ? 'show' : '' }}" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.query') }}">Customer Query</a>
                        <a class="nav-link" href="{{ route('admin.message') }}">Message</a>
                    </nav>
                </div> --}}
                <a class="nav-link {{ ($pageName == 'profile' || $pageName == 'register') ? 'active' : 'collapsed' }} " href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                    <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                    Authentication
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ ($pageName == 'profile' || $pageName == 'register') ? 'show' : '' }}" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('register.create') }}"><i class="fas fa-minus"></i>&nbsp;Add New User</a>
                        <a class="nav-link" href="{{ route('settings') }}"><i class="fas fa-minus"></i>&nbsp;Update Profile</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{ route('logout') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-power-off"></i></div>
                    Sign Out 
                </a>
            </div>
        </div>
    </nav>
</div>