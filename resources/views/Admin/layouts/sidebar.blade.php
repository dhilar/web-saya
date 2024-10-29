<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- Dashboard -->
                <li class="sidebar-item {{ Request::is('admin') ? 'active' : '' }}"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ url('/admin') }}" 
                        aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <!-- AppSetting -->
                <li class="sidebar-item {{ Request::is('admin/app-settings') ? 'active' : '' }}"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ route('admin.appSettings') }}" 
                        aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">AppSetting</span>
                    </a>
                </li>

                <!-- About Us -->
                <li class="sidebar-item {{ Request::is('admin/about') ? 'active' : '' }}"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ route('admin.editAbout') }}" 
                        aria-expanded="false">
                        <i class="mdi mdi-information-outline"></i>
                        <span class="hide-menu">About</span>
                    </a>
                </li>

                <!-- Project -->
                <li class="sidebar-item {{ Request::is('admin/project') ? 'active' : '' }}"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ route('admin.project.index') }}" 
                        aria-expanded="false">
                        <i class="mdi mdi-folder-outline"></i>
                        <span class="hide-menu">Project Keunggulan</span>
                    </a>
                </li>

                <!-- Products -->
                <li class="sidebar-item {{ Request::is('admin/products') || Request::is('admin/products/*') ? 'active' : '' }}"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ route('admin.products.index') }}" 
                        aria-expanded="false">
                        <i class="mdi mdi-basket"></i>
                        <span class="hide-menu">Products</span>
                    </a>
                </li>

                <!-- Sertifikasi -->
                <li class="sidebar-item {{ Request::is('admin/sertifikasi') || Request::is('admin/sertifikasi/*') ? 'active' : '' }}"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ route('admin.sertifikasi.index') }}" 
                        aria-expanded="false">
                        <i class="mdi mdi-certificate"></i>
                        <span class="hide-menu">Sertifikasi</span>
                    </a>
                </li>

                <!-- Team -->
                <li class="sidebar-item {{ Request::is('admin/team') || Request::is('admin/team/*') ? 'active' : '' }}"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ route('admin.team.index') }}" 
                        aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu">Team</span>
                    </a>
                </li>

                <!-- Logout -->
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                        aria-expanded="false">
                        <i class="ti-email m-r-5 m-l-5"></i> 
                        <span class="hide-menu">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
