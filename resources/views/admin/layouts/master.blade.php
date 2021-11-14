<!doctype html>
<html class="fixed">

<head>

    @include('admin.layouts.head')

</head>

<body>

    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src="{{ asset('admin/img/logo.png') }}" width="75" height="35" alt="Porto Admin" />
                </a>

                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>

            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <form action="pages-search-results.html" class="search nav-form">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                        <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                    </div>
                </form>

                <span class="separator"></span>

                <ul class="notifications">
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                            <i class="bx bx-list-ol"></i>
                            <span class="badge">3</span>
                        </a>

                        <div class="dropdown-menu notification-menu large">
                            <div class="notification-title">
                                <span class="float-end badge badge-default">3</span>
                                Tasks
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-start">Generating Sales Report</span>
                                            <span class="message float-end text-dark">60%</span>
                                        </p>
                                        <div class="progress progress-xs light">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </li>

                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-start">Importing Contacts</span>
                                            <span class="message float-end text-dark">98%</span>
                                        </p>
                                        <div class="progress progress-xs light">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="98"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                        </div>
                                    </li>

                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-start">Uploading something big</span>
                                            <span class="message float-end text-dark">33%</span>
                                        </p>
                                        <div class="progress progress-xs light mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="33"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                            <i class="bx bx-envelope"></i>
                            <span class="badge">4</span>
                        </a>

                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="float-end badge badge-default">230</span>
                                Messages
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="{{ asset('admin/img/!sample-user.jpg') }}"
                                                    alt="Joseph Doe Junior" class="rounded-circle" />
                                            </figure>
                                            <span class="title">Joseph Doe</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </a>
                                </ul>

                                <hr />

                                <div class="text-end">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                            <i class="bx bx-bell"></i>
                            <span class="badge">3</span>
                        </a>

                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="float-end badge badge-default">3</span>
                                Alerts
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-thumbs-down bg-danger text-light"></i>
                                            </div>
                                            <span class="title">Server is Down!</span>
                                            <span class="message">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="bx bx-lock bg-warning text-light"></i>
                                            </div>
                                            <span class="title">User Locked</span>
                                            <span class="message">15 minutes ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-signal bg-success text-light"></i>
                                            </div>
                                            <span class="title">Connection Restaured</span>
                                            <span class="message">10/10/2021</span>
                                        </a>
                                    </li>
                                </ul>

                                <hr />

                                <div class="text-end">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-bs-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ asset('admin/img/!logged-user.jpg') }}" alt="Joseph Doe" class="rounded-circle"
                                data-lock-picture="{{ asset('admin/img/!logged-user.jpg') }}" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">Administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                        class="bx bx-user-circle"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i
                                        class="bx bx-lock"></i>
                                    Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-signin.html"><i
                                        class="bx bx-power-off"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            @include('admin.layouts.sidebar')
            <!-- end: sidebar -->

            <section role="main" class="content-body @yield('body-class')">
                <header class="page-header">
                    <h2 id="page-header-title"></h2>

                    <div class="right-wrapper text-end" style="margin-right: 25px;">
                        <ol class="breadcrumbs" id="nav-alt-tab">
                            <li>
                                <a href="#">
                                    <i class="bx bx-home-alt"></i>
                                </a>
                            </li>
                        </ol>
                    </div>
                </header>

                <!-- start: page -->
                @yield('content')
                <!-- end: page -->

            </section>
        </div>

    </section>

    @include('admin.layouts.footer')

</body>

</html>
