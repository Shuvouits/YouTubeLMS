@extends('backend.admin.master')

@section('content')
    <div class="page-content">

        <!--breadcrumb-->
        @include('backend.section.breadcrumb', ['title'=> 'Setting', 'sub_title'=> 'Google-Setting'])
        <!--end breadcrumb-->


        <div class="card col-md-10">

            <div class="card-body">

                <div class="card-body p-4">

                    <div style="display: flex; align-items:center; justify-content:space-between">
                        <h5 class="mb-4">Configure Google</h5>

                    </div>




                    <form class="row g-3" method="post" action="{{ route('admin.google.settings.update') }}">
                        @csrf

                        <!-- Validation Error Message -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops! Something went wrong.</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="col-md-12">
                            <label for="client_id" class="form-label">GOOGLE_CLIENT_ID</label>
                            <input type="text" class="form-control" name="client_id" id="client_id"
                                placeholder="Enter google client id"
                                value="{{ old('client_id', $google->client_id ?? '') }}" required>
                        </div>

                        <div class="col-md-12">
                            <label for="secret_key" class="form-label">GOOGLE_CLIENT_SECRET</label>
                            <input type="text" class="form-control" name="secret_key" id="secret_key"
                                placeholder="Enter google secret key"
                                value="{{ old('secret_key', $google->secret_key ?? '') }}" required>
                        </div>




                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4 w-100">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>





    </div>
@endsection
