@extends('backend.admin.master')



@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Course</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div style="display: flex; align-items:center; justify-content:space-between">
            <h6 class="mb-0 text-uppercase">View Course</h6>

            <a href="{{route('admin.course.index')}}" class="btn btn-primary px-5">Back</a>

        </div>

        <hr />

        <div class="row g-4"> <!-- এখানে g-4 ক্লাসটি গ্যাপ যোগ করবে -->

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item align-items-center">
                                <h6> Course Name</h6>

                                <span class="">
                                    {{$course->course_name}}
                                </span>
                            </li>
                            <li class="list-group-item  align-items-center">
                               <h6>Course Title</h6>


                                <span class="">
                                    {{$course->course_title}}
                                </span>
                            </li>
                            <li class="list-group-item align-items-center">
                                <h6>Category</h6>

                                <span class="">{{$course->category->name}}</span>
                            </li>
                            <li class="list-group-item align-items-center">
                                <h6>
                                    Subcategory

                                </h6>

                                <span class="">
                                    {{$course->subCategory->name}}
                                </span>
                            </li>
                            <li class="list-group-item align-items-center">
                                <h6>Instructor</h6>

                                <span class="">
                                    {{$course->user->name}}
                                </span>
                            </li>

                            <li class="list-group-item align-items-center">
                                <h6>Status</h6>

                                <span class="">
                                    @if($course->status == 0)
                                    Inactive
                                    @else
                                    Active
                                    @endif

                                </span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h6> Selling Price</h6>

                                <span class="" style="font-size: 17px">
                                    ${{$course->selling_price}}
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h6> Discount Price</h6>

                                <span class="" style="font-size: 17px">
                                    ${{$course->discount_price}}
                                </span>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item  align-items-center">
                                <h6> Intro Video</h6>


                                @if(!empty($course->video))
                                <video width="100%" controls>
                                    <source src="{{ asset($course->video) }}" type="video/mp4">
                                    <source src="{{ asset($course->video) }}" type="video/webm">
                                    <source src="{{ asset($course->video) }}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                <p>No video available</p>
                            @endif

                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h6>Resources</h6>

                                <span class="" style="font-size: 20px">{{$course->resources}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h6>Certificate</h6>

                                <span class="" style="font-size: 20px">
                                    @if($course->certificate == 'yes')
                                    Yes
                                    @else
                                    No
                                    @endif
                                </span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>






    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.form-check-input').on('change', function() {
                const courseId = $(this).data('course-id'); // Get user ID

                const status = $(this).is(':checked') ? 1 : 0; // Get status (1: Active, 0: Inactive)
                const row = $(this).closest('tr'); // Find the parent row of the checkbox

                $.ajax({
                    url: '{{ route('admin.course.status') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                        course_id: courseId,
                        status: status
                    },
                    success: function(response) {
                        if (response.success) {
                            // Update the status badge dynamically
                            const statusBadge = row.find('td:nth-child(6) .badge');
                            if (status === 1) {
                                statusBadge
                                    .removeClass('bg-danger')
                                    .addClass('bg-primary')
                                    .text('Active');
                            } else {
                                statusBadge
                                    .removeClass('bg-primary')
                                    .addClass('bg-danger')
                                    .text('Inactive');
                            }

                            // Show SweetAlert Toast Notification
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: response.message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'error',
                                title: 'Error: ' + response.message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: 'An error occurred while updating the status.',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                });
            });
        });
    </script>
@endpush
