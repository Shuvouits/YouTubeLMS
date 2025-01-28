@extends('backend.admin.master')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Category</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update Category</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->


        <div class="card col-md-8">

            <div class="card-body">

                <div class="card-body p-4">
                    <div style="display: flex; align-items:center; justify-content:space-between">
                        <h5 class="mb-4">Update Category</h5>
                        <a href="{{route('admin.category.index')}}" class="btn btn-primary">Back</a>

                    </div>

                    <form class="row g-3" method="post" action="{{route('admin.category.update', $category->id)}}" enctype="multipart/form-data">
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


                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter the category name" value="{{$category->name}}">
                        </div>
                        <div class="col-md-6">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter the slug" value="{{$category->slug}}">
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="Photo">
                        </div>

                        @if($category->image)
                        <div class="col-md-6">

                            <img src="{{asset($category->image)}}" id="photoPreview" width="60" height="60" style="margin-top: 15px" />
                        </div>
                        @endif
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

@push('scripts')

<script src="{{asset('customjs/admin/category.js')}}"></script>

@endpush
