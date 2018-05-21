<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('default_images/deskapp-logo.png') }}" alt="">
        </a>
    </div>
    <div class="menu-block">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('home') }}" class="dropdown-toggle no-arrow">
                        <span class="fa fa-dashboard"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="fa fa-briefcase"></span><span class="mtext">Employees</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('driver.index') }}">Driver</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="fa fa-table"></span><span class="mtext">Tables</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#!">Basic Tables</a></li>
                        <li><a href="#!">DataTables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="dropdown-toggle no-arrow">
                        <span class="fa fa-calendar-o"></span><span class="mtext">Calendar</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="fa fa-list"></span><span class="mtext">Multi Level Menu</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="fa fa-plug"></span><span class="mtext">Level 2</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="javascript:;">Level 2</a></li>
                                <li><a href="javascript:;">Level 2</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="dropdown-toggle no-arrow">
                        <span class="fa fa-sitemap"></span><span class="mtext">Sitemap</span>
                    </a>
                </li>
                <li>
                    <a href="#!" class="dropdown-toggle no-arrow">
                        <span class="fa fa-map-o"></span><span class="mtext">Invoice <span class="fi-burst-new text-danger new"></span></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>