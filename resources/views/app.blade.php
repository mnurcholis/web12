<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Asik') }}</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('assets/global_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>
    <!-- Theme JS files -->
    <script src="{{ asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/demo_pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/demo_pages/login.js') }}"></script>
    <!-- /theme JS files -->
</head>

<body>


    <div id="app">
        <div>
            <!-- Main navbar -->
            @include('layouts.navbar')
            <!-- /main navbar -->


            <!-- Page content -->
            <div class="page-content">

                <!-- Main sidebar -->
                @include('layouts.sidebar')
                <!-- /main sidebar -->


                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Page header -->
                    <div class="page-header page-header-light">
                        <div class="page-header-content header-elements-md-inline">
                            <div class="page-title d-flex">
                                <h4><i class="icon-arrow-left52 mr-2"></i> <span
                                        class="font-weight-semibold">Home</span> -
                                    Dashboard</h4>
                                <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                        class="icon-more"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /page header -->


                    <!-- Content area -->
                    <div class="content">

                        <!-- Dashboard content -->
                        <div class="row">
                            <div class="col-xl-12">
                                <router-view />
                            </div>
                        </div>
                        <!-- /dashboard content -->

                    </div>
                    <!-- /content area -->


                    {{-- <!-- Footer -->
                    <div class="navbar navbar-expand-lg navbar-light">
                        <div class="text-center d-lg-none w-100">
                            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                                data-target="#navbar-footer">
                                <i class="icon-unfold mr-2"></i>
                                Footer
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="navbar-footer">
                            <span class="navbar-text">
                                &copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a
                                    href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                            </span>
                        </div>
                    </div>
                    <!-- /footer --> --}}

                </div>
                <!-- /main content -->

            </div>
        </div>
    </div>
    <!-- /page content -->
    @vite(['resources/js/main.js'])
</body>

</html>
