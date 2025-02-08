@extends('backend.admin.master')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Info Box</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Info</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div style="display: flex; align-items:center; justify-content:space-between">
            <h6 class="mb-0 text-uppercase">All InfoBox</h6>


        </div>

        <hr />
        <div class="row">

            <div class="col-md-4">

                <div class="card">

                    <div class="card-title text-center mt-3">
                        <h5>INFO BOX-1</h5>

                    </div>
                    <div class="card-body">

                        <form class="row g-3" method="post" action="{{route('admin.info.update', $first_info->id ?? '1')}}" >

                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <label for="icon" class="form-label">Icon</label>
                                <textarea class="form-control" name="icon" placeholder="Enter the svg icon only" rows="5">{{$first_info->icon ?? ""}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="name" value="{{$first_info->title ?? ""}}" placeholder="Place the title">
                            </div>

                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                               <textarea class="form-control" name="description" placeholder="Given the description" rows="3">{{$first_info->description ?? ""}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Update</button>

                        </form>



                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="card">

                    <div class="card-title text-center mt-3">
                        <h5>INFO BOX-2</h5>

                    </div>
                    <div class="card-body">

                        <form class="row g-3" method="post" action="{{route('admin.info.update', $second_info->id ?? '2' )}}" >

                            @csrf

                            @method('PUT')

                            <div class="col-md-12">
                                <label for="icon" class="form-label">Icon</label>
                                <textarea class="form-control" name="icon" placeholder="Enter the svg icon only" rows="5">{{$second_info->icon ?? ""}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="name" value="{{$second_info->title ?? ""}}" placeholder="Place the title">
                            </div>

                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                               <textarea class="form-control" name="description" placeholder="Given the description" rows="3">{{$second_info->description ?? ""}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Update</button>

                        </form>



                    </div>
                </div>

            </div>



            <div class="col-md-4">

                <div class="card">

                    <div class="card-title text-center mt-3">
                        <h5>INFO BOX-3</h5>

                    </div>
                    <div class="card-body">

                        <form class="row g-3" method="post" action="{{route('admin.info.update', $third_info->id ?? '3' )}}" >

                            @csrf

                            @method('PUT')

                            <div class="col-md-12">
                                <label for="icon" class="form-label">Icon</label>
                                <textarea class="form-control" name="icon" placeholder="Enter the svg icon only" rows="5">{{$third_info->icon ?? ""}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="name" value="{{$third_info->title ?? ""}}" placeholder="Place the title">
                            </div>

                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                               <textarea class="form-control" name="description" placeholder="Given the description" rows="3">{{$third_info->description ?? ""}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Update</button>

                        </form>



                    </div>
                </div>

            </div>




        </div>



    </div>
@endsection


