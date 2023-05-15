@extends('layouts.master')

@section('title', '- Vanvihar Timeline')

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
            <h1 class="title">{{ trans('navbar.about') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.about') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.timeline') }}
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
                    <x-about-sidebar />
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.timeline') }}</h2>
                    </div>

                    <div class="full-pic text-center mb-3">
                        <figure>
                            <img src="{{ asset('public/assets/images/vvnp-imgs/Timeline-1.png') }}" alt="">
                        </figure>
                    </div>

                    <div class="full-pic text-center mb-3">
                        <figure>
                            <img src="{{ asset('public/assets/images/vvnp-imgs/Timeline-2.png') }}" alt="">
                        </figure>
                    </div>

                    <div class="full-pic text-center mb-3">
                        <figure>
                            <img src="{{ asset('public/assets/images/vvnp-imgs/Timeline-3.png') }}" alt="">
                        </figure>
                    </div>

                    <div class="full-pic text-center">
                        <figure>
                            <img src="{{ asset('public/assets/images/vvnp-imgs/Timeline-4.png') }}" alt="">
                        </figure>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->
@endsection

@push('js')
    <script src="{{ asset('public/assets/js/loading.js') }}" type="text/javascript"></script>
@endpush
