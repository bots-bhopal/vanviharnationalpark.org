@extends('layouts.master')

@section('title', '- Butterfly Park')

@push('css')
    <style>
        .green-bg:hover {
            color: #065e2e;
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
                            {{ trans('navbar.park') }}
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
                        <h2>{{ trans('navbar.park') }}</h2>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/vvnp-imgs/butterfly.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-3">
                        <div class="text-content text-justify">
                            <p>{{ trans('tourist.park-p1') }}</p>
                            <h3>{{ trans('tourist.park-info') }}</h3>
                            <ul>
                                <li class="mb-2">{{ trans('tourist.park-li1') }}</li>
                                <li class="mb-2">{{ trans('tourist.park-li2') }}</li>
                                <li class="mb-2">{{ trans('tourist.park-li3') }}</li>
                                <li class="mb-2">{{ trans('tourist.park-li4') }}</li>
                                <li class="mb-2">{{ trans('tourist.park-li5') }}</li>
                                <li class="mb-2">{{ trans('tourist.park-li6') }}</li>
                                <li class="mb-2">{{ trans('tourist.park-li7') }}</li>
                                <li class="mb-2">{{ trans('tourist.park-li8') }}</li>
                                <li class="mb-2">{{ trans('tourist.park-li9') }}</li>
                            </ul>

                            <p>
                                <a href="{{ asset('public/assets/images/docs/Final_Butterfly_diversity_VVNP.pdf') }}"
                                    target="_blank" class="btn-text green-bg hover-text">Click Here</a>
                                <b>{!! trans('tourist.download1') !!}</b>
                            </p>

                            <p>
                                <a href="{{ asset('public/assets/images/docs/broucher-of-butterfly-park-2.pdf') }}"
                                    target="_blank" class="btn-text green-bg hover-text">Click Here</a>
                                <b>{!! trans('tourist.download2') !!}</b>
                            </p>
                        </div>
                    </div>

                    <div class="full-pic text-center">
                        <div class="image-block">
                            <div class="images image-box">
                                <figure>
                                    <img src="{{ asset('public/assets/images/vvnp-imgs/butterfly-park.jpg') }}" alt="">
                                </figure>
                            </div>
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
