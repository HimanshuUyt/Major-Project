@include('header')

<div class="container mt-5">
    <!-- Start card -->
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between py-4 px-5">
            <a href="{{route('coupon.create')}}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-emerald-600 border-emerald-600 text-emerald-600 hover:text-white rounded-md">Add Coupon</a>
        </div>
        <div class="border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-default-200">
                <thead>
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Id</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Coupon code</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Coupon Pic</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                    @foreach ($data as $item) 
                        <tr class="hover:bg-default-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">{{ $item->c_code }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                <img height="50" width="100"  src="/images/{{ $item->c_pic }}" alt="">
                            </td>
                            <td>
                                <span class="badge {{ $item->status ? 'bg-label-primary' : 'bg-label-danger' }} me-1">
                                    {{ $item->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a class="text-primary hover:text-primary-600 transition-all" href="{{ route('category.edit', $item->_id) }}">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>
                                <form action="{{ route('category.destroy', $item->_id) }}" method="post" onsubmit="confirmDelete(event)" style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-primary hover:text-primary-600 transition-all">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- end card -->
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