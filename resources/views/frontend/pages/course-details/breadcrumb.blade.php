<section class="breadcrumb-area pt-50px pb-50px bg-white pattern-bg">
    <div class="container">
        <div class="col-lg-8 mr-auto">
            <div class="breadcrumb-content">
                <ul class="generic-list-item generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">{{ $course['category']['name'] }}</a></li>
                    <li><a href="#">{{ $course['subcategory']['name'] }}</a></li>
                </ul>

                <div class="section-heading">
                    <h2 class="section__title">{{ $course['course_name'] }}</h2>
                    <p class="section__desc pt-2 lh-30">{{ $course['course_title'] }}</p>
                </div><!-- end section-heading -->

                <div class="d-flex flex-wrap align-items-center pt-3">

                    <h6 class="ribbon ribbon-lg mr-2 bg-3 text-white" style="text-transform: capitalize">
                        {{ $course['label'] }}</h6>

                    <div class="rating-wrap d-flex flex-wrap align-items-center">
                        <div class="review-stars">
                            <span class="rating-number">4.4</span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star-o"></span>
                        </div>
                        <span class="rating-total pl-1">(20,230 ratings)</span>
                        <span class="student-total pl-2">540,815 students</span>
                    </div>
                </div><!-- end d-flex -->

                <p class="pt-2 pb-1">Created by <a href="teacher-detail.html"
                    class="text-color hover-underline">{{ $course['user']['name'] }}</a></p>

                <div class="d-flex flex-wrap align-items-center">
                    <p class="pr-3 d-flex align-items-center">
                        <svg class="svg-icon-color-gray mr-1" width="16px" viewBox="0 0 24 24">
                            <path
                                d="M23 12l-2.44-2.78.34-3.68-3.61-.82-1.89-3.18L12 3 8.6 1.54 6.71 4.72l-3.61.81.34 3.68L1 12l2.44 2.78-.34 3.69 3.61.82 1.89 3.18L12 21l3.4 1.46 1.89-3.18 3.61-.82-.34-3.68L23 12zm-10 5h-2v-2h2v2zm0-4h-2V7h2v6z">
                            </path>
                        </svg>
                        Last updated {{ \Carbon\Carbon::parse($course->updated_at)->format('d F Y') }}
                    </p>
                    <p class="pr-3 d-flex align-items-center">
                        <svg class="svg-icon-color-gray mr-1" width="16px" viewBox="0 0 24 24">
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95a15.65 15.65 0 00-1.38-3.56A8.03 8.03 0 0118.92 8zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56A7.987 7.987 0 015.08 16zm2.95-8H5.08a7.987 7.987 0 014.33-3.56A15.65 15.65 0 008.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 01-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z">
                            </path>
                        </svg>
                        English
                    </p>
                </div><!-- end d-flex -->
                <div class="bread-btn-box pt-3">
                    <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 mr-2 mb-2">
                        <i class="la la-heart-o mr-1"></i>
                        <span class="swapping-btn" data-text-swap="Wishlisted"
                            data-text-original="Wishlist">Wishlist</span>
                    </button>
                    <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 mr-2 mb-2"
                        data-toggle="modal" data-target="#shareModal">
                        <i class="la la-share mr-1"></i>Share
                    </button>
                    <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 mb-2"
                        data-toggle="modal" data-target="#reportModal">
                        <i class="la la-flag mr-1"></i>Report abuse
                    </button>
                </div>
            </div><!-- end breadcrumb-content -->
        </div><!-- end col-lg-8 -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
