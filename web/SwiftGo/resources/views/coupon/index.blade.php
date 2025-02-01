@include('header')

<div class="container max-width">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Coupon Data</h4>
        </div>
        <a style="width: 200px; margin: 15px;" href="{{route('coupon.create')}}" class="btn btn-outline-primary rounded-full">Add Coupon</a>
        <div class="table-responsive text-nowrap">
            @if($data->isEmpty())
                <div class="text-center my-3">
                    <h5>No banners available.</h5>
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Coupon code</th>
                            <th scope="col">Coupon Pic</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data as $item)
                        <tr class="">
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $item->c_code }}</td>
                            <td>
                                <img height="50" width="100"  src="/images/{{ $item->c_pic }}" alt="">
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
                                        <a class="dropdown-item" href="{{ route('coupon.edit', $item->_id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <form action="{{ route('coupon.destroy', $item->_id) }}" method="POST" onsubmit="return confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </button>
                                        </form>
                                        {{-- <a class="dropdown-item" href="{{ route('coupon.show', $item->_id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Show
                                        </a> --}}
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if (Session::get('success'))
<script>

Swal.fire({
    
    icon: "success",
    title: "{{Session::get('success')}}",
    showConfirmButton: false,
    timer: 2500
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



<script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

    @include('footer')