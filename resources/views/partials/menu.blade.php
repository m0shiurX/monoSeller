<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show  tw-w-[300px] tw-max-w-full">
    <div class="tw-flex tw-h-full">
        {{-- First column in drawer --}}
        <div class="tw-flex tw-flex-col tw-w-[80px] tw-bg-secondary tw-text-white tw-border-r tw-border-primary/20">
            <div class="tw-inline-flex tw-justify-center tw-w-full tw-items-center tw-h-16" href="#">
                <img class="tw-w-8 tw-h-8" src="{{ asset('assets/quick.png') }}" alt="">
            </div>
            {{-- First col top icons --}}
            <div id="main-menu" class="tw-flex tw-flex-col">
                <div class="tw-flex tw-h-16 tw-w-full tw-items-center tw-justify-center">
                    <button data-target="dashboard" type="button" class="tw-menu-btn {{ request()->is("admin/dashboard") ? "tw-active-menu-btn" : "" }}" data-tip="Dashboard">
                        {{-- Dashboard icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="tw-w-5 tw-h-5" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="M88 48v160H40a8 8 0 0 1-8-8V56a8 8 0 0 1 8-8Z" opacity=".2"/>
                                <path d="M216 40H40a16 16 0 0 0-16 16v144a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16M40 152h16a8 8 0 0 0 0-16H40v-16h16a8 8 0 0 0 0-16H40V88h16a8 8 0 0 0 0-16H40V56h40v144H40Zm176 48H96V56h120z"/>
                            </g>
                        </svg>
                    </button>
                </div>

                <div class="tw-flex tw-h-16 tw-w-full tw-items-center tw-justify-center">
                    <button data-target="store" type="button" class="tw-menu-btn {{ request()->is("admin/store/*") ? "tw-active-menu-btn" : "" }}" data-tip="Store">
                        {{-- Shoppig bag icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="tw-size-5" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="M224 96v16a32 32 0 0 1-64 0V96H96v16a32 32 0 0 1-64 0V96l14-50a8 8 0 0 1 8-6h148a8 8 0 0 1 8 6Z" opacity=".2"/>
                                <path d="M232 96a8 8 0 0 0 0-2l-15-50a16 16 0 0 0-15-12H54a16 16 0 0 0-15 12L24 94a8 8 0 0 0 0 2v16a40 40 0 0 0 16 32v64a16 16 0 0 0 16 16h144a16 16 0 0 0 16-16v-64a40 40 0 0 0 16-32ZM54 48h148l11 40H43Zm50 56h48v8a24 24 0 0 1-48 0Zm-16 0v8a24 24 0 0 1-48 0v-8Zm112 104H56v-57a41 41 0 0 0 8 1 40 40 0 0 0 32-16 40 40 0 0 0 64 0 40 40 0 0 0 32 16 41 41 0 0 0 8-1Zm-8-72a24 24 0 0 1-24-24v-8h48v8a24 24 0 0 1-24 24"/>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="tw-flex tw-h-16 tw-w-full tw-items-center tw-justify-center">
                    <button data-target="pages" type="button" class="tw-menu-btn {{ request()->is("admin/pages/*") ? "tw-active-menu-btn" : "" }}" data-tip="Pages">
                        {{-- Document icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="tw-size-5" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="m216 160-56 56v-56Z" opacity=".2"/>
                                <path d="M88 96a8 8 0 0 1 8-8h64a8 8 0 0 1 0 16H96a8 8 0 0 1-8-8m8 40h64a8 8 0 0 0 0-16H96a8 8 0 0 0 0 16m32 16H96a8 8 0 0 0 0 16h32a8 8 0 0 0 0-16m96-104v109a16 16 0 0 1-5 11l-51 51a16 16 0 0 1-11 5H48a16 16 0 0 1-16-16V48a16 16 0 0 1 16-16h160a16 16 0 0 1 16 16M48 208h104v-48a8 8 0 0 1 8-8h48V48H48Zm120-40v29l29-29Z"/>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="tw-flex tw-h-16 tw-w-full tw-items-center tw-justify-center">
                    <button data-target="customers" type="button" class="tw-menu-btn {{ request()->is("admin/crm/*") ? "tw-active-menu-btn" : "" }}" data-tip="Customers">
                        {{-- Users icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                    </button>
                </div>

                <div class="tw-flex tw-h-16 tw-w-full tw-items-center tw-justify-center">
                    <button data-target="roles" type="button" class="tw-menu-btn {{ request()->is("admin/auth/*") ? "tw-active-menu-btn" : "" }}" data-tip="Roles & Permission" >
                        {{-- Sheild Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- First col bottom icons --}}
            <div class="tw-flex tw-flex-col tw-mt-auto">
                <div class="tw-flex tw-h-16 tw-w-full tw-items-center tw-justify-center">
                    <button onclick="swatches.showModal()" type="button" class="tw-menu-btn " data-tip="Customize">
                        {{-- Swatches icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                        </svg>

                    </button>
                </div>
                <div class="tw-flex tw-h-16 tw-w-full tw-items-center tw-justify-center">
                    <button type="button" class="tw-menu-btn {{ request()->is("admin/settings/*") ? "tw-active-menu-btn" : "" }}" >
                        {{-- Settings icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
        <div class="tw-w-[220px] tw-bg-secondary/90 tw-text-white tw-border-r  tw-border-primary/20">
            <div class="tw-flex tw-h-16 tw-w-full tw-items-center tw-pt-3 tw-px-6">
                <div id="menu-title" class="tw-font-heading tw-text-base-100 tw-text-lg tw-font-light tw-capitalize dark:tw-text-white">Dashboard</div>
            </div>
            <ul id="dashboard" class="sub-menu {{ request()->is("admin/dashboard") || request()->is("admin/settings/*") ? "tw-active-menu" : "" }} tw-menu">
                <li><a class="tw-menu-link" href="">Overview</a></li>
                <li>
                    <details open>
                        <summary>Reports</summary>
                        <ul class="tw-space-y-1">
                            <li>
                                <a class="tw-menu-link" href="{{route('admin.orders.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                                </svg>
                                Sales Report</a>
                            </li>
                            <li>
                                <a class="tw-menu-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                </svg>
                                Customers Report</a>
                            </li>
                            <li>
                                <a class="tw-menu-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                </svg>
                                Leads Report</a>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details open>
                        <summary>Analytics</summary>
                        <ul>
                            <li><a class="tw-menu-link" href="">Page Analytics</a></li>
                            <li><a class="tw-menu-link" href="">Video Analytics</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
            <ul id="store" class="sub-menu {{ request()->is("admin/store/*") ? "tw-active-menu" : "" }} tw-menu">
                <li><a class="tw-menu-link {{ Route::currentRouteName() === 'admin.orders.index' ? 'tw-active-link' : '' }}" href="{{ route('admin.orders.index') }}">Orders</a></li>
                <li>
                    <details open class="py-2 {{ request()->is("admin/store/products") || request()->is("admin/store/products/*") ? "tw-active-group" : "" }}">
                    <summary>Products</summary>
                    <ul class="tw-space-y-1">
                        <li><a class="tw-menu-link {{ Route::currentRouteName() === 'admin.products.index' ? 'tw-active-link' : '' }}" href="{{ route('admin.products.index') }}">All Products</a></li>
                        <li><a class="tw-menu-link {{ Route::currentRouteName() === 'admin.products.create' ? 'tw-active-link' : '' }}" href="{{ route('admin.products.create') }}">Create a new Product</a></li>
                    </ul>
                    </details>
                </li>
                <li>
                    <details open class="py-2">
                        <summary>Packages</summary>
                        <ul class="tw-space-y-1">
                            <li><a class="tw-menu-link ">All Package</a></li>
                            <li><a class="tw-menu-link ">Create Package</a></li>
                        </ul>
                    </details>
                </li>
                <li><a class="tw-menu-link {{ request()->is("admin/store/coupons") || request()->is("admin/store/coupons/*") ? "tw-active-link" : "" }}" href="{{ route('admin.coupons.index') }}">Cuopons</a></li>
                <li><a class="tw-menu-link {{ request()->is("admin/store/store-settings") ? "tw-active-link" : "" }}" href="{{ route('admin.store-settings.index') }}">Delivery</a></li>
            </ul>
            <ul id="pages" class="sub-menu {{ request()->is("admin/pages/*") ? "tw-active-menu" : "" }} tw-menu">
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Orders</a></li>
                <li>
                    <details open>
                    <summary>Products</summary>
                    <ul>
                        <li><a>All Products</a></li>
                        <li><a>Create a new Product</a></li>
                    </ul>
                    </details>
                </li>
                <li>
                    <details open>
                        <summary>Packages</summary>
                        <ul>
                            <li><a>All Package</a></li>
                            <li><a>Create Package</a></li>
                        </ul>
                    </details>
                </li>
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Cupons</a></li>
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Delivery</a></li>
            </ul>
            <ul id="customers" class="sub-menu {{ request()->is("admin/crm/*") ? "tw-active-menu" : "" }} tw-menu">
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Orders</a></li>
                <li>
                    <details open>
                    <summary>Products</summary>
                    <ul>
                        <li><a>All Products</a></li>
                        <li><a>Create a new Product</a></li>
                    </ul>
                    </details>
                </li>
                <li>
                    <details open>
                        <summary>Packages</summary>
                        <ul>
                            <li><a>All Package</a></li>
                            <li><a>Create Package</a></li>
                        </ul>
                    </details>
                </li>
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Cupons</a></li>
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Delivery</a></li>
            </ul>
            <ul id="roles" class="sub-menu {{ request()->is("admin/auth/*") ? "tw-active-menu" : "" }} tw-menu">
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Orders</a></li>
                <li>
                    <details open>
                    <summary>Products</summary>
                    <ul>
                        <li><a>All Products</a></li>
                        <li><a>Create a new Product</a></li>
                    </ul>
                    </details>
                </li>
                <li>
                    <details open>
                        <summary>Packages</summary>
                        <ul>
                            <li><a>All Package</a></li>
                            <li><a>Create Package</a></li>
                        </ul>
                    </details>
                </li>
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Cupons</a></li>
                <li><a class="text-muted-400 hover:text-primary-500 focus:text-primary-500 flex w-full items-center ps-3 transition-colors duration-300" href="">Delivery</a></li>
            </ul>
        </div>
    </div>
</div>
