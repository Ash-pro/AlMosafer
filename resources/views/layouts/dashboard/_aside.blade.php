<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                    src="{{asset('dashboard_files/images/logo.jpeg')}}"
                    width="90px"
                    hight="100px"
                    alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{auth()->user()->name}}</p>
            <p class="app-sidebar__user-designation">{{implode(', ' , auth()->user()->roles->pluck('name')->toArray())}}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item active" href="{{route('dashboard.welcome')}}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span
                    class="app-menu__label">{{ __('site.Dashboard')}}
                </span>
            </a>
        </li>
         <li>
         @if(auth()->user()->hasPermission('read_categories'))
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-laptop"></i>
                    <span class="app-menu__label">{{ __('site.Service')}}</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a class="treeview-item" href="{{route('dashboard.categories.index')}}"><i class="icon fa fa-circle-o"></i>
                            {{ __('site.General Description')}}
                        </a>
                    </li>

                    <li>
                        <a class="treeview-item" href="{{route('dashboard.serviceItem.index')}}"
                           rel="noopener"><i class="icon fa fa-circle-o"></i> {{ __('site.All Service')}}
                        </a>
                    </li>

                </ul>
            </li>

         @endif

        @if(auth()->user()->hasPermission('read_consultation_requests'))
            <li>
                <a class="app-menu__item " href="{{route('dashboard.consultation_requests.index')}}">
                    <i class="app-menu__icon fa fa-list"></i>
                    <span
                        class="app-menu__label">{{ __('site.Consultation Requests')}}
                     </span>
                </a>
            </li>
        @endif

        @if(auth()->user()->hasPermission('read_advertisement'))
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-laptop"></i>
                    <span class="app-menu__label">{{ __('site.Advertisement')}}</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a class="treeview-item" href="{{route('dashboard.advertisement.index')}}"><i class="icon fa fa-circle-o"></i>
                            {{ __('site.General Description')}}
                        </a>
                    </li>

                    <li>
                        <a class="treeview-item" href="{{route('dashboard.advertisementItems.index')}}"
                           rel="noopener"><i class="icon fa fa-circle-o"></i> {{ __('site.All Advertisement')}}
                        </a>
                    </li>

                </ul>
            </li>

        @endif

        @if(auth()->user()->hasPermission('read_WhoAreWe'))
            <li>
                <a class="app-menu__item " href="{{route('dashboard.WhoAreWes.index')}}">
                    <i class="app-menu__icon fa fa-list"></i>
                    <span
                        class="app-menu__label">{{ __('site.Who Are We')}}
                     </span>
                </a>
            </li>
        @endif
        @if(auth()->user()->hasPermission('read_WhoAreWe'))
            <li>
                <a class="app-menu__item " href="{{route('dashboard.contact_us.index')}}">
                    <i class="app-menu__icon fa fa-list"></i>
                    <span
                        class="app-menu__label">{{ __('site.Contact Us')}}
                     </span>
                </a>
            </li>
        @endif


        @if(auth()->user()->hasPermission('read_roles'))
            <li>
                <a class="app-menu__item " href="{{route('dashboard.roles.index')}}">
                    <i class="app-menu__icon fa fa-anchor"></i>
                    <span
                        class="app-menu__label">{{ __('site.Roles')}}
                </span>
                </a>
            </li>
        @endif

        @if(auth()->user()->hasPermission('read_users'))
            <li>
                <a class="app-menu__item " href="{{route('dashboard.users.index')}}">
                    <i class="app-menu__icon fa fa-users"></i>
                    <span
                        class="app-menu__label">{{ __('site.Users')}}
                </span>
                </a>
            </li>
        @endif

        @if(auth()->user()->hasPermission('read_settings'))
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-laptop"></i>
                    <span class="app-menu__label">{{ __('site.Settings')}}</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>
                            {{ __('site.Pages Settings')}}
                        </a>
                    </li>

                    <li>
                        <a class="treeview-item" href="{{route('dashboard.settings.social_login')}}"
                           rel="noopener"><i class="icon fa fa-circle-o"></i> {{ __('site.Social Login')}}
                        </a>
                    </li>

                    <li>
                        <a class="treeview-item" href="{{route('dashboard.settings.social_links')}}"
                           rel="noopener"><i class="icon fa fa-circle-o"></i> {{ __('site.Social Links')}}
                        </a>
                    </li>
                </ul>
            </li>
        @endif

{{--         @if(auth()->user()->hasPermission('read_donations'))--}}
{{--            <li>--}}
{{--                <a class="app-menu__item " href="{{route('dashboard.donations.index')}}">--}}
{{--                    <i class="app-menu__icon fa fa-product-hunt"></i>--}}
{{--                    <span--}}
{{--                        class="app-menu__label">{{ __('site.Donation items')}}--}}
{{--                </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endif--}}

{{--        @if(auth()->user()->hasPermission('read_posts'))--}}
{{--            <li>--}}
{{--                <a class="app-menu__item " href="#">--}}
{{--                    <i class="app-menu__icon fa Example of clipboard fa-clipboard"></i>--}}
{{--                    <span--}}
{{--                        class="app-menu__label">{{ __('site.Posts')}}--}}
{{--                </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endif--}}




{{--        <li class="treeview">--}}
{{--            <a class="app-menu__item" href="#" data-toggle="treeview">--}}
{{--                <i class="app-menu__icon fa fa-laptop"></i>--}}
{{--                    <span class="app-menu__label">UI Elements</span>--}}
{{--                <i class="treeview-indicator fa fa-angle-right"></i>--}}
{{--            </a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i>--}}
{{--                        Bootstrap Elements--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank"--}}
{{--                       rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

    </ul>
</aside>
