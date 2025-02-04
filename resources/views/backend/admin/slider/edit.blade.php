@extends('backend.admin.master')


@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Slider</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Slider</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->


        <div class="card col-md-12">

            <div class="card-body">

                <div class="card-body p-4">

                    <div style="display: flex; align-items:center; justify-content:space-between">
                        <h5 class="mb-4">Add Slider</h5>
                        <a href="{{ route('admin.slider.index') }}" class="btn btn-primary">Back</a>

                    </div>

                    <form class="row g-3" method="post" action="{{ route('admin.slider.update', $slider->id) }}" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="col-md-12">
                            <label for="slider_title" class="form-label">Slider Title</label>
                            <input type="text" class="form-control" name="title" id="slider_title"
                                placeholder="Enter the slider title" value="{{ old('title', $slider->title) }}" required>
                        </div>

                        <div class="col-md-12">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea class="form-control" name="short_description" id="short_description"
                                placeholder="Enter the short description">{{ $slider->short_description }}</textarea>

                        </div>

                        <div class="col-md-12">
                            <label for="video_url" class="form-label">YouTube Video URL</label>

                            <input type="url" class="form-control" name="video_url" id="video_url"
       placeholder="Enter the YouTube video URL" value="{{ old('video_url', $slider->video_url) }}" required>


                        </div>

                        <div class="col-md-12">
                            <iframe id="videoPreview"
                                    src=""
                                    style="margin-top: 15px; display: none; width: 50%; height: 400px;"
                                    frameborder="0" allowfullscreen>
                            </iframe>
                        </div>


                        <div class="col-md-12">
                            <label for="image" class="form-label">Post Image</label>
                            <input type="file" class="form-control" name="image" id="Photo" accept="image/*">
                        </div>
                        <div class="col-md-12">
                            <img src="{{ asset($slider->image) }}" id="photoPreview" class="img-fluid" style="margin-top: 15px;" />
                        </div>



                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4 w-100">Update Slider</button>
                            </div>
                        </div>


                    </form>
                </div>

            </div>

        </div>





    </div>
@endsection




@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videoUrlField = document.getElementById('video_url');
            const videoPreview = document.getElementById('videoPreview');

            // Initialize iframe with existing video URL from database
            const initialVideoUrl = videoUrlField.value; // Get the initial value from the input
            if (initialVideoUrl) {
                const videoId = extractYouTubeID(initialVideoUrl);
                if (videoId) {
                    videoPreview.src = `https://www.youtube.com/embed/${videoId}`;
                    videoPreview.style.display = 'block';
                }
            }

            // Update iframe on input change
            videoUrlField.addEventListener('input', function() {
                const videoUrl = this.value;
                if (videoUrl) {
                    const videoId = extractYouTubeID(videoUrl);
                    if (videoId) {
                        videoPreview.src = `https://www.youtube.com/embed/${videoId}`;
                        videoPreview.style.display = 'block';
                    } else {
                        alert('Invalid YouTube URL');
                        videoPreview.style.display = 'none';
                        videoPreview.src = '';
                    }
                } else {
                    videoPreview.style.display = 'none';
                    videoPreview.src = '';
                }
            });

            // Function to extract YouTube video ID
            function extractYouTubeID(url) {
                const regex =
                    /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
                const match = url.match(regex);
                return match ? match[1] : null;
            }
        });
    </script>
@endpush

