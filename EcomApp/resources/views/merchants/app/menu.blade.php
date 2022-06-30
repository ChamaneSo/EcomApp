<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
        <a href="{{ route('merchants.index') }}" class="nav-link {{ $link == 'dashboard' ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>

    <li class="nav-item menu-open">
        <a href="{{ route('merchants.products.index') }}" class="nav-link {{ $link == 'products' ? 'active' : '' }}">
            <i class="nav-icon fas fa-files-o"></i>
            <p>
                Products
            </p>
        </a>
    </li>
</ul>
