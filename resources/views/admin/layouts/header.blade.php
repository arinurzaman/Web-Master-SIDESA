<!-- BEGIN #app -->
<div id="app" class="app app-header-fixed app-sidebar-fixed  app-with-wide-sidebar app-with-light-sidebar">
    <!-- BEGIN #header -->
    <div id="header" class="app-header">
        <!-- BEGIN navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-desktop-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ asset('dashboard') }}" class="navbar-brand">
                <b class="me-1">Admin</b> Sidesa
                <span class="navbar-logo">
                    <span class="text-blue">K</span>
                    <span class="text-red">a</span>
                    <span class="text-orange">r</span>
                    <span class="text-blue">a</span>
                    <span class="text-green">n</span>
                    <span class="text-red">g</span>
                    <span class="text-blue">A</span>
                    <span class="text-red">n</span>
                    <span class="text-orange">y</span>
                    <span class="text-blue">a</span>
                    <span class="text-red">r</span>

               
                </span>
            </a>
            <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- END navbar-header -->
        <!-- BEGIN header-nav -->
        <div class="navbar-nav">
            <div class="navbar-item navbar-form">
                <form action="" method="POST" name="search">
                    
                </form>
            </div>
            
            <div class="navbar-item navbar-user dropdown">
                <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                    <img src="{{ asset('/assets/img/user/user-16.png') }}" alt="" /> 
                    <span class="d-none d-md-inline">{{ auth()->user()->name }}</span> <b class="caret ms-lg-2"></b>
                </a>
                <div class="dropdown-menu dropdown-menu-end me-1">
                    <a href="{{ ('/logout') }}" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
        <!-- END header-nav -->
    </div>
    <!-- END #header -->

    
<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
<!-- BEGIN scrollbar -->
<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
    <!-- BEGIN menu -->
    <div class="menu">
        <div class="menu-profile">
            <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                <div class="menu-profile-cover with-shadow"></div>
                <div class="menu-profile-image">
                    <img src="{{ asset('/assets/img/user/user-16.png') }}" alt=""  />
                </div>
                <div class="menu-profile-info">
                    <div class="d-flex align-items-center ">
                        <div class="flex-grow-1">
                            {{ auth()->user()->name }}
                        </div>
                        
                    </div>
                    <small>{{ auth()->user()->role }}</small>
                </div>
            </a>
        </div>
       
        <div class="menu-item mt-3">
            <a href="{{ ('/dashboard') }}" class="menu-link">
                <div class="menu-icon">
                    <i class="material-icons">dashboard</i>
                </div>
                <div class="menu-text">Dashboard</div>
            </a>
        </div>

        <div class="menu-header">Menu</div>

        @if(auth()->user()->role=='Administrator')
        
        <div class="menu-item">
            <a href="{{ ('/warga') }}" class="menu-link">
                <div class="menu-icon">
                    <i class="material-icons">person</i>
                </div>
                <div class="menu-text">Data Warga</div>
            </a>
        </div>

        @endif
        <div class="menu-item has-sub">
            <a href="javascript:;" class="menu-link">
                <div class="menu-icon">
                    <i class="material-icons">library_books</i>
                </div>
                <div class="menu-text">Pengajuan Surat</div>
                <div class="menu-caret"></div>
            </a>
            <div class="menu-submenu">
                <div class="menu-item">
                    <a href="{{asset('domisili')}}" class="menu-link">
                        <div class="menu-text">Surat Domisili</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{asset('kematian')}}" class="menu-link">
                        <div class="menu-text">Surat Kematian</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{asset('sku')}}" class="menu-link">
                        <div class="menu-text">Surat SKU</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{asset('kelahiran')}}" class="menu-link">
                        <div class="menu-text">Surat Kelahiran</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{asset('blmnikah')}}" class="menu-link">
                        <div class="menu-text">Surat Belum Menikah</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{asset('keramaian')}}" class="menu-link">
                        <div class="menu-text">Surat Izin Keramaian</div>
                    </a>
                </div>
            </div>
        </div>

        @if(auth()->user()->role=='Administrator')
        <div class="menu-item">
            <a href="{{ ('/user') }}" class="menu-link">
                <div class="menu-icon">
                    <i class="material-icons">verified_user</i>
                </div>
                <div class="menu-text">Manajemen User</div>
            </a>
        </div>
        @endif
        
    </div>
    <!-- END menu -->
</div>
<!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar -->