<div class="card card-item">
    <div class="card-body">
        <h3 class="card-title fs-18 pb-2">Related Courses</h3>
        <div class="divider"><span></span></div>
        @php
          $related_course = \App\Models\Course::where('subcategory_id', $course->subcategory_id)->take(3)->get();

        @endphp

        @foreach($related_course as $course)
        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
            <a href="course-details.html" class="media-img">
                <img class="card-img-top lazy" src="{{ asset($course->course_image) }}"
                data-src="{{ asset($course->course_image) }}" alt="Card image cap">
            </a>
            <div class="media-body">
                <h5 class="fs-15"><a href="course-details.html">The Complete JavaScript
                        Course 2021</a></h5>
                <span class="d-block lh-18 py-1 fs-14">Kamran Ahmed</span>
                <p class="text-black font-weight-semi-bold lh-18 fs-15">$12.99 <span
                        class="before-price fs-14">$129.99</span></p>
            </div>
        </div><!-- end media -->
        @endforeach

        <div class="view-all-course-btn-box">
            <a href="#" class="btn theme-btn w-100">View All Courses <i
                    class="la la-arrow-right icon ml-1"></i></a>
        </div>
    </div>
</div><!-- end card -->
