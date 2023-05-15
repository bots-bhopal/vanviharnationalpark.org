@extends('layouts.master')

@section('title', '- Attraction Of The Zoo')

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
                            {{ trans('navbar.attraction') }}
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
                        <h2>{{ trans('navbar.attraction') }}</h2>
                    </div>

                    <div class="full-pic">
                        <figure>
                            <img src="{{ asset('public/assets/images/vvnp-imgs/attractions.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-3">
                        <div class="text-content text-justify">
                            <h3>{{ trans('tourist.attraction-h1') }}</h3>
                            <p>{{ trans('tourist.attraction-h1-p1') }}</p>
                            <p>{{ trans('tourist.attraction-h1-p2') }}</p>
                            <h3>{{ trans('tourist.attraction-h2') }}</h3>
                            <p>{{ trans('tourist.attraction-h2-p1') }}</p>
                            <p>{{ trans('tourist.attraction-h2-p2') }}</p>
                            <h3>{{ trans('tourist.attraction-h3') }}</h3>
                            <p>{{ trans('tourist.attraction-h3-p1') }}</p>
                            <p>{{ trans('tourist.attraction-h3-p2') }}</p>
                            <p>
                                <a href="{{ route('vvnp.bird') }}" class="btn-text green-bg hover-text">Click Here</a>
                                {{ trans('tourist.attraction-h3-p3') }}
                            </p>
                            <h3>{{ trans('tourist.attraction-h4') }}</h3>
                            <p>{{ trans('tourist.attraction-h4-p1') }}</p>
                            <h3>{{ trans('tourist.attraction-h5') }}</h3>
                            <p>{{ trans('tourist.attraction-h5-p1') }}</p>
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
