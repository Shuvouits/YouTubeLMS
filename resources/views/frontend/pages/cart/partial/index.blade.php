@extends('frontend.master')

@section('content')
    @include('frontend.section.breadcrumb', ['title' => 'Shopping Cart'])

    <!-- Placeholder for the cart area -->
    <div id="cart-main-content">
        <!-- The content will be loaded here via AJAX -->
    </div>

@endsection

@push('scripts')


    <script src="{{asset('customjs/cart/index.js')}}"></script>
@endpush
