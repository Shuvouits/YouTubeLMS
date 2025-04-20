<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
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

        <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>
        <form method="post" class="row" action="{{route('user.passwordSetting')}}">
            @csrf
            <div class="input-box col-lg-4">
                <label class="label-text">Old Password</label>
                <div class="form-group">
                    <input class="form-control form--control" name="current_password" type="text"
                        placeholder="Old Password">
                    <span class="la la-lock input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-4">
                <label class="label-text">New Password</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="new_password"
                        placeholder="New Password">
                    <span class="la la-lock input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-4">
                <label class="label-text">Confirm New Password</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="new_password_confirmation"
                        placeholder="Confirm New Password">
                    <span class="la la-lock input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-12 py-2">
                <button type="submit" class="btn theme-btn">Change Password</button>
            </div><!-- end input-box -->
        </form>

    </div><!-- end setting-body -->
</div><!-- end tab-pane -->
