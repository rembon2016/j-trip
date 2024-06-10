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

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>

        <!-- Users -->
        <li class="menu-item @if(Route::is('admin.users.*')) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Users">Users</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Route::is(('admin.users.administrator.*'))) active @endif">
                    <a href="{{ route('admin.users.administrator.index') }}" class="menu-link">
                        <div data-i18n="Administrator">Administrator</div>
                    </a>
                </li>

                <li class="menu-item @if(Route::is(('admin.users.staff.*'))) active @endif">
                    <a href="{{ route('admin.users.staff.index') }}" class="menu-link">
                        <div data-i18n="Staff">Staff</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Vacation</span>
        </li>

        <li class="menu-item @if(Route::is('admin.destination.*')) active @endif">
            <a href="{{ route('admin.destination.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-pin"></i>
                <div data-i18n="Destinasi">Destinasi</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Content</span>
        </li>

        <li class="menu-item @if(Route::is('admin.blog.*')) active @endif">
            <a href="{{ route('admin.blog.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-news"></i>
                <div data-i18n="Blog">Blog</div>
            </a>
        </li>

        <li class="menu-item @if(Route::is('admin.gallery.*')) active @endif">
            <a href="{{ route('admin.gallery.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div data-i18n="Galeri">Galeri</div>
            </a>
        </li>

        <li class="menu-item @if(Route::is('admin.testimonial.*')) active @endif">
            <a href="{{ route('admin.testimonial.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-dots"></i>
                <div data-i18n="Testimoni">Testimoni</div>
            </a>
        </li>
        
        {{-- 
        @role('admin')
        <!-- Users -->
        <li class="menu-item @if(Route::is('dashboard.users.*')) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Users">Users</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Route::is(('dashboard.users.administrator.*'))) active @endif">
                    <a href="{{ route('dashboard.users.administrator.index') }}" class="menu-link">
                        <div data-i18n="Administrator">Administrator</div>
                    </a>
                </li>

                <li class="menu-item @if(Route::is(('dashboard.users.user.*'))) active @endif">
                    <a href="{{ route('dashboard.users.user.index') }}" class="menu-link">
                        <div data-i18n="Pengguna">Pengguna</div>
                    </a>
                </li>
            </ul>
        </li>
        @endrole
        
        <!-- Barang -->
        <li class="menu-item @if(Route::is('dashboard.items.*')) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Barang">Barang</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Route::is('dashboard.items.category.*')) active @endif">
                    <a href="{{ route('dashboard.items.category.index') }}" class="menu-link">
                        <div data-i18n="Kategori barang">Kategori Barang</div>
                    </a>
                </li>

                <li class="menu-item @if(Route::is('dashboard.items.item.*')) active @endif">
                    <a href="{{ route('dashboard.items.item.index') }}" class="menu-link">
                        <div data-i18n="Data Barang">Data Barang</div>
                    </a>
                </li>
            </ul>
        </li>
        
        <!-- Supplier -->
        <li class="menu-item @if(Route::is('dashboard.supplier.*')) active @endif">
            <a href="{{ route('dashboard.supplier.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="Supplier">Supplier</div>
            </a>
        </li>
        
        <!-- Pelanggan -->
        <li class="menu-item @if(Route::is('dashboard.customer.*')) active @endif">
            <a href="{{ route('dashboard.customer.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-pin"></i>
                <div data-i18n="Pelanggan">Pelanggan</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Transaksi</span>
        </li>
        
        <!-- Barang Masuk -->
        <li class="menu-item @if(Route::is('dashboard.transaction.incoming.*')) active @endif">
            <a href="{{ route('dashboard.transaction.incoming.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-down-arrow-circle"></i>
                <div data-i18n="Barang Masuk">Barang Masuk</div>
            </a>
        </li>

        <!-- Transaksi Penjualan -->
        <li class="menu-item @if(Route::is('dashboard.transaction.sale.*')) active @endif">
            <a href="{{ route('dashboard.transaction.sale.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-up-arrow-circle"></i>
                <div data-i18n="Transaksi Penjualan">Transaksi Penjualan</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Laporan</span>
        </li>
        
        <!-- Stok Barang -->
        <li class="menu-item @if(Route::is('dashboard.report.stock.*')) active @endif">
            <a href="{{ route('dashboard.report.stock.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Stok Barang">Stok Barang</div>
            </a>
        </li>

        <!-- Laporan Barang Masuk -->
        <li class="menu-item @if(Route::is('dashboard.report.incoming.*')) active @endif">
            <a href="{{ route('dashboard.report.incoming.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-report"></i>
                <div data-i18n="Laporan Barang Masuk">Laporan Barang Masuk</div>
            </a>
        </li>

        <!-- Laporan Penjualan -->
        <li class="menu-item @if(Route::is('dashboard.report.sale.*')) active @endif">
            <a href="{{ route('dashboard.report.sale.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-report"></i>
                <div data-i18n="Laporan Penjualan">Laporan Penjualan</div>
            </a>
        </li>

        @role('admin')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Pesan</span>
            </li>


            <!-- Layanan Pelanggan -->
            <li class="menu-item @if(Route::is('dashboard.customer-message.*')) active @endif">
                <a href="{{ route('dashboard.customer-message.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-message-dots"></i>
                    <div data-i18n="Layanan Pelanggan">Layanan Pelanggan</div>
                </a>
            </li>
        @endrole --}}
    </ul>
</aside>
<!-- / Menu -->