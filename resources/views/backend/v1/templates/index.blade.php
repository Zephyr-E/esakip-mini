<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-SAKIP MINI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />

    @include('backend.v1.templates.inc.head')
</head>

<body>

    @include('backend.v1.templates.inc.preloader')

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('backend.v1.templates.inc.navbar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('backend.v1.templates.inc.sidebar')

                    <div class="pcoded-content">
                        @yield('title')

                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">

                                        @yield('content')

                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    @include('backend.v1.templates.inc.script')
    @include('sweetalert::alert')
</body>

</html>