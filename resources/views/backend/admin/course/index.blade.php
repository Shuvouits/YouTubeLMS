@extends('backend.admin.master')

<style>
    .form-check-input {
        width: 2.5rem;
        /* Adjust the width */
        height: 1.5rem;
        /* Adjust the height */
        transform: scale(1.3);
        /* Scale the entire switch */
    }
</style>

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
            <h6 class="mb-0 text-uppercase">All Course</h6>

        </div>

        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Course Name</th>
                                <th>Instructor</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Show</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_courses as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($item->course_image)
                                            <img src="{{ asset($item->course_image) }}" width="140" height="80" />
                                        @else
                                            <span>No image found</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->course_name }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>
                                        @if($item->discount_price)
                                        <span>${{$item->discount_price}}</span>
                                        @else
                                        <span>${{$item->selling_price}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.course.show', $item->id )}}" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                              </svg>

                                        </a>

                                    </td>
                                    <td>
                                        <div class="form-check form-switch" >
                                            <input class="form-check-input" style="cursor: pointer" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault{{ $item->id }}"
                                                data-course-id="{{ $item->id }}"
                                                {{ $item->status == 1 ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


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
