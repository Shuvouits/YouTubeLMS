@extends('backend.user.master')

@section('content')
    <div class="dashboard-heading mb-5">
        <h3 class="fs-22 font-weight-semi-bold">Settings</h3>
    </div>
    <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab"
                aria-controls="edit-profile" aria-selected="false">
                Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password"
                aria-selected="true">
                Password
            </a>
        </li>


    </ul>
    <div class="tab-content" id="myTabContent">

        @include('backend.user.profile.profile-tab')

        @include('backend.user.profile.password-tab')




    </div><!-- end tab-content -->



@endsection
