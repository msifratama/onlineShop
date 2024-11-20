    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #98FB98;">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('dashboard') }}">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('orders') ? 'active' : '' }}" href="{{ route('order-index') }}">
                        <span data-feather="file"></span>
                        Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('products') ? 'active' : '' }}"
                        href="{{ route('product-index') }}">
                        <span data-feather="shopping-crt"></span>
                        Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('costumers') ? 'active' : '' }}"
                        href="{{ route('costumer-index') }}">
                        <span data-feather="users"></span>
                        Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('reports') ? 'active' : '' }}" href="{{ url('reports') }}">
                        <span data-feather="bar-chart-2"></span>
                        Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('integrations') ? 'active' : '' }}" href="#">
                        <span data-feather="layers"></span>
                        Integrations
                    </a>
                </li>
            </ul>
        </div>
    </nav>
