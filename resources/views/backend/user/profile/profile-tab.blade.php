<div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">

    <form  class="col-md-12"  method="post" action="{{route('user.profile.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="setting-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>
            <div class="media media-card align-items-center">
                <div class="media-img media-img-lg mr-4 bg-gray">
                    <img class="mr-3" id="photoPreview"  src="{{  auth()->user()->photo ? asset(auth()->user()->photo) :  asset('frontend/images/team11.jpg')}}"   alt="avatar image">
                </div>
                <div class="media-body">
                    <div class="file-upload-wrap file-upload-wrap-2">
                        <input type="file" name="photo" id="Photo" class="multi file-upload-input with-preview" multiple>
                        <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a
                            Photo</span>
                    </div><!-- file-upload-wrap -->
                    <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable
                        files are .jpg & .png</p>
                </div>
            </div><!-- end media -->

            <div class="row mt-3">

                <div class="input-box col-lg-6">
                    <label class="label-text">First Name</label>
                    <div class="form-group">
                        <input class="form-control form--control" name="first_name" placeholder="Enter your first name" type="text"  value="{{ old('first_name', auth()->user()->first_name) }}">
                        <span class="la la-user input-icon"></span>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box col-lg-6">
                    <label class="label-text">Last Name</label>
                    <div class="form-group">
                        <input class="form-control form--control" placeholder="Enter your second name"  type="text" name="last_name" value="{{ old('last_name', auth()->user()->last_name) }}" >
                        <span class="la la-user input-icon"></span>
                    </div>
                </div><!-- end input-box -->

                <div class="input-box col-lg-6">
                    <label class="label-text">User Name</label>
                    <div class="form-group">
                        <input class="form-control form--control" type="text" placeholder="Enter your full name" name="name"  value="{{ old('name', auth()->user()->name) }}" >
                        <span class="la la-user input-icon"></span>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box col-lg-6">
                    <label class="label-text">Email Address</label>
                    <div class="form-group">
                        <input class="form-control form--control" placeholder="Enter your email" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" >
                        <span class="la la-envelope input-icon"></span>
                    </div>
                </div><!-- end input-box -->

                <div class="input-box col-lg-12">
                    <label class="label-text">Phone Number</label>
                    <div class="form-group">
                        <input class="form-control form--control" placeholder="Enter your phone number" type="text" name="phone" value="{{ old('phone', auth()->user()->phone) }}" >
                        <span class="la la-phone input-icon"></span>
                    </div>
                </div><!-- end input-box -->

                <div class="input-box col-lg-12">
                    <label class="label-text">Address</label>
                    <div class="form-group">
                        <input class="form-control form--control" placeholder="Enter your address" type="text" name="address" value="{{ old('address', auth()->user()->address) }}" >
                        <span class="la la-map-marker input-icon"></span>

                    </div>
                </div><!-- end input-box -->

                <div class="input-box col-lg-12">
                    <label class="label-text">Bio</label>
                    <div class="form-group">
                        <textarea class="form-control form--control user-text-editor pl-3" name="bio">

                            {{ old('bio', auth()->user()->bio) }}

                        </textarea>
                    </div>
                </div><!-- end input-box -->

                <div class="input-box col-lg-12 py-2">
                    <button class="btn theme-btn">Save Changes</button>
                </div><!-- end input-box -->



            </div>












        </div><!-- end setting-body -->
    </form>



</div><!-- end tab-pane -->
