<!doctype html>
<html lang="en">


<!-- Mirrored from coderthemes.com/wb/greencart/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jan 2025 08:54:13 GMT -->
<head>
  <meta charset="utf-8" />
  <title>SwiftGo</title>
  <!-- Theme favicon -->
  <link rel="icon" type="image/x-icon" href="/assets/favicon-712e565d.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description" />
  <meta content="coderthemes" name="author" />

  <!-- Head js -->
    <script type="module" crossorigin src="/assets/admin-dashboard-27890ed3.js"></script>
    <link rel="modulepreload" crossorigin href="/assets/theme-9c065fc6.js">
    <link rel="modulepreload" crossorigin href="/assets/apexcharts.common-4fae8482.js">
    <link rel="modulepreload" crossorigin href="/assets/colors-4fe812b9.js">
    <link rel="stylesheet" href="/assets/theme-ecf0ae99.css">
  </head>

<body>


  <!-- Start Sidebar -->
  <div id="application-sidebar" class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-64 -translate-x-full transform overflow-y-auto border-e border-default-200 bg-white transition-all duration-300 hs-overlay-open:translate-x-0 dark:bg-default-50 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden">
    <div class="sticky top-0 flex h-18 items-center justify-start px-6">
      <a href="admin-dashboard.html">
        <img src="/assets/logo-dark-1caee452.png" alt="logo" class="flex h-10 dark:hidden" />
        <img src="/assets/logo-50f51c55.png" alt="logo" class="hidden h-10 dark:flex" />
      </a>
    </div>

    <div class="hs-accordion-group h-[calc(100%-72px)] p-4" data-simplebar>
      <ul class="admin-menu flex w-full flex-col gap-1.5">
        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="/">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-smart-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" /><path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" /></svg>
            Dashboard
            <span class="ms-auto inline-block rounded-full bg-primary/10 px-2.5 py-0.5 text-xs font-medium text-primary">9+</span>
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="admin-chat.html">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-hipchat"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.802 17.292s.077 -.055 .2 -.149c1.843 -1.425 3 -3.49 3 -5.789c0 -4.286 -4.03 -7.764 -9 -7.764c-4.97 0 -9 3.478 -9 7.764c0 4.288 4.03 7.646 9 7.646c.424 0 1.12 -.028 2.088 -.084c1.262 .82 3.104 1.493 4.716 1.493c.499 0 .734 -.41 .414 -.828c-.486 -.596 -1.156 -1.551 -1.416 -2.29z" /><path d="M7.5 13.5c2.5 2.5 6.5 2.5 9 0" /></svg>
            Chat
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="admin-calender.html">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
            Calender
          </a>
        </li>

        <li class="px-6 py-2 text-sm font-medium text-default-600">Manage</li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="admin-wallet.html">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-wallet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" /><path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" /></svg>
            Wallet
            <span class="ms-auto inline-block rounded-full bg-red-500/10 px-2.5 py-0.5 text-xs font-medium text-red-500">4+</span>
          </a>
        </li>

        <li class="menu-item hs-accordion">
          <a href="/coupon" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ticket"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /></svg>
            Coupons
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuCoupons" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-coupons-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Coupons List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-coupons-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Coupon
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-coupons-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Coupon
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-list-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.5 5.5l1.5 1.5l2.5 -2.5" /><path d="M3.5 11.5l1.5 1.5l2.5 -2.5" /><path d="M3.5 17.5l1.5 1.5l2.5 -2.5" /><path d="M11 6l9 0" /><path d="M11 12l9 0" /><path d="M11 18l9 0" /></svg>
            Order
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuOrder" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-order-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Orders List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-order-details.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Order Details
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
            Customers
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuCustomer" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-customer-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Customers List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-customer-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Customer Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-customer-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Customer
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-customer-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Customer
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-store"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" /><path d="M5 21l0 -10.15" /><path d="M19 21l0 -10.15" /><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" /></svg>
            Shops
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuShops" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-shops-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Shops List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-shops-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Shop Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-shops-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Shop
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-shops-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Shop
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-cheese"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.519 20.008l16.481 -.008v-3.5a2 2 0 1 1 0 -4v-3.5h-16.722" /><path d="M21 9l-9.385 -4.992c-2.512 .12 -4.758 1.42 -6.327 3.425c-1.423 1.82 -2.288 4.221 -2.288 6.854c0 2.117 .56 4.085 1.519 5.721" /><path d="M15 13v.01" /><path d="M8 13v.01" /><path d="M11 16v.01" /></svg>
            Product
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuProduct" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-product-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Products List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-product-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Product
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-product-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Product
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" /><path d="M9 11v-5a3 3 0 0 1 6 0v5" /></svg>
            Sellers
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuSellers" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-sellers-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Sellers List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-sellers-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Seller Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-sellers-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Seller
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-sellers-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Seller
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-invoice"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 7l1 0" /><path d="M9 13l6 0" /><path d="M13 17l2 0" /></svg>
            Invoice
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuInvoice" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-invoice-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Invoices List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-invoice-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Invoice Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-invoice-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Invoice
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-license"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11" /><path d="M9 7l4 0" /><path d="M9 11l4 0" /></svg>
            Blog
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuBlog" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-blog-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Blogs List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-blog-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Blog Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-blog-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Blog
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-blog-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Blog
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="px-6 py-2 text-sm font-medium text-default-600">Pages</li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-notebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" /><path d="M13 8l2 0" /><path d="M13 12l2 0" /></svg>
            Extra Pages
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuPages" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="pages-starter.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Starter
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="pages-gallery.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Gallery
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="pages-pricing.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Pricing
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="pages-timeline.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Timeline
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="pages-maintenance.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Maintenance
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="pages-coming-soon.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Coming Soon
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-login-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M3 12h13l-3 -3" /><path d="M13 15l3 -3" /></svg>
            Authentication
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="auth-login.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Login
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="auth-register.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Register
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="auth-logout.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Logout
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="auth-recoverpw.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Password Forgot
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="auth-reset-password.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Password Reset
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="px-6 py-2 text-sm font-medium text-default-600">Components</li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle fill-hover flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" /><path d="M12 12l0 .01" /><path d="M3 13a20 20 0 0 0 18 0" /></svg>
            Base UI
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuBaseUI" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-accordion.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Accordion
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-alert.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Alert
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-avatars.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Avatars
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-buttons.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Buttons
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-badges.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Badges
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-breadcrumbs.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Breadcrumbs
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-cards.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Cards
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-collapse.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Collapse
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-dropdowns.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Dropdowns
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-progress.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Progress
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-spinners.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Spinners
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-list-group.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  List Group
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-ratio.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Ratio
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-tabs.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Tabs
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-modals.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Modals
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-offcanvas.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Offcanvas
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-popovers.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Popovers
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-tooltips.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Tooltips
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-typography.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Typography
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-layout-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
            Advance UI
            <span class="ms-auto inline-block rounded-full bg-cyan-500/10 px-2.5 py-0.5 text-xs font-medium text-cyan-500">Hot</span>
          </a>

          <div id="menuAdvanceUI" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-advance-swiper.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Swiper
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-advance-sweetalert.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Sweet Alert
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-advance-rating.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Ratings
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-advance-tour.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Tour
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-advance-lightbox.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  GlightBox
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-news"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" /><path d="M8 8l4 0" /><path d="M8 12l4 0" /><path d="M8 16l4 0" /></svg>
            Form
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuForm" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-form-elements.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Basic Elements
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-form-select.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Select
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-form-range.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Range
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-form-editor.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Editor
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-form-upload.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Upload
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-form-picker.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Picker
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-form-validation.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Validation
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-form-layout.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Layout
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-table"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" /><path d="M3 10h18" /><path d="M10 3v18" /></svg>
            Table
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuTable" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-table-basic.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Basic Table
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-table-datatable.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Data Table
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-icons"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.5 6.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0" /><path d="M2.5 21h8l-4 -7z" /><path d="M14 3l7 7" /><path d="M14 10l7 -7" /><path d="M14 14h7v7h-7z" /></svg>
            Icon
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="menuIcon" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 space-y-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-icons-lucide.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Lucide
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="ui-icons-tabler.html">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Tabler
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item">
          <a href="ui-maps-vector.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-map"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 -3l6 3l6 -3v13l-6 3l-6 -3l-6 3v-13" /><path d="M9 4v13" /><path d="M15 7v13" /></svg>
            Vector Maps
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="ui-chart-apex.html">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-histogram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 3v18h18" /><path d="M20 18v3" /><path d="M16 16v5" /><path d="M12 13v8" /><path d="M8 16v5" /><path d="M3 11c6 0 5 -5 9 -5s3 5 9 5" /></svg>
            Apex Charts
          </a>
        </li>
      </ul>

      <div class="mt-2">
        <div class="-mb-4 flex flex-col items-center justify-center rounded-t-full border border-b-0 border-dashed border-primary-500/40 bg-primary-500/20 bg-cover bg-no-repeat px-4 pb-4 pt-10 text-center text-sm text-default-700" href="javascript:void(0)">
          <div class="relative inline-flex h-16 w-16 items-center justify-center rounded-full border border-dashed border-primary bg-primary/20">
            <img src="/assets/favicon-712e565d.ico" alt="" class="absolute start-1/2 top-1/2 h-8 w-8 -translate-x-1/2 -translate-y-1/2" />
          </div>
          <p class="my-4 text-sm font-semibold text-primary-700">
            🔥 Upgrade Your Plan. Find Out here
          </p>
          <a href="#" target="_blank" class="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-4 py-2 text-sm font-medium text-white transition-all hover:bg-primary-600">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-cashapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.1 8.648a.568 .568 0 0 1 -.761 .011a5.682 5.682 0 0 0 -3.659 -1.34c-1.102 0 -2.205 .363 -2.205 1.374c0 1.023 1.182 1.364 2.546 1.875c2.386 .796 4.363 1.796 4.363 4.137c0 2.545 -1.977 4.295 -5.204 4.488l-.295 1.364a.557 .557 0 0 1 -.546 .443h-2.034l-.102 -.011a.568 .568 0 0 1 -.432 -.67l.318 -1.444a7.432 7.432 0 0 1 -3.273 -1.784v-.011a.545 .545 0 0 1 0 -.773l1.137 -1.102c.214 -.2 .547 -.2 .761 0a5.495 5.495 0 0 0 3.852 1.5c1.478 0 2.466 -.625 2.466 -1.614c0 -.989 -1 -1.25 -2.886 -1.954c-2 -.716 -3.898 -1.728 -3.898 -4.091c0 -2.75 2.284 -4.091 4.989 -4.216l.284 -1.398a.545 .545 0 0 1 .545 -.432h2.023l.114 .012a.544 .544 0 0 1 .42 .647l-.307 1.557a8.528 8.528 0 0 1 2.818 1.58l.023 .022c.216 .228 .216 .569 0 .773l-1.057 1.057z" /></svg> 
            Upgrade
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->
  <!-- Start Content -->
  <div class="min-h-screen flex flex-col lg:ps-64 w-full">

    <!-- Start Header -->
    <header class="sticky top-0 z-40 flex h-18 w-full border-b border-default-200/95 bg-white/95 backdrop-blur-sm dark:bg-default-50/95 print:hidden">
      <nav class="flex w-full items-center gap-4 px-6">
        <!-- Navigation Toggle (in Small Screen) -->
        <div class="flex lg:hidden">
          <button type="button" class="text-default-500 hover:text-default-600" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Toggle navigation">
            <i data-lucide="align-justify" class="h-6 w-6"></i>
          </button>
        </div>

        <!-- Logo -->
        <div class="flex lg:hidden">
          <a href="admin-dashboard.html">
            <img src="/assets/logo-dark-1caee452.png" alt="logo" class="flex h-10 w-full dark:hidden" />
            <img src="/assets/logo-50f51c55.png" alt="logo" class="hidden h-10 w-full dark:flex" />
          </a>
        </div>

        <!-- Search Input -->
        <div class="hidden lg:flex">
          <label for="icon" class="sr-only">Search</label>
          <div class="relative hidden lg:flex">
            <input type="search" class="block rounded-full border-default-200 bg-default-50 py-2.5 pe-4 ps-12 text-sm text-default-800 focus:border-primary focus:ring-primary lg:w-64" placeholder="Search for items..." />
            <i class="ti ti-search absolute start-4 top-1/2 -translate-y-1/2 text-lg text-default-600"></i>
          </div>
        </div>

        <!-- Topbar Link and Dropdown Button -->
        <div class="ms-auto flex items-center gap-4">
          <button class="relative inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 overflow-hidden rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
            <svg id="light-theme"  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sun text-xl after:absolute after:inset-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" / ></svg>
            <svg id="dark-theme"  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-moon text-xl after:absolute after:inset-0"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
          </button>

          <!-- Language -->
          <div class="hidden lg:flex">
            <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
              <button id="hs-dropdown-with-header" type="button" class="hs-dropdown-toggle inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-language"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5h7" /><path d="M9 3v2c0 4.418 -2.239 8 -5 8" /><path d="M5 9c0 2.144 2.952 3.908 6.7 4" /><path d="M12 20l4 -9l4 9" /><path d="M19.1 18h-6.2" /></svg>
              </button>

              <div class="hs-dropdown-menu duration mt-2 hidden min-w-[12rem] rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                <a class="flex items-center gap-x-3.5 rounded px-3 py-2 text-sm font-medium transition-all hover:bg-default-100" href="javascript:void(0)">
                  <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpENEQyQjUxRTYxM0IxMUU3QThGRDlFNzgyMDM4RjBCQyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpENEQyQjUxRjYxM0IxMUU3QThGRDlFNzgyMDM4RjBCQyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkQ0RDJCNTFDNjEzQjExRTdBOEZEOUU3ODIwMzhGMEJDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQ0RDJCNTFENjEzQjExRTdBOEZEOUU3ODIwMzhGMEJDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAHkAAQEBAAMAAAAAAAAAAAAAAAABBgIFBwEBAAIDAQAAAAAAAAAAAAAAAAEFAgQGBxAAAQIBDQADAQAAAAAAAAAAAAECAzFRkRKi0qPjVAVVFhchQYEyEQEAAAMHBQEAAAAAAAAAAAAA4WKiUaGx0QJSFgEDBBQVMf/aAAwDAQACEQMRAD8A82fFive573uc9yqrnKqqqqvyqqqmwhKzp1JCs6dQFZ06gKzp1AVnTqArOnUCsixWPa9j3Ne1UVrkVUVFT5RUVCB2XWd701uHeNb3O1biuePebsq05nWd701uHeHudq3E495uyrTmdZ3vTW4d4e52rcTj3m7KtOZ1ne9Nbh3h7natxOPebsq05nWd701uHeHudq3E495uyrTmdZ3vTW4d4e52rcTj3m7KtOZ1ne9Nbh3h7natxOPebsq05nWd701uHeHudq3E495uyrTm3RRvTgAAAAAAADd+XpyeBmFJ9iS+Dm+QyVQPL05PAzB9iS+ByGSqB5enJ4GYPsSXwOQyVQPL05PAzB9iS+ByGSqB5enJ4GYPsSXwOQyVQPL05PAzB9iS+ByGSqB5enJ4GYPsSXwOQyVQPL05PAzB9iS+ByGSqDdlI5sAAAAAAAA5O/pZJfqT8M9f71/EdEoMQoAUAKAFACgCt/pJJfuT9MtH70/Dq//Z" alt="user-image" class="h-4" />
                  <span class="align-middle">German</span>
                </a>
                <a class="flex items-center gap-x-3.5 rounded px-3 py-2 text-sm font-medium transition-all hover:bg-default-100" href="javascript:void(0)">
                  <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowMUM1QUQyRDYxM0MxMUU3QTE2RkM2RkVEMTY1NUZGQiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowMUM1QUQyRTYxM0MxMUU3QTE2RkM2RkVEMTY1NUZGQiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjAxQzVBRDJCNjEzQzExRTdBMTZGQzZGRUQxNjU1RkZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjAxQzVBRDJDNjEzQzExRTdBMTZGQzZGRUQxNjU1RkZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAHsAAAMBAQEBAAAAAAAAAAAAAAAGBwQBAgMBAAIDAQEBAAAAAAAAAAAAAAAGBAUHAwECEAABAwEGBAYDAAAAAAAAAAAAAQIDBxExsTN0NiFRMrJhQpI0RBZxcgQRAQABAwUBAAMAAAAAAAAAAAABwTI0coIDBAYxEYEC/9oADAMBAAIRAxEAPwDc573OVznKrlW1VVbVVVMnmZlWuWrzAHKlKr9mk4/Fk72F/wCcyJ0zR24LldHlMABGqsqv2pOPxo8XFZ272ieYxd00Jdq8yKYvw6172uRzXK1zVtRUWxUVAeTES0CIwgADnSnc0mlk72F95zInTNHbguV0ekwAEZqzutNNHi4rO3e0TzGLumhMIpiABpERg4AHOlO5pNLJ3sL7zmROmaO3Bcro9JgAIzVndaaaPFxWdu9onmMXdNCYRTEADSIjBwAOdKdzSaWTvYX3nMidM0duC5XR6TAARmrO6000eLis7d7RPMYu6aEwimIAGkRGDgAc6U7mk0snewvvOZE6Zo7cFyuj0mAAjNWd1ppo8XFZ272ieYxd00JhFMQAN8+fJl9S5fRf5fDkI/8Af2fjB5ePSfIONKtzSXe2ku/ZhfecyJ0zR24LldHlMABGqsbqS720d/5cVnbvaH5jF3TQmekimF9P58+PL6m5nRf5vDmew+f7tn7+vr//2Q==" alt="user-image" class="h-4" />
                  <span class="align-middle">Italian</span>
                </a>
                <a class="flex items-center gap-x-3.5 rounded px-3 py-2 text-sm font-medium transition-all hover:bg-default-100" href="javascript:void(0)">
                  <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyODQ3Mjc2MTYxM0MxMUU3ODJENDgwMDE3MDIxNjRGOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyODQ3Mjc2MjYxM0MxMUU3ODJENDgwMDE3MDIxNjRGOCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjI4NDcyNzVGNjEzQzExRTc4MkQ0ODAwMTcwMjE2NEY4IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjI4NDcyNzYwNjEzQzExRTc4MkQ0ODAwMTcwMjE2NEY4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAI4AAQACAgMAAAAAAAAAAAAAAAAEBQEDAgYHAQEAAgMBAQAAAAAAAAAAAAAAAgYDBAUBBxAAAQMBBgMFCAMAAAAAAAAAAQIDBAAREpMFVQZR0RYyktIzFTFBIkJiExQ0YXGREQACAQEGBQMDBQAAAAAAAAAAAQIDETGRUhMUIUFREgRxoSJhgTLwscHRBf/aAAwDAQACEQMRAD8ApFOOLUVKUVKUbVKJJJJ95rln0xIxeVxNALyuJoBeVxNALyuJoBeVxNALyuJoDKXHEKCkqKVJNqVAkEEe8UDR7x6BkWnRcFvw1R9zVzSxZXdafV4nFeS7babW7Ihw2GGkqW46tlsJSlItJPw1m8edarNRU2rfqzx1qnJybKyBL2JNnrhNxGmXb9xhciGGkOKtu3bxT8JvggBVnD2105+FUsfbVeN/D1/SJz14xUndzslbYWvoGRadFwW/DXG3NXNLFkdafV4j0DItOi4LfhpuauaWLGtPq8R6BkWnRcFvw03NXNLFjWn1eI9AyLTouC34abmrmlixrT6vEegZFp0XBb8NNzVzSxY1p9XiT6wGM6vuF8QkFMWJLiflvoVmMlX47iS2oFF5KG1POAKCRZeb/wAqwLxYqEJW2vstSfX6Xe7Njxvm+Li+26/+bFgzOxsz2q4p9qQuL+XFlqBelXY6xHKQEFJIZBVeCrRZaKsFD/LhoRlWj+azP+zR8rynOpKFNy+KuSt+XuXMERVyHpbUKQw7IN2Q+6uOptZaN1ASGnHFAhJ+YCqr53jqnRptO3jL0v5cLfW37Gbul+LaaXrbx9V+xOrkgUAoBQCgKSREczGG9CGVpyq8QtUkfaV91YcCiVhtRUSeJrt1/JppU7JqXarOCljxSRHx6s1NuSl92vYhP7FQiOlMaW0VvtluaS0oG0qcsWiwi8brtnxe8A/xWat51Hsj8pSceXLl1uuNil5Vkm3CzD3LmKsmXc9ITF+2lSDmFrRW6kKF0KuEr/q2tTy6sJUIRU4uUeSUrePHmrOF15pwlPudttnqrPtx5k+uSZhQCgFAeFdUbj1OVjL51dtnRyRwLDoU8qHVG49TlYy+dNnRyRwGhTyodUbj1OVjL502dHJHAaFPKh1RuPU5WMvnTZ0ckcBoU8qHVG49TlYy+dNnRyRwGhTyodUbj1OVjL502dHJHAaFPKh1RuPU5WMvnTZ0ckcBoU8qHVG49TlYy+dNnRyRwGhTyohyf2XfK7avK7Ht+T6eFbTJRuV5r7teEh3aAd2gHdoB3aAd2gNkb9lryu2nzex7fn+njXqIyud5/9k=" alt="user-image" class="h-4" />
                  <span class="align-middle">Spanish</span>
                </a>
                <a class="flex items-center gap-x-3.5 rounded px-3 py-2 text-sm font-medium transition-all hover:bg-default-100" href="javascript:void(0)">
                  <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo0MjI1RDJEQjYxM0MxMUU3ODE3M0YwMkM1MjgyRTVFMiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo0MjI1RDJEQzYxM0MxMUU3ODE3M0YwMkM1MjgyRTVFMiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjQyMjVEMkQ5NjEzQzExRTc4MTczRjAyQzUyODJFNUUyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjQyMjVEMkRBNjEzQzExRTc4MTczRjAyQzUyODJFNUUyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAHUAAQEBAQAAAAAAAAAAAAAAAAADBggBAQADAQEAAAAAAAAAAAAAAAABAgYEAxAAAQAHBwUBAAAAAAAAAAAAAAHio9MEVKQykjNVFgcXMVFhAkIDEQEAAAQHAQADAAAAAAAAAAAAAaLiY6HRUgMTFRYxgQIy/9oADAMBAAIRAxEAPwDpwAAAAAAAABiOats85pop0dnX72nGGanJA5q2zzmminQ6/e04wzOSBzVtnnNNFOh1+9pxhmckDmrbPOaaKdDr97TjDM5IHNW2ec00U6HX72nGGZyQOats85pop0Ov3tOMMzkgc1bZ5zTRTodfvacYZnJA5q2zzmminQ6/e04wzOSDlg0rnAAAAAAAANHpFE0zWMx6O3NS3HjLslRpFE0zWHo7c1J4y7JUaRRNM1h6O3NSeMuyVGkUTTNYejtzUnjLslRpFE0zWHo7c1J4y7JUaRRNM1h6O3NSeMuyVGkUTTNYejtzUnjLslRpFE0zWHo7c1J4y7JU0RmG5AAAAAAAALRGP+mHa9sOx1+fHYmLz/T+Yffz9TukLF0BdAXQF0BdApD4/wCeHa9cSx1+vHcmCv7/AMx+/j6//9k=" alt="user-image" class="h-4" />
                  <span class="align-middle">Russian</span>
                </a>
              </div>
            </div>
          </div>

          <!-- Fullscreen Button -->
          <div class="hidden lg:flex">
            <button data-toggle="fullscreen" class="inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-maximize flex text-xl group-[-fullscreen]:hidden"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8v-2a2 2 0 0 1 2 -2h2" /><path d="M4 16v2a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v2" /><path d="M16 20h2a2 2 0 0 0 2 -2v-2" /></svg>
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-minimize hidden text-xl group-[-fullscreen]:flex"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 19v-2a2 2 0 0 1 2 -2h2" /><path d="M15 5v2a2 2 0 0 0 2 2h2" /><path d="M5 15h2a2 2 0 0 1 2 2v2" /><path d="M5 9h2a2 2 0 0 0 2 -2v-2" /></svg>
            </button>
          </div>

          <!-- Notification Dropdown -->
          <div class="hidden md:flex">
            <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
              <button id="hs-dropdown-with-header" type="button" class="hs-dropdown-toggle inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle text-xs font-medium text-default-700 transition-all hover:text-primary">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-bell animate-ring text-xl"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                <!-- <span class="absolute top-0 end-1 h-4 w-4 bg-red-500 rounded-full animate-ping"></span> -->
                <!-- <span class="absolute top-0 end-1 h-4 w-4 flex justify-center items-center bg-red-500 text-[11px] font-semibold text-white rounded-full">2</span> -->
              </button>

              <div class="hs-dropdown-menu duration mt-2 hidden min-w-[20rem] rounded-lg border border-default-200 bg-white opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                <div class="flex items-center justify-between px-4 py-2">
                  <h6 class="text-sm font-medium">Notification</h6>
                  <a href="javascript: void(0);" class="text-default-500">
                    <small>Clear All</small>
                  </a>
                </div>

                <div class="h-80 border-y border-dashed border-default-200 p-4" data-simplebar>
                  <h5 class="mb-2 text-xs text-default-700">Today</h5>

                  <a href="javascript:void(0);" class="mb-4 flex items-center">
                    <img src="/assets/1-f1564e7c.png" class="h-10 w-10 rounded-full" />
                    <div class="ms-2 flex-grow truncate">
                      <div class="flex items-center justify-between">
                        <h5 class="text-sm font-medium text-default-800">
                          Datacorp
                        </h5>
                        <small class="inline-flex text-xs text-default-500">1 min ago</small>
                      </div>
                      <small class="text-default-400">Caleb Flakelar commented on Admin</small>
                    </div>
                  </a>

                  <a href="javascript:void(0);" class="mb-4 flex items-center">
                    <div class="flex-shrink-0">
                      <img src="/assets/2-cb0540ba.png" class="h-10 w-10 rounded-full" />
                    </div>
                    <div class="ms-2 flex-grow truncate">
                      <div class="flex items-center justify-between">
                        <h5 class="text-sm font-medium text-default-800">Admin</h5>
                        <small class="inline-flex text-xs text-default-500">1 hr ago</small>
                      </div>
                      <small class="text-default-400">New user registered</small>
                    </div>
                  </a>

                  <a href="javascript:void(0);" class="mb-4 flex items-center">
                    <div class="flex-shrink-0">
                      <img src="/assets/3-7b02f585.png" class="h-10 w-10 rounded-full" />
                    </div>
                    <div class="ms-2 flex-grow truncate">
                      <div class="flex items-center justify-between">
                        <h5 class="text-sm font-medium text-default-800">
                          Cristina Pride
                        </h5>
                        <small class="inline-flex text-xs text-default-500">1 day ago</small>
                      </div>
                      <small class="text-default-400">Hi, How are you? What about our next meeting</small>
                    </div>
                  </a>

                  <h5 class="mb-2 text-xs text-default-700">Yesterday</h5>

                  <a href="javascript:void(0);" class="mb-4 flex items-center">
                    <div class="flex-shrink-0">
                      <img src="assets/4-2345eb04.png" class="h-10 w-10 rounded-full" />
                    </div>
                    <div class="ms-2 flex-grow truncate">
                      <h5 class="mb-1 text-sm font-semibold">Datacorp</h5>
                      <small class="text-default-400">Caleb Flakelar commented on Admin</small>
                    </div>
                  </a>

                  <a href="javascript:void(0);" class="flex">
                    <div class="flex-shrink-0">
                      <img src="/assets/5-0368e7b5.png" class="h-10 w-10 rounded-full" />
                    </div>
                    <div class="ms-2 flex-grow truncate">
                      <h5 class="mb-1 text-sm font-semibold">Karen Robinson</h5>
                      <small class="text-default-400">Wow ! this admin looks good and awesome design</small>
                    </div>
                  </a>
                </div>

                <a href="javascript:void(0);" class="block px-4 py-2 text-center text-sm font-medium text-primary">
                  View All
                </a>
              </div>
            </div>
          </div>

          <!-- Profile Dropdown -->
          <div class="flex">
            <div class="hs-dropdown relative inline-flex">
              <button id="hs-dropdown-with-header" type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 items-center justify-center gap-2 rounded-md align-middle text-xs font-medium text-default-700 transition-all">
                <img class="inline-block h-10 w-10 rounded-full" src="/assets/7-37b455da.png" />
                <div class="hidden text-start lg:block">
                  <p class="text-xs font-semibold text-default-700">Mary Hopkins</p>
                  <p class="mt-1 text-xs text-default-500">Admin</p>
                </div>
              </button>

              <div class="hs-dropdown-menu duration mt-2 hidden min-w-[12rem] rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-800 transition-all hover:bg-default-100" href="admin-wallet.html">
                  <i class="ti ti-wallet text-base"></i>
                  Wallet
                </a>
                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-800 transition-all hover:bg-default-100" href="home.html" target="_blank">
                  <i class="ti ti-browser text-base"></i>
                  Landing
                </a>

                <hr class="-mx-2 my-2 border-default-200" />

                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-red-500 hover:bg-red-400/10" href="auth-login.html">
                  <i class="h-4 w-4" data-lucide="log-out"></i>
                  Log out
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- End Header -->