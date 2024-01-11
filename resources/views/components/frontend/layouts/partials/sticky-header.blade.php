<div id="sticky-header" class="header-menu-section">
    <div class="container">
        <div class="row header-border">
            <div class="col-lg-3 col-md-12">
                <div class="header-logo">
                    {{-- <a class="menu-logo" href="index.html"><img src="{{ asset('ui/frontend/assets')}}/images/fav-icon/delton.png" alt=""></a>  --}}
                    <a class="menu-logo" href="{{route('home')}}"><img src="{{ asset('ui/frontend/assets')}}/images/nss-logo/white/nss-logo-2448-x-1500.png" height="50px" alt=""></a> 
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="header-menu">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a>
                        </li>
                        <li><a href="{{route('about-us')}}">About</a>
                        </li>
                        <li><a href="{{route('services')}}">Service</a></li>
                        {{-- <li><a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-List.html">Blog List</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{route('contact-us')}}">Contact</a></li>
                    </ul>
                    <div class="sidebar">
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"><i class="fas fa-bars"></i></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>