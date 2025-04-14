<div class="course-overview-card pt-4">
    <h3 class="fs-24 font-weight-semi-bold pb-4">Students also bought</h3>
    <div class="view-more-carousel owl-action-styled">

        @forelse($similarCourses as $course)
        <div class="card card-item card-item-list-layout border border-gray shadow-none">
            <div class="card-image">
                <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="{{ asset($course->course_image) }}"
                        data-src="{{ asset($course->course_image) }}" alt="Card image cap">
                </a>
                <div class="course-badge-labels">

                    <div class="course-badge">
                        @if ($course->bestseller == 'yes')
                            Bestseller
                        @elseif($course->featured == 'yes')
                            Featured
                        @else
                            HighestRated
                        @endif
                    </div>

                    <div class="course-badge blue">
                        -{{ round((($course->selling_price - $course->discount_price) / $course->selling_price) * 100) }}%
                    </div>


                </div>
            </div><!-- end card-image -->
            <div class="card-body">
                <h6 class="ribbon ribbon-blue-bg fs-14 mb-3" style="text-transform:capitalize">{{ $course->label }}
                </h6>
                <h5 class="card-title"><a
                        href="{{ route('course-details', $course->course_name_slug) }}">{{ $course->course_name }}</a>
                </h5>

                <p class="card-text">
                    <a href="#">
                        {{ $course['user']['name'] }}
                    </a>
                </p>

                <div class="rating-wrap d-flex align-items-center py-2">
                    <div class="review-stars">
                        <span class="rating-number">3</span>

                    </div>
                    <span class="rating-total pl-1">(10 ratings)</span>
                </div><!-- end rating-wrap -->
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-price text-black font-weight-bold">
                        ${{ $course->discount_price }} <span
                            class="before-price font-weight-medium">{{ $course->selling_price }}</span>
                    </p>


                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer wishlist-icon"
                        title="Add to Wishlist" data-course-id="{{ $course->id }}">




                    </div>


                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    @empty
        <div class="alert alert-danger">
            <p>No Course Found</p>
        </div>
    @endforelse


    </div><!-- end view-more-carousel -->
</div><!-- end course-overview-card -->
