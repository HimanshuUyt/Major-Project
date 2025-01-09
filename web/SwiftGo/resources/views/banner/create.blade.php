@include('header')

<div class="container">
  <div class="row">
    <form  action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data" >
      {{ csrf_field() }}

      <div class="col-xl">
        <div class="card mt-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Banner Add Form</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="formFile" class="form-label">Banner Pic</label>
                <input class="form-control" type="file" id="formFile" name="banner_pic" />
                
              </div>
              <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status" />
                <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
              </div>
              <span class="text-danger">
                @error('banner_pic')
                    {{$message}}
                @enderror
              </span>
              <button type="submit" class="btn btn-primary">Add</button>
            </form>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@include('footer')