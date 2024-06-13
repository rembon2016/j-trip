<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('landing-page.home') }}" class="app-brand-link">
            <img src="{{ asset('assets/landing-page/images/J-Tripロゴ.svg') }}" width="85" alt="">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dashboard</span>
        </li>

        <li class="menu-item @if(Route::is('admin.dashboard.index')) active @endif">
            <a href="{{ route('admin.dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item @if(Route::is('admin.profile.index')) active @endif">
            <a href="{{ route('admin.profile.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Profil Saya">Profil Saya</div>
            </a>
        </li>

        @has([
            'see-administrator',
            'see-staff'
        ])
            <!-- Users -->
            <li class="menu-item @if(Route::is('admin.users.*')) active open @endif">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-group"></i>
                    <div data-i18n="Users">Users</div>
                </a>

                <ul class="menu-sub">
                    @has('see-administrator')
                    <li class="menu-item @if(Route::is(('admin.users.administrator.*'))) active @endif">
                        <a href="{{ route('admin.users.administrator.index') }}" class="menu-link">
                            <div data-i18n="Administrator">Administrator</div>
                        </a>
                    </li>
                    @endhas

                    @has('see-staff')
                    <li class="menu-item @if(Route::is(('admin.users.staff.*'))) active @endif">
                        <a href="{{ route('admin.users.staff.index') }}" class="menu-link">
                            <div data-i18n="Staff">Staff</div>
                        </a>
                    </li>
                    @endhas
                </ul>
            </li>
        @endhas

        @has([
            'see-destination',
            'see-tour-type',
            'see-tour'
        ])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Vacation</span>
            </li>

            @has('see-destination')
            <li class="menu-item @if(Route::is('admin.destination.*')) active @endif">
                <a href="{{ route('admin.destination.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-map-pin"></i>
                    <div data-i18n="Destinasi">Destinasi</div>
                </a>
            </li>
            @endhas

            @has('see-tour-type')
            <li class="menu-item @if(Route::is('admin.tour-type.*')) active @endif">
                <a href="{{ route('admin.tour-type.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-directions"></i>
                    <div data-i18n="Tipe Tour">Tipe Tour</div>
                </a>
            </li>
            @endhas

            @has('see-tour')
            <li class="menu-item @if(Route::is('admin.tour.*')) active @endif">
                <a href="{{ route('admin.tour.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-trip"></i>
                    <div data-i18n="Tour">Tour</div>
                </a>
            </li>
            @endhas
        @endhas

        @has([
            'see-booking-tour',
            'see-customer-feedback'
        ])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Message</span>
            </li>

            @has('see-booking-tour')
            <li class="menu-item @if(Route::is('admin.booking-tour.*')) active @endif">
                <a href="{{ route('admin.booking-tour.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
                    <div data-i18n="Booking Tour">Booking Tour</div>
                </a>
            </li>
            @endhas

            @has('see-customer-feedback')
            <li class="menu-item @if(Route::is('admin.customer-feedback.*')) active @endif">
                <a href="{{ route('admin.customer-feedback.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-question-mark"></i>
                    <div data-i18n="Customer Feedback">Customer Feedback</div>
                </a>
            </li>
            @endhas
        @endhas

        @has([
            'see-blog',
            'see-gallery',
            'see-testimonial'
        ])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Content</span>
            </li>

            @has('see-blog')
            <li class="menu-item @if(Route::is('admin.blog.*')) active @endif">
                <a href="{{ route('admin.blog.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-news"></i>
                    <div data-i18n="Blog">Blog</div>
                </a>
            </li>
            @endhas

            @has('see-gallery')
            <li class="menu-item @if(Route::is('admin.gallery.*')) active @endif">
                <a href="{{ route('admin.gallery.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-images"></i>
                    <div data-i18n="Galeri">Galeri</div>
                </a>
            </li>
            @endhas

            @has('see-testimonial')
            <li class="menu-item @if(Route::is('admin.testimonial.*')) active @endif">
                <a href="{{ route('admin.testimonial.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-message-dots"></i>
                    <div data-i18n="Testimoni">Testimoni</div>
                </a>
            </li>
            @endhas
        @endhas

        @has([
            'manage-web-setting'
        ])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Other</span>
            </li>

            @has('manage-web-setting')
            <li class="menu-item @if(Route::is('admin.setting.*')) active @endif">
                <a href="{{ route('admin.setting.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-cog"></i>
                    <div data-i18n="Web Setting">Web Setting</div>
                </a>
            </li>
            @endhas
        @endhas
    </ul>
</aside>
<!-- / Menu -->