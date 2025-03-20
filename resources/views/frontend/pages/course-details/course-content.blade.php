<div class="course-overview-card">
    <h3 class="fs-24 font-weight-semi-bold pb-3">Description</h3>

    <!-- Truncated Description -->
    <div  class="">
        {!! $course->description !!}
    </div>


</div>


<div class="course-overview-card">
    <div class="curriculum-header d-flex align-items-center justify-content-between pb-4">
        <h3 class="fs-24 font-weight-semi-bold">Course content</h3>
        <div class="curriculum-duration fs-15">
            <span class="curriculum-total__text mr-2"><strong
                class="text-black font-weight-semi-bold">Total:</strong> {{$total_lecture}} lectures</span>


            <span class="curriculum-total__hours"><strong
                    class="text-black font-weight-semi-bold">Total hours:</strong>
                02:35:47</span>
        </div>
    </div>
    <div class="curriculum-content">
        <div id="accordion" class="generic-accordion">

            @foreach ($course_content as $index => $item)
            <div class="card">
                <div class="card-header" id="heading-{{ $index }}">
                    <button
                        class="btn btn-link d-flex align-items-center justify-content-between"
                        data-toggle="collapse" data-target="#collapse-{{ $index }}"
                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                        aria-controls="collapse-{{ $index }}">
                        <i class="la la-plus"></i>
                        <i class="la la-minus"></i>
                        {{ $item->section_title }}
                        <span class="fs-15 text-gray font-weight-medium">{{$item['lecture']->count()}} lectures</span>
                    </button>
                </div><!-- end card-header -->
                <div id="collapse-{{ $index }}"
                    class="collapse {{ $index == 0 ? 'show' : '' }}"
                    aria-labelledby="heading-{{ $index }}" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="generic-list-item">

                            @foreach ($item['lecture'] as $lecture)
                                <li>
                                    <a href="#"
                                        class="d-flex align-items-center justify-content-between text-color"
                                        data-toggle="modal" data-target="">
                                        <span>
                                            <i class="la la-play-circle mr-1"></i>
                                            {{ $lecture->lecture_title }}

                                        </span>
                                        <span>{{$lecture->video_duration}}</span>
                                    </a>
                                </li>
                            @endforeach



                        </ul>
                    </div><!-- end card-body -->
                </div><!-- end collapse -->


            </div><!-- end card -->
        @endforeach


        
        </div><!-- end generic-accordion -->
    </div><!-- end curriculum-content -->
</div><!-- end course-overview-card -->
