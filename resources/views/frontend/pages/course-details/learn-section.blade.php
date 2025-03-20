<div class="course-overview-card bg-gray p-4 rounded">
    <h3 class="fs-24 font-weight-semi-bold pb-3">What you'll learn?</h3>
    <ul class="generic-list-item overview-list-item">

        @foreach ($course['course_goal'] as $item)
        <li><i class="la la-check mr-1 text-black"></i> {{ $item->goal_name }}</li>
    @endforeach

    
    </ul>
</div><!-- end course-overview-card -->
