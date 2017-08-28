<header id="header" class="sticky-header full-header" data-sticky-class="not-dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="/" class="standard-logo" data-dark-logo="images/300x300.png"><img
                            src="images/300x300.png" alt="Logo"></a>
                <a href="/" class="retina-logo" data-dark-logo="images/300x300.png"><img
                            src="images/300x300.png" alt="Logo"></a>
            </div><!-- #logo end -->

        <!-- Primary Navigation
                ============================================= -->
            <nav id="primary-menu" class="light not-dark">
                <ul>
                    <li class="current"><a href="/">
                            <div>Home</div>
                        </a>
                        <ul>
                            <li><a href="about">
                                    <div>About US</div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div>FAQS</div>
                                </a></li>
                        </ul>
                    </li>
                    @if(auth()->check())
                        <li>
                            <a href="javascript:void(0);">
                                <div>My Account</div>
                            </a>
                            <ul>
                                <li><a href="myOrders">
                                        <div>My Orders</div>
                                    </a></li>
                                <li><a href="shipping">
                                        <div>Shipping Address</div>
                                    </a></li>
                                <li><a href="javascript:void(0);"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <div>Logout</div>
                                    </a></li>
                            </ul>
                        </li>
                    @else
                        <li class="">
                            <a href="/login">
                                <div>Login</div>
                            </a>
                        </li>
                    @endif
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <!-- Top Cart
                ============================================= -->
                <basket></basket>

                <!-- Top Search
                ============================================= -->
                <search></search>

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->