@extends('backend.admin.master')

@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Setting</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Stripe Setting</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->


        <div class="card col-md-10">

            <div class="card-body">

                <div class="card-body p-4">

                    <div style="display: flex; align-items:center; justify-content:space-between">
                        <h5 class="mb-4">Configure Stripe (PaymentGateway)</h5>

                    </div>

                    <form class="row g-3" method="post" action="{{ route('admin.stripe.settings.update') }}">
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
                            <label for="publish_key" class="form-label">Publishable Key</label>
                            <input type="text" class="form-control" name="publish_key" id="publish_key"
                                placeholder="Enter stripe publishable key"
                                value="{{ old('publish_key', $stripeSettings->publish_key ?? '') }}" required>
                        </div>

                        <div class="col-md-12">
                            <label for="secret_key" class="form-label">Secret Key</label>
                            <input type="text" class="form-control" name="secret_key" id="secret_key"
                                placeholder="Enter stripe secret key"
                                value="{{ old('secret_key', $stripeSettings->secret_key ?? '') }}" required>
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
