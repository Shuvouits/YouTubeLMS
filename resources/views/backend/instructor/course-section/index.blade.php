@extends('backend.instructor.master')

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
                        <li class="breadcrumb-item active" aria-current="page">Sections</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div style="display: flex; align-items:center; justify-content:space-between">
                    <h6 class="mb-0 text-uppercase">All content sections</h6>
                    <a href="{{ route('instructor.course.index') }}" class="btn btn-danger px-5">Back</a>

                </div>

                <hr />
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset($course->course_image) }}" class="rounded-circle p-1 border" width="90"
                                height="90" alt="...">
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mt-0">{{ $course->course_name }}</h6>
                                <p class="mb-0">{{ $course->course_title }}
                                </p>
                            </div>
                            <div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add
                                    Section</button>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($course_wise_lecture as $data)
                    <div class="card col-md-12 radius-10">
                        <div class="card-body">

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <svg style="cursor: pointer" data-bs-toggle="collapse" data-bs-target="#demo{{$data->id}}" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                    </svg>
                                    <!-- Title -->
                                    <div class="ms-3">
                                        <h6 class="mt-0 mb-0">{{ $data->section_title }}</h6>

                                    </div>
                                </div>
                                <!-- Button -->
                                <div style="display: flex; alin-items: center; gap: 10">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#course-{{ $data->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                          </svg>

                                    </button>

                                    <div>

                                        <a href="javascript:void(0)" class="btn btn-danger delete-section"
                                            data-id="{{ $data->id }}" style="margin-left: 10px">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                              </svg>
                                        </a>

                                        <form id="delete-form" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </div>


                                </div>
                            </div>

                            <hr>

                            <div class="mt-3 collapse show" id="demo{{$data->id}}">
                                @foreach ($data['lecture'] as $lecture)
                                    <div style="display: flex; align-items:center; justify-content:space-between;">
                                        <div style="display: flex; gap: 10px">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg>
                                            </span>
                                            <p>{{ $lecture->lecture_title }}</p>
                                        </div>
                                        <div>
                                            <a class="btn btn-dark" data-bs-toggle="modal"
                                                data-bs-target="#course-edit-{{ $lecture->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>

                                            <a href="javascript:void(0)" class="btn btn-danger delete-lecture"
                                                data-id="{{ $lecture->id }}" style="margin-left: 10px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                </svg>
                                            </a>

                                            <form id="delete-form" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>


                                        </div>

                                    </div>
                                    <div style="margin-top: 10px"></div>

                                    <!-- Edit Course Modal -->
                                    @include('backend.instructor.course-section.modal.course-edit-modal')
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <!-- Add Course Modal -->
                    @include('backend.instructor.course-section.modal.course-create-modal')
                @endforeach


            </div>
        </div>



        <!-- course section Modal -->
        @include('backend.instructor.course-section.modal.create-section-modal')





    </div>
@endsection

@push('scripts')
    <script src="{{ asset('customjs/instructor/lecture.js') }}"></script>

    <script>
        $(document).on('click', '.delete-lecture', function(e) {
            e.preventDefault();

            let Id = $(this).data('id');
            let deleteUrl = "{{ route('instructor.lecture.destroy', ':id') }}".replace(':id', Id);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-form').attr('action', deleteUrl).submit();
                }
            });
        });
    </script>

<script>
    $(document).on('click', '.delete-section', function(e) {
        e.preventDefault();

        let Id = $(this).data('id');
        let deleteUrl = "{{ route('instructor.course-section.destroy', ':id') }}".replace(':id', Id);

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#delete-form').attr('action', deleteUrl).submit();
            }
        });
    });
</script>


@endpush
