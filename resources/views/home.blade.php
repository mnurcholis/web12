@extends('app')

@section('content')
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
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> -
                            Dashboard</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Dashboard content -->
                <div class="row">
                    <div class="col-xl-12">

                        <div id="app"></div>

                        <!-- Latest posts -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title">Latest posts</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="#">
                                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                                            class="img-fluid img-preview rounded" alt="">
                                                        <span class="card-img-actions-overlay card-img"><i
                                                                class="icon-play3 icon-2x"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="#">Up unpacked friendly</a></h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-book-play mr-2"></i>
                                                        Video tutorials</li>
                                                </ul>
                                                The him father parish looked has sooner. Attachment frequently terminated
                                                son hello...
                                            </div>
                                        </div>

                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="#">
                                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                                            class="img-fluid img-preview rounded" alt="">
                                                        <span class="card-img-actions-overlay card-img"><i
                                                                class="icon-play3 icon-2x"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="#">It allowance prevailed</a>
                                                </h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-book-play mr-2"></i>
                                                        Video tutorials</li>
                                                </ul>
                                                Alteration literature to or an sympathize mr imprudence. Of is ferrars
                                                subject enjoyed...
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="#">
                                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                                            class="img-fluid img-preview rounded" alt="">
                                                        <span class="card-img-actions-overlay card-img"><i
                                                                class="icon-play3 icon-2x"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="#">Case read they must</a></h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-book-play mr-2"></i>
                                                        Video tutorials</li>
                                                </ul>
                                                On it differed repeated wandered required in. Then girl neat why yet knew
                                                rose spot...
                                            </div>
                                        </div>

                                        <div class="media flex-column flex-sm-row mt-0 mb-3">
                                            <div class="mr-sm-3 mb-2 mb-sm-0">
                                                <div class="card-img-actions">
                                                    <a href="#">
                                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                                            class="img-fluid img-preview rounded" alt="">
                                                        <span class="card-img-actions-overlay card-img"><i
                                                                class="icon-play3 icon-2x"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-title"><a href="#">Too carriage attended</a></h6>
                                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                    <li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ
                                                        section</li>
                                                </ul>
                                                Marianne or husbands if at stronger ye. Considered is as middletons
                                                uncommonly...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /latest posts -->

                    </div>
                </div>
                <!-- /dashboard content -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
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

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link"
                                target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                        <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link"
                                target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a>
                        </li>
                        <li class="nav-item"><a
                                href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                                class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i
                                        class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
@endsection
