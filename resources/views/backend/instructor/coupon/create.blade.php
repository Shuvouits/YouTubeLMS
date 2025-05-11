@extends('backend.instructor.master')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Coupon</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Coupon</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->


        <div class="card col-md-8">

            <div class="card-body">

                <div class="card-body p-4">

                    <div style="display: flex; align-items:center; justify-content:space-between">
                        <h5 class="mb-4">Create Coupon</h5>
                        <a href="{{route('instructor.coupon.index')}}" class="btn btn-primary">Back</a>

                    </div>

                    <form class="row g-3" method="post" action="{{route('instructor.coupon.store')}}">

                        @csrf

                        @if ($errors->any())
                        <ul class="" style="color: red; list-style:none">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                        <div class="col-md-6">
                            <label for="coupon_name" class="form-label">Coupon Name</label>
                            <input type="text" class="form-control" name="coupon_name" id="coupon_name" value="{{ old('coupon_name') }}"  placeholder="Enter coupon name">
                        </div>
                        <div class="col-md-6">
                            <label for="coupon_discount" class="form-label">Coupon Discount</label>
                            <input type="price" class="form-control" name="coupon_discount" id="coupon_discount"  value="{{ old('coupon_discount') }}"   placeholder="Enter coupon discount">
                        </div>
                        <div class="col-md-6">
                            <label for="coupon_validity" class="form-label">Coupon Validity</label>
                            <input type="date" class="form-control" name="coupon_validity" id="coupon_validity"  value="{{ old('coupon_validity') }}"  >
                        </div>

                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-select"  value="{{ old('status') }}"  >

                                <option selected value='1'>Yes</option>
                                <option value="0">No</option>

                            </select>
                        </div>


                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4 w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>





    </div>
@endsection


