@include('header')

<div class="container">
  <div class="row">
    <form action="{{route('coupon.update',$coupon->_id)}}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf
      @method("PUT")
      <div class="col-xl">
        <div class="card mt-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Coupon Update Form</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Coupon Code</label>
              <input 
                type="text" 
                class="form-control" 
                id="basic-default-fullname" 
                placeholder="Category Code" 
                name="c_code" 
                value="{{$coupon->c_code}}"
              />
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Coupon Desc</label>
              <textarea class="form-control" placeholder="Category Desc" name="c_desc" id="basic-default-fullname" cols="30" rows="3">{{$coupon->c_desc}}</textarea>
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Coupon Discount Percentage</label>
              <input 
                type="text" 
                class="form-control" 
                id="basic-default-fullname" 
                placeholder="Coupon Discount Percentage" 
                name="c_discount" 
                value="{{$coupon->c_discount}}"
              />
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Max Amount</label>
              <input 
                type="text" 
                class="form-control" 
                id="basic-default-fullname" 
                placeholder="Max Amount" 
                name="c_max_amt" 
                value="{{$coupon->c_max_amt}}"
              />
            </div>

            <div class="mb-3">
              <label for="formFile" class="form-label">Coupon Pic</label>
              <input 
                class="form-control" 
                type="file" 
                id="formFile" 
                name="c_pic" 
              />
              <span class="text-danger">
                @error('c_pic')
                    {{ $message }}
                @enderror
              </span>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status" />
              <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
            </div>
            <button type="submit" class="btn btn-primary">Update Coupon</button>
          </div>
      
        </div>
      </div>
    </form>
  </div>
</div>

@include('footer')