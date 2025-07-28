<div class="tab-pane fade" id="successcontact" role="tabpanel">

    <form class="row g-3" method="post" action="{{route('admin.site-setting.store')}}">
        @csrf
        <div class="col-md-6">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="link" class="form-control" name="facebook" id="facebook"
                placeholder="Enter the facebook link" value="{{ old('facebook', $site_data->facebook ?? '') }}" >
        </div>

        <div class="col-md-6">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="link" class="form-control" name="instagram" id="instagram"
                placeholder="Enter the instagram link" value="{{ old('instagram', $site_data->instagram ?? '') }}" >
        </div>



        <div class="col-md-6">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="link" class="form-control" name="twitter" id="twitter"
                placeholder="Enter the twitter link" value="{{ old('twitter', $site_data->twitter ?? '') }}" ></input>
        </div>

        <div class="col-md-6">
            <label for="linkedin" class="form-label">Linkedin</label>
            <input type="link" class="form-control" name="linkedin" id="linkedin"
                placeholder="Enter the linkedin link"  value="{{old('linkedin', $site_data->linkedin ?? '')}}" />
        </div>



        <button type="submit" class="btn btn-primary w-100">Update</button>



    </form>

</div>
