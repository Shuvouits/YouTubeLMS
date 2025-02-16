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
            <div class="breadcrumb-title pe-3">Instructor</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Instructor</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div style="display: flex; align-items:center; justify-content:space-between">
            <h6 class="mb-0 text-uppercase">All Instructor</h6>
            <a href="{{ route('admin.instructor.index') }}" class="btn btn-primary">Back</a>

        </div>

        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($active_instructor as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($item->photo)
                                            <img src="{{ asset($item->photo) }}" width="70" height="70" />
                                        @else
                                            <span>No image found</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge bg-primary px-3 py-2" style="font-weight: 200">Active</span>
                                        @else
                                            <span class="badge bg-danger px-3 py-2" style="font-weight: 200">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="form-check form-switch" >
                                            <input class="form-check-input" style="cursor: pointer" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault{{ $item->id }}"
                                                data-user-id="{{ $item->id }}"
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
                const userId = $(this).data('user-id'); // Get user ID
                const status = $(this).is(':checked') ? 1 : 0; // Get status (1: Active, 0: Inactive)
                const row = $(this).closest('tr'); // Find the parent row of the checkbox

                $.ajax({
                    url: '{{ route('admin.instructor.status') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                        user_id: userId,
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

                            window.location.reload()
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
