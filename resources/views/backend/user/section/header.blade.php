<header class="header-menu-area">
    <div class="header-menu-content dashboard-menu-content pr-30px pl-30px bg-white shadow-sm">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="logo-box logo--box">
                            <a href="index.html" class="logo"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a>
                            <div class="user-btn-action">


                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                                    data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div><!-- end logo-box -->
                        <div class="menu-wrapper">

                            <div class="nav-right-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">
                                    <div class="shop-cart course-cart pr-3 mr-3 border-right border-right-gray">

                                    </div><!-- end course-cart -->





                                    <div class="shop-cart user-profile-cart">
                                        <ul>
                                            <li>
                                                <div class="shop-cart-btn">
                                                    <div class="avatar-xs">
                                                        <img class="rounded-full img-fluid"
                                                            src="{{asset(auth()->user()->photo)}}" alt="Avatar image">
                                                    </div>
                                                    <span class="dot-status bg-1"></span>
                                                </div>
                                                <ul
                                                    class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center">
                                                        <a href="teacher-detail.html"
                                                            class="avatar-sm flex-shrink-0 d-block">
                                                            <img class="rounded-full img-fluid"
                                                                src="{{asset(auth()->user()->photo)}}"
                                                                alt="Avatar image">
                                                        </a>
                                                        <div class="ml-2">
                                                            <h4><a href="teacher-detail.html"
                                                                    class="text-black">{{auth()->user()->name}}</a></h4>
                                                            <span
                                                                class="d-block fs-14 lh-20">{{auth()->user()->email}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="theme-picker d-flex align-items-center justify-content-center lh-40">
                                                            <button
                                                                class="theme-picker-btn dark-mode-btn w-100 font-weight-semi-bold justify-content-center"
                                                                title="Dark mode">
                                                                <svg class="mr-1" viewBox="0 0 24 24"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path
                                                                        d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z">
                                                                    </path>
                                                                </svg>
                                                                Dark Mode
                                                            </button>
                                                            <button
                                                                class="theme-picker-btn light-mode-btn w-100 font-weight-semi-bold justify-content-center"
                                                                title="Light mode">
                                                                <svg class="mr-1" viewBox="0 0 24 24"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <circle cx="12" cy="12" r="5">
                                                                    </circle>
                                                                    <line x1="12" y1="1"
                                                                        x2="12" y2="3"></line>
                                                                    <line x1="12" y1="21"
                                                                        x2="12" y2="23"></line>
                                                                    <line x1="4.22" y1="4.22"
                                                                        x2="5.64" y2="5.64"></line>
                                                                    <line x1="18.36" y1="18.36"
                                                                        x2="19.78" y2="19.78"></line>
                                                                    <line x1="1" y1="12"
                                                                        x2="3" y2="12"></line>
                                                                    <line x1="21" y1="12"
                                                                        x2="23" y2="12"></line>
                                                                    <line x1="4.22" y1="19.78"
                                                                        x2="5.64" y2="18.36"></line>
                                                                    <line x1="18.36" y1="5.64"
                                                                        x2="19.78" y2="4.22"></line>
                                                                </svg>
                                                                Light Mode
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="generic-list-item">
                                                            <li>
                                                                <a href="/user/course">
                                                                    <i class="la la-file-video-o mr-1"></i> My
                                                                    courses
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/cart">
                                                                    <i class="la la-shopping-basket mr-1"></i> My
                                                                    cart
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/user/wishlist">
                                                                    <i class="la la-heart-o mr-1"></i> My wishlist
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="section-block"></div>
                                                            </li>




                                                            <li>
                                                                <a href="/user/profile">
                                                                    <i class="la la-edit mr-1"></i> Edit profile
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="section-block"></div>
                                                            </li>


                                                            <li>
                                                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                    <i class="la la-power-off mr-1"></i> Logout
                                                                </a>
                                                            </li>
                                                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>





                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->
                                </div>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm"
            data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <h4 class="off-canvas-menu-heading pt-90px">Alerts</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">

            <li><a href="/user/wishlist">Wishlist</a></li>
            <li><a href="/user/course">My cart</a></li>
        </ul>

        <h4 class="off-canvas-menu-heading pt-20px">Profile</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">

            <li><a href="/user/profile">Edit profile</a></li>
            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a></li>
        </ul>


    </div><!-- end off-canvas-menu -->


    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->
