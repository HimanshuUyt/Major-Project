@include('header')
<div class="conatiner">
  <div class="p-6 space-y-6">

    <div class="flex w-full items-center justify-between print:hidden">
      <h4 class="text-lg font-semibold text-default-900">Product List</h4>

      <ol aria-label="Breadcrumb" class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex">
        <li class="text-sm">
          <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
            GreenCart
            <i class="h-4 w-4" data-lucide="chevron-right"></i>
          </a>
        </li>

        <li class="text-sm">
          <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
            Product
            <i class="h-4 w-4" data-lucide="chevron-right"></i>
          </a>
        </li>

        <li aria-current="page" class="truncate text-sm font-medium text-primary-600 hover:text-primary">
          Product List
        </li>
      </ol>
    </div>
    <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
      <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="p-5">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-base font-semibold text-default-600">All Products</p>
              <h4 class="text-2xl font-semibold text-default-900 mt-4">280K</h4>
            </div>
            <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-blue-500/20 text-blue-500">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-box"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /></svg>
            </span>
          </div>
        </div>
      </div>
      <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="p-5">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-base font-semibold text-default-600">New Products</p>
              <h4 class="text-2xl font-semibold text-default-900 mt-4">201K</h4>
            </div>
            <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-primary/20 text-primary">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-rosette-discount-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
            </span>
          </div>
        </div>
      </div>
      <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="p-5">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-base font-semibold text-default-600">Upcoming Products</p>
              <h4 class="text-2xl font-semibold text-default-900 mt-4">44K</h4>
            </div>
            <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-amber-500/20 text-amber-500">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-hourglass"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.5 7h11" /><path d="M6.5 17h11" /><path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" /><path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z" /></svg>
            </span>
          </div>
        </div>
      </div>
      <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="p-5">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-base font-semibold text-default-600">Removed Products</p>
              <h4 class="text-2xl font-semibold text-default-900 mt-4">35K</h4>
            </div>
            <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-red-500/20 text-red-500">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex flex-wrap items-center justify-between py-4 px-5">
        <div class="relative lg:flex hidden">
          <input type="search" class="ps-12 pe-4 py-2.5 block w-64 bg-default-50/0 text-default-600 border-default-200 rounded-lg text-sm focus:border-primary focus:ring-primary" placeholder="Search...">
          <span class="absolute start-4 top-2.5">
            <i class="ti ti-search text-lg/none"></i>
          </span>
        </div>
        <a href="{{ route('product.create') }}" class="relative overflow-hidden py-2.5 pe-6 ps-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-sm text-center bg-primary-600 text-white rounded-full hover:bg-primary-700">
          <span class="absolute top-1/2 -translate-y-1/2 start-0 h-full w-10 rounded-full inline-flex items-center justify-center bg-white/20 text-white me-3">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M9 12h6" /><path d="M12 9v6" /></svg>
          </span>
          Add Product
        </a>
      </div>
      <div class="border-t border-dashed border-default-200 relative overflow-x-auto">
        <table class="min-w-full">
          <thead class="border-b border-dashed border-default-200">
            <tr>
              <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">SR.No</th>
              <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Product</th>
              <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Type</th>
              <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Price</th>
              <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Quantity</th>
              <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Create By</th>
              <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Status</th>
              <th scope="col" class="px-3 py-3 text-center text-base capitalize font-semibold text-default-900 min-w-32">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-dashed divide-default-200">
            @foreach ($data as $item)
              <tr>
                <td class="px-6 py-3">{{ $loop->iteration }}</td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      @if (!empty($item->product_mpic) && file_exists(public_path($item->product_mpic)))
                        <img src="{{ asset($item->product_mpic) }}" height="100" width="100" alt="Category Image">
                      @else
                          <img src="/img/no_image.jpg" height="100" width="100" alt="No Image">
                      @endif
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">{{ $item->product_name }}</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">{{ $item->product_type }}</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">{{ $item->product_price }}</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">{{ $item->product_qty }}</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">{{ $item->created_by }}</td>
                <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                    {{ $item->Status }}
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                  <div class="flex items-center justify-center gap-2">
                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                    </button>
                    <a href="{{ route('product.edit', $item->_id) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" /><path d="M16 5l3 3" /><path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" /></svg>
                    </a>
                    <form action="{{ route('product.destroy', $item->_id) }}" method="post" onsubmit="confirmDelete(event)" style="display: inline;">
                      @csrf
                      @method('delete')
                      <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>

              {{-- <tr class="hover:bg-default-100">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">{{ $loop->iteration }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">{{ $item->category_name }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                      @if (!empty($item->category_pic) && file_exists(public_path($item->category_pic)))
                          <img src="{{ asset($item->category_pic) }}" height="100" width="100" alt="Category Image">
                      @else
                          <img src="/img/no_image.jpg" height="100" width="100" alt="No Image">
                      @endif
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
              </tr> --}}
            @endforeach

            <tr>
              <td class="px-6 py-3">
                <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
              </td>
              <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                <spam class="flex items-center gap-2">
                  <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                    <img src="assets/1-2ca96552.png" alt="" class="max-w-full h-full rounded-full">
                  </span>
                  <h6 class="text-sm font-semibold text-default-700">Banana</h6>
                </spam>
              </td>
              <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Fruit</td>
              <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$142</td>
              <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">12</td>
              <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
              <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                  Publish
                </span>
              </td>
              <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                <div class="flex items-center justify-center gap-2">
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                  </button>
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" /><path d="M16 5l3 3" /><path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" /></svg>
                  </button>
                  <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="flex items-center justify-between py-3 px-6 border-t border-dashed border-default-200">
        <h6 class="text-default-600">Showing 1 to 5 of 12</h6>

        <nav class="flex items-center gap-1">
          <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
          </a>
          <a class="inline-flex items-center justify-center h-8 w-8 border rounded-md transition-all duration-200 bg-primary text-white border-primary" href="#" aria-current="page">1</a>
          <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">2</a>
          <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">...</a>
          <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">12</a>
          <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
          </a>
        </nav>
      </div>
    </div>
  </div>
</div>
@include('footer')