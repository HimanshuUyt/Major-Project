@include('header')

<!-- Striped Rows -->
<div class="container max-width">
    <div class="card mt-4">
        <a style="width: 200px; margin: 15px;" href="{{ route('banner.create') }}" class="btn btn-outline-primary rounded-full">Add Banner</a>
        <div class="table-responsive text-nowrap">
            @if($data->isEmpty())
                <div class="text-center my-3">
                    <h5>No banners available.</h5>
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>SR.NO</th>
                            <th>Banner Pic</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data as $item)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td>
                                    @if (file_exists(public_path($item->banner_pic)))
                                        <img src="{{ asset($item->banner_pic) }}" height="100" width="100" alt="Banner Image">
                                    @else
                                        <img src="{{ asset('/img/no_image.jpg') }}" height="100" width="100" alt="No Image">
                                    @endif
                                </td>
                                <td>
                                    <span class="badge {{ $item->status ? 'bg-label-primary' : 'bg-label-danger' }} me-1">
                                        {{ $item->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu mt-2">
                                            <a class="dropdown-item" href="{{ route('banner.edit', $item->_id) }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            <form action="{{ route('banner.destroy', $item->_id) }}" method="POST" onsubmit="return confirmDelete(event)">
                                                @csrf
                                                @method('DELETE')
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
            @endif
        </div>
    </div>
</div>
<!--/ Striped Rows -->

<!-- Success Alert -->
@if(Session::has('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: "{{ Session::get('success') }}",
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif

<!-- Confirm Delete Script -->
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