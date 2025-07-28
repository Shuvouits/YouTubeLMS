<div class="tab-pane fade" id="successprofile" role="tabpanel">

    <form class="row g-3" method="post" action="{{route('admin.site-setting.store')}}">
        @csrf
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address"
                placeholder="Enter the address" value="{{ old('address', $site_data->address ?? '') }}">
        </div>

        <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="phone"
                placeholder="Enter the course name" value="{{ old('phone', $site_data->phone ?? '') }}" >
        </div>



        <div class="col-md-6">
            <label for="mail" class="form-label">Web Mail</label>
            <input type="email" class="form-control" name="mail" id="mail"
                placeholder="Enter your contact email" value="{{old('mail', $site_data->mail ?? '')}}" />
        </div>



        <button type="submit" class="btn btn-primary w-100">Update</button>



    </form>

</div>
