@extends('frontend.master')

@section('content')


    @include('frontend.pages.course-details.breadcrumb')

    <!--======================================
        START COURSE DETAILS AREA
======================================-->
    <section class="course-details-area pb-20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pb-5">
                    <div class="course-details-content-wrap pt-90px">

                        @include('frontend.pages.course-details.learn-section')


                        @include('frontend.pages.course-details.course-content')

                        @include('frontend.pages.course-details.student-bought')

                        @include('frontend.pages.course-details.instructor-about')

                        @include('frontend.pages.course-details.student-feedback')


                        @include('frontend.pages.course-details.review')


                    </div><!-- end course-details-content-wrap -->
                </div><!-- end col-lg-8 -->

                @include('frontend.pages.course-details.right-sidebar')

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end course-details-area -->

    <!-- Modal -->
    @include('frontend.pages.course-details.course-preview-modal')

    @include('frontend.pages.course-details.related-course')


    @include('frontend.pages.course-details.become-teacher')




    <div class="section-block"></div>






@endsection

@push('scripts')




@endpush
