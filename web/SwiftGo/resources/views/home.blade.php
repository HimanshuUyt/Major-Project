@include('header')

<div class="space-y-6 p-6">

    <div class="flex w-full items-center justify-between print:hidden">
      <h4 class="text-lg font-semibold text-default-900">Dashboard</h4>

      <ol aria-label="Breadcrumb" class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex">
        <li class="text-sm">
          <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
            GreenCart
            <i class="h-4 w-4" data-lucide="chevron-right"></i>
          </a>
        </li>

        <li class="text-sm">
          <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
            Admin
            <i class="h-4 w-4" data-lucide="chevron-right"></i>
          </a>
        </li>

        <li aria-current="page" class="truncate text-sm font-medium text-primary-600 hover:text-primary">
          Dashboard
        </li>
      </ol>
    </div>
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
      <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="p-5">
          <div class="flex gap-4">
            <div class="grow">
              <h6 class="text-base font-medium text-default-600s">Orders</h6>
              <h4 class="my-3 text-2xl font-semibold text-default-900">14.8K</h4>
              <p class="text-sm font-medium text-primary"><i class="ti ti-trending-up text-base align-middle"></i> 50% Increase</p>
            </div>
            <div class="shrink h-14 w-14 inline-flex items-center justify-center bg-blue-500/20 text-blue-500 rounded-md">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" /><path d="M9 11v-5a3 3 0 0 1 6 0v5" /></svg>
            </div>
          </div>
        </div>
      </div><!-- end grid-col -->

      <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="p-5">
          <div class="flex gap-4">
            <div class="grow">
              <h6 class="text-base font-medium text-default-600s">Total Products</h6>
              <h4 class="my-3 text-2xl font-semibold text-default-900">996</h4>
              <p class="text-sm font-medium text-red-500"><i class="ti ti-trending-down text-base align-middle"></i> 2% Decrease</p>
            </div>
            <div class="shrink h-14 w-14 inline-flex items-center justify-center bg-primary/20 text-primary rounded-md">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-cheese"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.519 20.008l16.481 -.008v-3.5a2 2 0 1 1 0 -4v-3.5h-16.722" /><path d="M21 9l-9.385 -4.992c-2.512 .12 -4.758 1.42 -6.327 3.425c-1.423 1.82 -2.288 4.221 -2.288 6.854c0 2.117 .56 4.085 1.519 5.721" /><path d="M15 13v.01" /><path d="M8 13v.01" /><path d="M11 16v.01" /></svg>
            </div>
          </div>
        </div>
      </div><!-- end grid-col -->

      <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="p-5">
          <div class="flex gap-4">
            <div class="grow">
              <h6 class="text-base font-medium text-default-600s">Total Customers</h6>
              <h4 class="my-3 text-2xl font-semibold text-default-900">912.68K</h4>
              <p class="text-sm font-medium text-primary"><i class="ti ti-trending-up text-base align-middle"></i> 50% Increase</p>
            </div>
            <div class="shrink h-14 w-14 inline-flex items-center justify-center bg-yellow-500/20 text-yellow-500 rounded-md">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
            </div>
          </div>
        </div>
      </div><!-- end grid-col -->

      <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="p-5">
          <div class="flex gap-4">
            <div class="grow">
              <h6 class="text-base font-medium text-default-600s">Reviews</h6>
              <h4 class="my-3 text-2xl font-semibold text-default-900">858.72K</h4>
              <p class="text-sm font-medium text-primary"><i class="ti ti-trending-up text-base align-middle"></i> 44% Increase</p>
            </div>
            <div class="shrink h-14 w-14 inline-flex items-center justify-center bg-cyan-500/20 text-cyan-500 rounded-md">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
            </div>
          </div>
        </div>
      </div><!-- end grid-col -->
    </div><!-- end grid -->

    <div class="grid xl:grid-cols-3 gap-6">
      <div class="xl:col-span-2">
        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50">
          <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h5 class="grow text-lg font-medium text-default-900">Revenue</h5>
            <div class="relative">
              <select id="all-select-categories" data-hs-select='{
                                  "toggleTag": "<button type=\"button\"></button>",
                                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-full py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                                  "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                  "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                  }' class="hidden">
                <option>Today</option>
                <option>Yesterday</option>
                <option>Last 7 Days</option>
                <option>Last 30 Days</option>
                <option>This Month</option>
                <option>Last Month</option>
              </select>

              <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                <i class="ti ti-chevron-down shrink text-base/none"></i>
              </div>
            </div><!-- End Select -->
          </div>
          <div class="bg-default-100 px-5 py-3 border-y border-dashed border-default-200">
            <div class="grid grid-cols-2 gap-4">
              <div class="text-center">
                <div class="inline-flex items-center justify-center gap-2">
                  <i class="ti ti-chart-bar text-base text-primary"></i>
                  <p class="text-default-600 font-medium">Net Profit</p>
                </div>
                <h3 class="text-default-900 text-xl font-semibold mt-2">$41,512k</h3>
              </div>
              <div class="text-center">
                <div class="inline-flex items-center justify-center gap-2">
                  <i class="ti ti-playstation-circle text-base text-primary"></i>
                  <p class="text-default-600 font-medium">Net Profit</p>
                </div>
                <h3 class="text-default-900 text-xl font-semibold mt-2">$41,512k</h3>
              </div>
            </div>
          </div>
          <div class="px-5 pb-5">
            <div id="revenue_report" class="apex-charts"></div>
          </div>
        </div>
      </div>

      <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
          <h5 class="grow text-lg font-medium text-default-900">Total Sales</h5>
          <div class="shrink hs-dropdown relative [--placement:bottom-right] group">
            <button type="button" class="hs-dropdown-toggle h-8 w-8 inline-flex items-center justify-center bg-default-950/5 border border-default-200 rounded-full text-base group-[&.open]:rotate-90 transition-all duration-500"><i class="ti ti-dots-vertical"></i></button>

            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[180px] transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white dark:bg-default-50 shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
              <ul class="flex flex-col gap-1">
                <li>
                  <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                </li>
                <li>
                  <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                </li>
                <li>
                  <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Something else here</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
          <div id="ana_device" class="apex-charts py-3.5"></div>
        </div>
        <div class="flex flex-col">
          <div class="overflow-x-auto -mb-2">
            <div class="inline-block min-w-full">
              <div class="overflow-hidden">
                <table class="min-w-full border-t border-dashed border-default-200">
                  <tbody>
                    <!-- Product 1 -->
                    <tr class="bg-white border-b border-dashed border-default-200 dark:bg-default-50">
                      <td class="px-2 py-2.5 text-sm font-medium text-default-900 whitespace-nowrap">
                        Nuts & Berries
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        1843
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        -3
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        -12
                      </td>
                    </tr>
                    <!-- Product 2 -->
                    <tr class="bg-white border-b border-dashed border-default-200 dark:bg-default-50">
                      <td class="px-2 py-2.5 text-sm font-medium text-default-900 whitespace-nowrap">
                        Vegetables
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        2543
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        -5
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        -2
                      </td>
                    </tr>
                    <!-- Product 2 -->
                    <tr class="bg-white dark:bg-default-50">
                      <td class="px-2 py-2.5 text-sm font-medium text-default-900 whitespace-nowrap">
                        Fruits
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        3654
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        -5
                      </td>
                      <td class="px-2 py-2.5 text-sm text-default-500 whitespace-nowrap">
                        -6
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end grid -->

    <div class="flex items-center justify-between gap-6">
      <h2 class="text-xl font-semibold text-default-900">Top Selling Products</h2>
      <a href="admin-product-list.html" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded">View All <i class="ti ti-chevron-right"></i></a>
    </div>

    <div class="grid xl:grid-cols-6 md:grid-cols-2 grid-cols-1 gap-6">
      <div class="border border-default-200 rounded-lg">
        <div class="p-5 relative">
          <div class="absolute top-4 end-4">
            <a href="#" class="inline-flex items-center justify-center bg-default-100 text-default-900 rounded-full h-10 w-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            </a>
          </div>

          <div class="text-center">
            <img src="assets/1-2ca96552.png" alt="" class="flex mx-auto my-4">
            <h6 class="font-semibold text-xl text-default-900 mb-1">Banana</h6>
            <h4 class="font-medium text-base text-primary mb-2">$14.99 <span class="text-default-600 text-sm line-through">$20.99</span> </h4>
          </div>

          <div class="flex items-center justify-center gap-2">
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star-half text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" /></svg>
            </button>
          </div>
        </div>
      </div><!-- end grid-cols -->

      <div class="border border-default-200 rounded-lg">
        <div class="p-5 relative">
          <div class="absolute top-4 end-4">
            <a href="#" class="inline-flex items-center justify-center bg-default-100 text-default-900 rounded-full h-10 w-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            </a>
          </div>

          <div class="text-center">
            <img src="assets/2-423cfe2a.png" alt="" class="flex mx-auto my-4">
            <h6 class="font-semibold text-xl text-default-900 mb-1">Cashew Nut</h6>
            <h4 class="font-medium text-base text-primary mb-2">$18.96 <span class="text-default-600 text-sm line-through">$32.86</span> </h4>
          </div>

          <div class="flex items-center justify-center gap-2">
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star-half text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" /></svg>
            </button>
          </div>
        </div>
      </div><!-- end grid-cols -->

      <div class="border border-default-200 rounded-lg">
        <div class="p-5 relative">
          <div class="absolute top-4 end-4">
            <a href="#" class="inline-flex items-center justify-center bg-default-100 text-default-900 rounded-full h-10 w-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            </a>
          </div>

          <div class="text-center">
            <img src="assets/3-eb4bb056.png" alt="" class="flex mx-auto my-4">
            <h6 class="font-semibold text-xl text-default-900 mb-1">Grapes</h6>
            <h4 class="font-medium text-base text-primary mb-2">$29.48 <span class="text-default-600 text-sm line-through">$36.72</span> </h4>
          </div>

          <div class="flex items-center justify-center gap-2">
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star-half text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" /></svg>
            </button>
          </div>
        </div>
      </div><!-- end grid-cols -->

      <div class="border border-default-200 rounded-lg">
        <div class="p-5 relative">
          <div class="absolute top-4 end-4">
            <a href="#" class="inline-flex items-center justify-center bg-default-100 text-default-900 rounded-full h-10 w-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            </a>
          </div>

          <div class="text-center">
            <img src="assets/4-84c13641.png" alt="" class="flex mx-auto my-4">
            <h6 class="font-semibold text-xl text-default-900 mb-1">Banana Chips</h6>
            <h4 class="font-medium text-base text-primary mb-2">$20.68 <span class="text-default-600 text-sm line-through">$40.88</span> </h4>
          </div>

          <div class="flex items-center justify-center gap-2">
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star-half text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" /></svg>
            </button>
          </div>
        </div>
      </div><!-- end grid-cols -->

      <div class="border border-default-200 rounded-lg">
        <div class="p-5 relative">
          <div class="absolute top-4 end-4">
            <a href="#" class="inline-flex items-center justify-center bg-default-100 text-default-900 rounded-full h-10 w-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            </a>
          </div>

          <div class="text-center">
            <img src="assets/5-6588f4cc.png" alt="" class="flex mx-auto my-4">
            <h6 class="font-semibold text-xl text-default-900 mb-1">Protinex Powder</h6>
            <h4 class="font-medium text-base text-primary mb-2">$68.66 <span class="text-default-600 text-sm line-through">$96.34</span> </h4>
          </div>

          <div class="flex items-center justify-center gap-2">
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star-half text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" /></svg>
            </button>
          </div>
        </div>
      </div><!-- end grid-cols -->

      <div class="border border-default-200 rounded-lg">
        <div class="p-5 relative">
          <div class="absolute top-4 end-4">
            <a href="#" class="inline-flex items-center justify-center bg-default-100 text-default-900 rounded-full h-10 w-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            </a>
          </div>

          <div class="text-center">
            <img src="assets/6-fc45c68a.png" alt="" class="flex mx-auto my-4">
            <h6 class="font-semibold text-xl text-default-900 mb-1">Nuts And Berries</h6>
            <h4 class="font-medium text-base text-primary mb-2">$48.96 <span class="text-default-600 text-sm line-through">$38.49</span> </h4>
          </div>

          <div class="flex items-center justify-center gap-2">
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
            </button>
            <button>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star-half text-yellow-400"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" /></svg>
            </button>
          </div>
        </div>
      </div><!-- end grid-cols -->
    </div><!-- end grid -->

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Recent Order</h4>

        <div class="relative">
          <select id="all-select-categories" data-hs-select='{
                          "toggleTag": "<button type=\"button\"></button>",
                          "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-full py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                          "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                          "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                          "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                          }' class="hidden">
            <option>Today</option>
            <option>Yesterday</option>
            <option>Last 7 Days</option>
            <option>Last 30 Days</option>
            <option>This Month</option>
            <option>Last Month</option>
          </select>

          <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
          </div>
        </div><!-- End Select -->
      </div>
      <div class="border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-default-200">
                <thead class="bg-default-100">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-default-600 uppercase">Order Number</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-default-600 uppercase">Product Name</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-default-600 uppercase">Order Date</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-default-600 uppercase">Price</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#CT0023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Nuts And Berries</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">28 Mar 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$12.23</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                      <span class="px-3 py-1 text-xs font-medium rounded-md bg-amber-500/20 text-amber-500">Pending</span>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#CT0023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Protinex Powder</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27 Apr 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$42.36</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                      <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/10 text-primary">Shipped</span>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#CT0024</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Banana Chips</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31 Jan 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$62.12</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                      <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/10 text-red-500">Cancel</span>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#CT0025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Grapes</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">16 Feb 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$74.46</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                      <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/10 text-primary">Shipped</span>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#CT0026</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Cashew Nut</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45 Feb 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">$52.12</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                      <span class="px-3 py-1 text-xs font-medium rounded-md bg-blue-500/10 text-blue-500">Processing</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div><!-- end card-body -->
    </div><!-- end card -->
  </div>

@include('footer')
