<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li @if(Request::route()->getName() == 'home') class="active" @endif class="nav-item">
                <a href="{{ route('home') }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">{{ trans('translate.dashboard') }}</span>
                </a>
            </li>

            <li @if(Request::route()->getName() == 'settings') class="active" @endif class="nav-item">
                <a href="{{ route('settings') }}" class="nav-link nav-toggle">
                    <i class="fa fa-gear"></i>
                    <span class="title">{{ trans('translate.settings') }}</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-adjust"></i>
                    <span class="title">{{ trans('translate.static_pages') }}</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('home_page_static') }}" class="nav-link">
                            <i class="fa fa-tasks"></i>
                            <span class="title">{{ trans('translate.home_page') }}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('career_page_static') }}" class="nav-link ">
                            <i class="fa fa-tasks"></i>
                            <span class="title">{{ trans('translate.join_career') }}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('partner_page_static') }}" class="nav-link ">
                            <i class="fa fa-tasks"></i>
                            <span class="title">{{ trans('translate.become_partner') }}</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{ route('footer_static') }}" class="nav-link ">
                            <i class="fa fa-tasks"></i>
                            <span class="title">{{ trans('translate.footer_static') }}</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li @if(Request::route()->getName() == 'social_links') class="active" @endif class="nav-item">
                <a href="{{ route('social_links') }}" class="nav-link nav-toggle">
                    <i class="fa fa-link"></i>
                    <span class="title">{{ trans('translate.social_links') }}</span>
                </a>
            </li>

            <li @if(Request::route()->getName() == 'career_message') class="active" @endif class="nav-item">
                <a href="{{ route('career_message') }}" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">{{ trans('translate.join_career_message') }}</span>
                </a>
            </li>


            <li @if(Request::route()->getName() == 'become_partner_admin') class="active" @endif class="nav-item">
                <a href="{{ route('become_partner_admin') }}" class="nav-link nav-toggle">
                    <i class="fa fa-bars"></i>
                    <span class="title">{{ trans('translate.become_partner_message') }}</span>
                </a>
            </li>

            <li @if(Request::route()->getName() == 'users') class="active" @endif class="nav-item">
                <a href="{{ route('users') }}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">{{ trans('translate.users') }}</span>
                </a>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->