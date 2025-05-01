<header class="header-menu-area">
    <div class="header-menu-content dashboard-menu-content pr-30px pl-30px bg-white shadow-sm">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="logo-box logo--box">
                            <a href="index.html" class="logo">
                                <img src="{{asset('frontend/images/logo.png')}}" alt="logo">

                            </a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                                    data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div><!-- end logo-box -->
                        <div class="menu-wrapper">
                            <form method="post" class="mr-auto ml-0">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control form--control-gray pl-3" type="text"
                                        name="search" placeholder="Search for anything">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <div class="nav-right-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">
                                    <div>
                                        <a style="margin-right: 25px" href="/" target="_blank">Explore LMS</a>
                                    </div>
                                    <div class="shop-cart course-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>

                                            <li>
                                                <p class="shop-cart-btn d-flex align-items-center fs-16">
                                                    My Courses
                                                    <span class="la la-angle-down fs-13 ml-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none">
                                                    <li class="media media-card">
                                                        <a href="lesson-details.html" class="media-img">
                                                            <img class="mr-3" src="{{asset('frontend/images/small-img-3.jpg')}}"
                                                                alt="Course thumbnail image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="lesson-details.html">The Complete
                                                                    JavaScript Course 2021: From Zero to Expert!</a>
                                                            </h5>
                                                            <div class="skillbar-box pt-3">
                                                                <div class="skillbar skillbar-skillbar"
                                                                    data-percent="36%">
                                                                    <div class="skillbar-bar skillbar--bar bg-1">
                                                                    </div>
                                                                </div><!-- End Skill Bar -->
                                                            </div><!-- End skillbar-box -->
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <a href="lesson-details.html" class="media-img">
                                                            <img class="mr-3" src="{{asset('frontend/images/small-img-4.jpg')}}"
                                                                alt="Course thumbnail image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="lesson-details.html">The Complete
                                                                    JavaScript Course 2021: From Zero to Expert!</a>
                                                            </h5>
                                                            <div class="skillbar-box pt-3">
                                                                <div class="skillbar skillbar-skillbar"
                                                                    data-percent="77%">
                                                                    <div class="skillbar-bar skillbar--bar bg-1">
                                                                    </div>
                                                                </div><!-- End Skill Bar -->
                                                            </div><!-- End skillbar-box -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="my-courses.html" class="btn theme-btn w-100">Got
                                                            to my course <i
                                                                class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end course-cart -->


                                    <!-----Ajax cart Loading-->

                                    <div  class="shop-cart mr-4" id="cart">

                                    </div>


                                    <!---Ajax Wishlist data shown --->
                                    <div id="wishlist-course">


                                    </div>





                                    <div
                                        class="shop-cart notification-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn">
                                                    <i class="la la-bell"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul
                                                    class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li
                                                        class="menu-heading-block d-flex align-items-center justify-content-between">
                                                        <h4>Notifications</h4>
                                                        <span class="ribbon fs-14">18</span>
                                                    </li>
                                                    <li>
                                                        <div class="notification-body">
                                                            <a href="dashboard.html"
                                                                class="media media-card align-items-center">
                                                                <div
                                                                    class="icon-element icon-element-sm flex-shrink-0 bg-1 mr-3 text-white">
                                                                    <i class="la la-bolt"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>Your resume updated!</h5>
                                                                    <span
                                                                        class="d-block lh-18 pt-1 text-gray fs-13">1
                                                                        hour ago</span>
                                                                </div>
                                                            </a>
                                                            <a href="dashboard.html"
                                                                class="media media-card align-items-center">
                                                                <div
                                                                    class="icon-element icon-element-sm flex-shrink-0 bg-2 mr-3 text-white">
                                                                    <i class="la la-lock"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>You changed password</h5>
                                                                    <span
                                                                        class="d-block lh-18 pt-1 text-gray fs-13">November
                                                                        12, 2019</span>
                                                                </div>
                                                            </a>
                                                            <a href="dashboard.html"
                                                                class="media media-card align-items-center">
                                                                <div
                                                                    class="icon-element icon-element-sm flex-shrink-0 bg-3 mr-3 text-white">
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>Your account has been created successfully
                                                                    </h5>
                                                                    <span
                                                                        class="d-block lh-18 pt-1 text-gray fs-13">November
                                                                        12, 2019</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="menu-heading-block">
                                                        <a href="dashboard.html" class="btn theme-btn w-100">Show
                                                            All Notifications <i
                                                                class="la la-arrow-right icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->


                                    <div class="shop-cart user-profile-cart">
                                        <ul>
                                            <li>
                                                <div class="shop-cart-btn">
                                                    <div class="avatar-xs">
                                                        <img class="rounded-full img-fluid"
                                                            src="{{ auth()->user()->photo ? asset(auth()->user()->photo) : asset('frontend/images/small-avatar-1.jpg')}}" alt="Avatar image">
                                                    </div>
                                                    <span class="dot-status bg-1"></span>
                                                </div>
                                                <ul
                                                    class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center">
                                                        <a href="teacher-detail.html"
                                                            class="avatar-sm flex-shrink-0 d-block">
                                                            <img class="rounded-full img-fluid"
                                                                src="{{auth()->user()->photo ? asset(auth()->user()->photo) : asset('frontend/images/small-avatar-1.jpg')}}"
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
                                                                <a href="#">
                                                                    <i class="la la-file-video-o mr-1"></i> My
                                                                    courses
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="">
                                                                    <i class="la la-shopping-basket mr-1"></i> My
                                                                    cart
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="la la-heart-o mr-1"></i> My wishlist
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="section-block"></div>
                                                            </li>

                                                            <li>
                                                                <a href="{{ route('user.profile') }}">
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





                                                            <li>
                                                                <div class="section-block"></div>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="position-relative">
                                                                    <span
                                                                        class="fs-17 font-weight-semi-bold d-block">Aduca
                                                                        for Business</span>
                                                                    <span
                                                                        class="lh-20 d-block fs-14 text-gray">Bring
                                                                        learning to your company</span>
                                                                    <span
                                                                        class="position-absolute top-0 right-0 mt-3 mr-3 fs-18 text-gray">
                                                                        <i class="la la-external-link"></i>
                                                                    </span>
                                                                </a>
                                                            </li>



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



    {{--

      <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm"
            data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <h4 class="off-canvas-menu-heading pt-90px">Alerts</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="dashboard.html">Notifications</a></li>
            <li><a href="dashboard-message.html">Messages</a></li>
            <li><a href="my-courses.html">Wishlist</a></li>
            <li><a href="shopping-cart.html">My cart</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">Account</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="dashboard-settings.html">Account settings</a></li>
            <li><a href="dashboard-purchase-history.html">Purchase history</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">Profile</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="student-detail.html">Public profile</a></li>
            <li><a href="dashboard-settings.html">Edit profile</a></li>
            <li><a href="index.html">Log out</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">More from Aduca</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1">
            <li><a href="for-business.html">Aduca for Business</a></li>
            <li><a href="#">Get the app</a></li>
            <li><a href="invite.html">Invite friends</a></li>
            <li><a href="contact.html">Help</a></li>
        </ul>
        <div class="theme-picker d-flex align-items-center justify-content-center mt-4 px-3">
            <button
                class="theme-picker-btn dark-mode-btn btn theme-btn-sm theme-btn-white w-100 font-weight-semi-bold justify-content-center"
                title="Dark mode">
                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
                Dark Mode
            </button>
            <button
                class="theme-picker-btn light-mode-btn btn theme-btn-sm theme-btn-white w-100 font-weight-semi-bold justify-content-center"
                title="Light mode">
                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                Light Mode
            </button>
        </div>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm"
            data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <h4 class="off-canvas-menu-heading pt-90px">Learn</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="my-courses.html">My learning</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">Categories</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1">
            <li>
                <a href="course-grid.html">Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Development</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Game Development</a></li>
                    <li><a href="#">Databases</a></li>
                    <li><a href="#">Programming Languages</a></li>
                    <li><a href="#">Software Testing</a></li>
                    <li><a href="#">Software Engineering</a></li>
                    <li><a href="#">E-Commerce</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">business</a>
                <ul class="sub-menu">
                    <li><a href="#">All Business</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Entrepreneurship</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Home Business</a></li>
                    <li><a href="#">Communications</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">IT & Software</a>
                <ul class="sub-menu">
                    <li><a href="#">All IT & Software</a></li>
                    <li><a href="#">IT Certification</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Network & Security</a></li>
                    <li><a href="#">Operating Systems</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Finance & Accounting</a>
                <ul class="sub-menu">
                    <li><a href="#"> All Finance & Accounting</a></li>
                    <li><a href="#">Accounting & Bookkeeping</a></li>
                    <li><a href="#">Cryptocurrency & Blockchain</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Investing & Trading</a></li>
                    <li><a href="#">Other Finance & Economics</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">design</a>
                <ul class="sub-menu">
                    <li><a href="#">All Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Design Tools</a></li>
                    <li><a href="#">3D & Animation</a></li>
                    <li><a href="#">User Experience</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Personal Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Personal Development</a></li>
                    <li><a href="#">Personal Transformation</a></li>
                    <li><a href="#">Productivity</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Personal Finance</a></li>
                    <li><a href="#">Career Development</a></li>
                    <li><a href="#">Parenting & Relationships</a></li>
                    <li><a href="#">Happiness</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Marketing</a>
                <ul class="sub-menu">
                    <li><a href="#">All Marketing</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Video & Mobile Marketing</a></li>
                    <li><a href="#">Affiliate Marketing</a></li>
                    <li><a href="#">Growth Hacking</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Health & Fitness</a>
                <ul class="sub-menu">
                    <li><a href="#">All Health & Fitness</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Dieting</a></li>
                    <li><a href="#">Self Defense</a></li>
                    <li><a href="#">Meditation</a></li>
                    <li><a href="#">Mental Health</a></li>
                    <li><a href="#">Yoga</a></li>
                    <li><a href="#">Dance</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Photography</a>
                <ul class="sub-menu">
                    <li><a href="#">All Photography</a></li>
                    <li><a href="#">Digital Photography</a></li>
                    <li><a href="#">Photography Fundamentals</a></li>
                    <li><a href="#">Commercial Photography</a></li>
                    <li><a href="#">Video Design</a></li>
                    <li><a href="#">Photography Tools</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search"
                        placeholder="Search for anything">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>


    --}}








</header><!-- end header-menu-area -->
