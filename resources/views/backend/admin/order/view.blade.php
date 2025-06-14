@extends('backend.admin.master')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Order</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View Order</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div style="display: flex; align-items:center; justify-content:space-between">
            <h6 class="mb-0 text-uppercase">View Order Details</h6>


        </div>

        <hr />

        <div class="row align-items-stretch">
            <div class="col-md-6">

                <div class="card h-100">
                    <div class="card-body">

                        <div style="display:flex; align-items:center; justify-content: flex-start; gap: 15px">

                            <div>
                                <img src="{{asset($user_info->photo)}}" class="text-center" width="120" height='120' style="border-radius: 60px"  />

                            </div>


                            <div style="display: flex; flex-direction:column; gap: 10px;">
                                <span>Name : {{$user_info->name}}</span>
                                <span>Email : {{$user_info->email}}</span>
                                <span>Phone : {{$user_info->phone}}</span>
                                <span>Address: {{$user_info->address}}</span>
                                <span>Bio: {{$user_info->bio}}</span>
                                <span>Gender: {{$user_info->gender}}</span>
                            </div>

                        </div>



                    </div>
                </div>

            </div>

            <div class="col-md-6">

                <div class="card h-100">
                    <div class="card-body">

                        <div style="display:flex; align-items:center; justify-content: flex-start; gap: 15px">




                            <div style="display: flex; flex-direction:column; gap: 10px;">
                                <span>Total Amount : {{$payment_info->total_amount}}</span>
                                <span>Payment Type : {{$payment_info->payment_type}}</span>
                                <span>Invoice Number : {{$payment_info->invoice_no}}</span>
                                <span>Order Date: {{ $payment_info->created_at->format('F d, Y') }}</span>

                                <span>Trx Id: {{$payment_info->transaction_id}}</span>

                            </div>

                        </div>



                    </div>
                </div>

            </div>


        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Course Name</th>
                                    <th>Category</th>
                                    <th>Instructor</th>
                                    <th>Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($payment_info['order'] as $item)
                                <tr>
                                    <td>
                                        <img src="{{asset($item->course->course_image)}}" width="80" height="80" style="border-radius: 5px" />
                                    </td>

                                    <td>{{$item->course->course_name}}</td>
                                    <td>
                                        {{$item->course->category->name}}
                                    </td>

                                    <td>
                                        {{$item->instructor->name}}
                                    </td>

                                    <td>
                                        ${{$item->price}}
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection


