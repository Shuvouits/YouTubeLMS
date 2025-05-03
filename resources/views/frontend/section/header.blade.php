
<?php
$categories = getCategories();
?>

<header class="header-menu-area bg-white">
    <div class="header-top pr-150px pl-150px border-bottom border-bottom-gray py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i
                                    class="la la-phone mr-1"></i><a href="tel:00123456789"> (00) 123 456 789</a>
                            </li>
                            <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a
                                    href="mailto:contact@aduca.com"> contact@aduca.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
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
                            </button>
                        </div>

                        @if (!auth()->user())
                            <ul
                                class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                                <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i
                                        class="la la-sign-in mr-1"></i><a href="{{ route('login') }}"> Login</a></li>
                                <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a
                                        href="{{ route('register') }}"> Register</a></li>
                            </ul>
                        @else
                            <ul
                                class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                                <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i
                                        class="la la-sign-in mr-1"></i>

                                    @if (auth()->user()->role == 'user')
                                        <a href="{{ route('user.dashboard') }}">Dashboard</a>
                                    @endif

                                    @if (auth()->user()->role == 'admin')
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    @endif

                                    @if (auth()->user()->role == 'instructor')
                                        <a href="{{ route('instructor.dashboard') }}">Dashboard</a>
                                    @endif
                                </li>

                            </ul>
                        @endif





                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{ route('frontend.home') }}" class="logo"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a>
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
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="menu-category">
                                <ul>
                                    <li>
                                        <a href="#">Categories <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="cat-dropdown-menu">

                                            @foreach($categories as $item)
                                            <li>
                                                <a href="course-grid.html">{{$item->name}} <i
                                                        class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    @foreach ($item['subcategory'] as $data)
                                                    <li><a href="#">{{$data->name}}</a></li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                            @endforeach



                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end menu-category -->
                            <form method="post">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control pl-3" type="text" name="search"
                                        placeholder="Search for anything">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="/">Home </a>

                                    </li>
                                    <li>
                                        <a href="#"">All Courses </a>

                                    </li>
                                    <li>
                                        <a href="{{ route('cart') }}">Cart</a>

                                    </li>

                                    <li>
                                        <a href="#">Blog </a>

                                    </li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->



                             <!-----wishlist start--->

                             <div class="shop-cart mr-4">
                                <ul>
                                    <li>
                                        <p class="shop-cart-btn d-flex align-items-center">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                            </svg>

                                            <?php
                                            if (auth()->check()) {
                                                $user_id = auth()->user()->id; // Get the authenticated user's ID
                                                $wishlist = getWishlist(); // Get wishlist data
                                                $wishlist_count = \App\Models\Wishlist::where('user_id', $user_id)->count(); // Count wishlist items
                                            } else {
                                                // Handle the case when the user is not logged in
                                                $wishlist = collect(); // Empty collection if not logged in
                                                $wishlist_count = 0; // No wishlist count if not logged in
                                            }
                                            ?>


                                            <span class="product-count" id="wishlist-count"
                                                style="margin-left: 5px">{{ $wishlist_count }}</span>

                                        </p>

                                        <div id="wishlist-course">

                                            <!---ajax loaded wishlist  frontend.pages.home.partial.wishlist  -->



                                        </div>


                                    </li>
                                </ul>
                            </div><!-- end wishlist -->


                            <div class="shop-cart mr-4" id='cart'>

                                <!--ajax loaded for cart frontend.pages.home.partial.cart  -->

                            </div><!-- end shop-cart -->















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
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">Home</a>

            </li>
            <li>
                <a href="#">cart</a>

            </li>
            <li>
                <a href="{{ route('login') }}">Login</a>

            </li>
            <li>
                <a href=""">All Courses</a>

            </li>
            <li>
                <a href="">Blog</a>

            </li>

            <li>
                <a href="">Contact Us</a>

            </li>

        </ul>
    </div><!-- end off-canvas-menu -->




</header><!-- end header-menu-area -->
