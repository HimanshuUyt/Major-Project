@include('header')

<div class="container">
    <div class="row">
        <form action="{{ route('category.update', $category->_id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            {{ csrf_field() }}
            @method('PUT')
            
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Category Update Form</h5>
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
                                value="{{ old('category_name', $category->category_name) }}" 
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
                            @if (!empty($category->category_pic) && file_exists(public_path($category->category_pic)))
                                <div class="mt-2">
                                    <img 
                                        src="{{ asset($category->category_pic) }}" 
                                        height="100" 
                                        width="100" 
                                        alt="Current Category Pic" 
                                    />
                                </div>
                            @endif
                            <span class="text-danger">
                                @error('category_pic')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('footer')