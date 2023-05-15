@extends('layouts.master')

@section('title', '- Snake Transit Center')

@push('css')
    <style>
        .green-bg:hover {
            color: #000;
            font-weight: 600;
        }

    </style>
@endpush

@section('content')
    <!--loader-->
    <div id="preloader">
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="loaderImage"></div>
                </div>
            </div>
        </div>
    </div>
    <!--loader-->

    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.btr-management') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.btr-management') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.snake') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Service Section -->
    <div id="services-section" class="padding pt-xs-60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-12 offset-lg-1">
                    <x-management-sidebar />
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.snake') }}</h2>
                    </div>

                    <div class="full-pic">
                        <figure>
                            <img src="{{ asset('public/assets/images/vvnp-imgs/snake.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-3">
                        <div class="text-content text-justify">
                            <h3 class="text-center">{{ trans('management.snake-heading1') }}</h3>
                            <ul>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p1') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p2') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p3') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p4') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p5') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p6') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p7') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p8') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p9') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p10') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p11') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p12') }}</li>
                            </ul>

                            <h3 class="text-center">{{ trans('management.snake-heading2') }}</h3>
                            <ul>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p13') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p14') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p15') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p16') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p17') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p18') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p19') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p20') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p21') }}</li>
                            </ul>

                            <h3 class="text-center">{{ trans('management.snake-heading3') }}</h3>
                            <ul>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p22') }}</li>
                                <li class="mb-1 text-justify">{{ trans('management.snake-p23') }}</li>
                            </ul>

                            <p>
                                <a href="{{ asset('public/assets/images/docs/Snake-Interpritation-Cetnter.pdf') }}"
                                    target="_blank" class="btn-text green-bg hover-text">Click Here</a>
                                <b>{{ trans('management.download') }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('public/assets/js/loading.js') }}" type="text/javascript"></script>
@endpush
