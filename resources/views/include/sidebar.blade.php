<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png"
                        alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive"
                        src="{{ asset('assets/admin/images/layout_img/user_img.jpg') }}" alt="#" />
                </div>
                <div class="user_info">
                    <h6>User</h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-home blue1_color"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('order-index') }}"><i
                        class="fa fa-cart-shopping yellow_color"></i><span>Orders</span></a>
            </li>
            <li>
                <a href="{{ route('product-index') }}"><i class="fa fa-tags green_color"></i><span>Products</span></a>
            </li>
            <li>
                <a href="{{ route('costumer-index') }}"><i
                        class="fa fa-user-tag red_color"></i><span>Customers</span></a>
            </li>
            <li>
                <a href="{{ route('report-index') }}"><i
                        class="fa fa-chart-simple black_color"></i><span>Reports</span></a>
            </li>
            {{-- <li>
                    <a href="{{ route('') }}"><i class="fa fa-home blue1_color"></i><span>Integrations</span></a>
                </li> --}}
        </ul>
    </div>
</nav>
