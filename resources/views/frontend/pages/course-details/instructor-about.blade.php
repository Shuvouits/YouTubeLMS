<div class="course-overview-card pt-4">
    <h3 class="fs-24 font-weight-semi-bold pb-4">About the instructor</h3>
    <div class="instructor-wrap">
        <div class="media media-card">
            <div class="instructor-img">
                <a href="teacher-detail.html" class="media-img d-block">
                    <img class="lazy" src="{{ $course['user']['photo'] }}"
                        data-src="{{ $course['user']['photo'] }}" alt="Avatar image">
                </a>
                <ul class="generic-list-item pt-3">
                    <li><i class="la la-star mr-2 text-color-3"></i> 4.6 Instructor Rating</li>
                    <li><i class="la la-user mr-2 text-color-3"></i> 45,786 Students</li>
                    <li><i class="la la-comment-o mr-2 text-color-3"></i> 2,533 Reviews</li>
                    <li><i class="la la-play-circle-o mr-2 text-color-3"></i> 24 Courses</li>
                    <li><a href="teacher-detail.html">View all Courses</a></li>
                </ul>
            </div><!-- end instructor-img -->
            <div class="media-body">
                <h5><a href="#">{{ $course['user']['name'] }}</a></h5>

                <div class="bio-collapsible">
                    {!! $course['user']['bio'] !!}

                </div>







            </div>
        </div>
    </div><!-- end instructor-wrap -->
</div><!-- end course-overview-card -->
