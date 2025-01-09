@include('header')

<div class="container">
  <div class="row">
    <form action="{{ route('banner.update', $banner->_id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="col-xl">
        <div class="card mt-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Banner Update Form</h5>
          </div>
          <div class="card-body">
              <div class="mb-3">
                <label for="formFile" class="form-label">Banner Pic</label>
                <input class="form-control" type="file" id="formFile" name="banner_pic" />
                <span class="text-danger">
                  @error('banner_pic')
                    {{ $message }}
                  @enderror
                </span>
              </div>

              <div class="form-check form-switch mb-2">
                <input 
                  class="form-check-input" 
                  type="checkbox" 
                  id="flexSwitchCheckDefault" 
                  name="status" 
                  {{ $banner->status ? 'checked' : '' }} 
                />
                <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@include('footer')