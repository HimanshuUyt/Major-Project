@include('header')

<!-- Striped Rows -->
<div class="container max-width">
    <div class="card mt-4">
        <a style="width: 200px; margin: 15px;" href="{{ route('category.create') }}" class="btn btn-outline-primary rounded-full">Add Category</a>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>SR.NO</th>
                        <th>Category</th>
                        <th>Category Pic</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)                           
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td><strong>{{ $item->category_name }}</strong></td>
                            <td>
                                @if (!empty($item->category_pic) && file_exists(public_path($item->category_pic)))
                                    <img src="{{ asset($item->category_pic) }}" height="100" width="100" alt="Category Image">
                                @else
                                    <img src="/img/no_image.jpg" height="100" width="100" alt="No Image">
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu mt-2">
                                        <a class="dropdown-item" href="{{ route('category.edit', $item->_id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <form action="{{ route('category.destroy', $item->_id) }}" method="post" onsubmit="confirmDelete(event)" style="display: inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>                       
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--/ Striped Rows -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(Session::has('success'))
<script>
    Swal.fire({
        icon: "success",
        title: "{{ Session::get('success') }}",
        showConfirmButton: false,
        timer: 3000
    });
</script>
@endif

<script>
function confirmDelete(event) {
    event.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit(); // Submit the form after confirmation
        }
    });
}
</script>

@include('footer')