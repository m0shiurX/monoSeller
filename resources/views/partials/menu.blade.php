<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/permissions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-user-shield c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('sales_page_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.sales-pages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sales-pages") || request()->is("admin/sales-pages/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.salesPage.title') }}
                </a>
            </li>
        @endcan
        @can('store_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/products*") ? "c-show" : "" }} {{ request()->is("admin/orders*") ? "c-show" : "" }} {{ request()->is("admin/coupons*") ? "c-show" : "" }} {{ request()->is("admin/store-settings*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-store c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.store.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('product_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.products.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cube c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.product.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('order_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.order.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('coupon_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.coupons.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/coupons") || request()->is("admin/coupons/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-gift c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.coupon.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('template_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/templates") || request()->is("admin/templates/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-thermometer c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.template.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('store_setting_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.store-settings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/store-settings") || request()->is("admin/store-settings/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-sliders-h c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.storeSetting.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('customer_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.customers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.customer.title') }}
                </a>
            </li>
        @endcan
        @can('setting_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/business-infos*") ? "c-show" : "" }} {{ request()->is("admin/trackings*") ? "c-show" : "" }} {{ request()->is("admin/tos*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.setting.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('business_info_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.business-infos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/business-infos") || request()->is("admin/business-infos/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-building c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.businessInfo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('tracking_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.trackings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/trackings") || request()->is("admin/trackings/*") ? "c-active" : "" }}">
                                <i class="fas fa-user-secret fa-fw c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tracking.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('policy_and_tos_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.policy-and-tos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/policy-and-tos") || request()->is("admin/policy-and-tos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-book c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.policyAndTos.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
