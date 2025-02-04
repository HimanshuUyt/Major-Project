@include('header')

<div class="container">
  <div class="row">
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      {{ csrf_field() }}

      <div class="col-xl">
        <div class="card mt-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Category Add Form</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Category Name</label>
              <input 
                type="text" 
                class="form-control" 
                id="basic-default-fullname" 
                placeholder="Category" 
                name="category_name" 
                value="{{ old('category_name') }}"
              />
              <span class="text-danger">
                @error('category_name')
                    {{ $message }}
                @enderror
              </span>
            </div>

            <div class="mb-3">
              <label for="formFile" class="form-label">Category Pic</label>
              <input 
                class="form-control" 
                type="file" 
                id="formFile" 
                name="category_pic" 
              />
              <span class="text-danger">
                @error('category_pic')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      
        </div>
      </div>
    </form>
  </div>
</div>



@include('footer')