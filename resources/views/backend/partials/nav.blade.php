<!-- START: Header -->
<header class="m-grid__item m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
    <div class="m-container m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">
            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-light">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="/" class="m-brand__logo-wrapper">
                            <h2>MMS</h2>
                        </a>
                    </div>

                    <div class="m-stack__item m-stack__item--middle m-brand__tools">
                        <!-- BEGIN: Responsive Header Menu Toggler -->
                        <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>
                        <!-- END -->
                        <!-- BEGIN: Topbar Toggler -->
                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>
                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>
            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                <!-- BEGIN: Horizontal Menu -->
                <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
                    <i class="la la-close"></i>
                </button>
                <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
                    <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">

                        <li class="m-menu__item">
                            <a class="m-menu__link" href="{{ route('dashboard.index') }}">
                                <i class="m-menu__link-icon flaticon-dashboard"></i>
                                <span class="m-menu__link-text">Dashboard</span>
                            </a>
                        </li>
                            <li class="m-menu__item">
                                <a class="m-menu__link" href="{{ route('expense.index') }}">
                                    <i class="m-menu__link-icon flaticon-users"></i>
                                    <span class="m-menu__link-text">Expenses</span>
                                </a>
                            </li>
                        <li class="m-menu__item">
                            <a class="m-menu__link" href="{{ route('deposit.index') }}">
                                <i class="m-menu__link-icon la la-gbp"></i>
                                <span class="m-menu__link-text">Deposits</span>
                            </a>
                        </li>
                        
                        <li class="m-menu__item">
                            <a class="m-menu__link" href="{{ route('meal.index') }}">
                                <i class="m-menu__link-icon la la-legal"></i>
                                <span class="m-menu__link-text">Create Meals</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END: Horizontal Menu -->

                <!-- BEGIN: Topbar -->
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-topbar__userpic">
                                        <img src="/assets/backend/img/logo.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                    </span>
                                    <span class="m-topbar__username m--hide">
                                                    
                                    </span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center">
                                            <div class="m-card-user m-card-user--skin-light">
                                                <div class="m-card-user__pic">
                                                    <img src="" class="m--img-rounded m--marginless" alt=""/>
                                                </div>
                                                <div class="m-card-user__details">
                                                    <span class="m-card-user__name m--font-weight-500">
                                                        {{ Auth::user()->name }}
                                                    </span>
                                                <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                    jaber@rootsoftit.com
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">
                                                    <li class="m-nav__section m--hide">
                                                    <span class="m-nav__section-text">
                                                        Section
                                                    </span>
                                                    </li>
                                                    @auth
                                                        <li class="m-nav__item">
                                                            <a href="#" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
                                                                    <span class="m-nav__link-wrap">
                                                                        <span class="m-nav__link-text">
                                                                            My Profile
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="{{ route('logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder"
                                                           onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">

                                                            Logout
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Topbar -->
            </div>
        </div>
    </div>
</header>
<!-- END: Header-->