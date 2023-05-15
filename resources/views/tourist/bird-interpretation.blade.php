@extends('layouts.master')

@section('title', '- Bird Interpretation Center')

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
            <h1 class="title">{{ trans('navbar.tourist-information') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.tourist-information') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.bird') }}
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
                    <x-tourist-sidebar />
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.bird') }}</h2>
                    </div>

                    <div class="full-pic">
                        <figure>
                            <img src="{{ asset('public/assets/images/vvnp-imgs/Bird_interpretation_center.jpg') }}"
                                alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-3">
                        <div class="text-content text-justify">
                            <p>{{ trans('tourist.bird-p1') }}</p>
                            <p>{{ trans('tourist.bird-p2') }}</p>
                            <ul>
                                <li class="mb-3">{{ trans('tourist.bird-p2-l1') }}</li>
                                <li class="mb-3">{{ trans('tourist.bird-p2-l2') }}}</li>
                                <li class="mb-3">{{ trans('tourist.bird-p2-l3') }}</li>
                            </ul>
                            <p>{{ trans('tourist.bird-p3') }}</p>
                            <ul>
                                <li class="mb-3">{{ trans('tourist.bird-p3-l1') }}</li>
                                <li class="mb-3">{{ trans('tourist.bird-p3-l2') }}}</li>
                                <li class="mb-3">{{ trans('tourist.bird-p3-l3') }}</li>
                            </ul>
                            <p>
                                <a href="{{ asset('public/assets/images/docs/Birds-of-Van-Vihar.pdf') }}" target="_blank"
                                    class="btn-text green-bg hover-text">Click Here</a>
                                {{ trans('tourist.bird-p4') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Service Section -->
@endsection

@push('js')
    <script src="{{ asset('public/assets/js/loading.js') }}" type="text/javascript"></script>
@endpush
