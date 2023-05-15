@extends('layouts.master')

@section('title', '- New Initiatives')

@push('css')
    <style>
        .green-bg:hover {
            color: #000;
            font-weight: 600;
        }

        .image-box .icon {
            position: absolute;
            right: 20px;
            top: 5px;
            height: 35px;
            width: 35px;
            line-height: 35px;
            text-align: center;
            background-color: #065e2e;
            color: #ffffff;
            font-size: 16px;
            border-radius: 50%;
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
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
                            {{ trans('navbar.new-initiatives') }}
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
                <!--Business Promo section start-->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <section class="busines_promo_wrapper__block">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="box-title mb-40">
                                        <h2 class="text-center">{{ trans('home.initiative-h2') }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row mb-40" id="initiatives-1">
                                {{-- <div class="col-lg-8 push-lg-2 mb-20">
                                    <div class="image-block">
                                        <div class="image-box">
                                            <figure class="image">
                                                <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-1.jpg') }}"
                                                    alt="" class="img-responsive">
                                            </figure>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-lg-6 push-lg-6">
                                    <div class="promor_wrap__block">
                                        <h2>{{ __('home.initiative1-h2') }}
                                            <span>{{ __('home.initiative1-h2-span') }}</span>
                                        </h2>

                                        <p class="text-justify">
                                            {{ __('home.initiative1-p1') }}
                                        </p>

                                        <p class="text-justify">
                                            {{ __('home.initiative1-p2') }}
                                        </p>

                                        <p class="text-justify">
                                            <strong>
                                                {{ __('home.initiative1-p3') }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 pull-lg-6 mt-sm-20 mt-xs-20">
                                    <div class="image-block">
                                        <div class="image-box">
                                            <figure class="image">
                                                <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-7.jpg') }}"
                                                    alt="" class="img-responsive lazy-image owl-lazy">

                                                <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-9.jpg') }}"
                                                    alt="" class="img-responsive lazy-image owl-lazy">

                                                <a href="{{ asset('public/assets/images/vvnp-initiatives/vvnp-7.jpg') }}"
                                                    class="lightbox-image icon" data-fancybox="image"><span
                                                        class="fa fa-search"></span></a>

                                                <a href="{{ asset('public/assets/images/vvnp-initiatives/vvnp-9.jpg') }}"
                                                    class="lightbox-image" data-fancybox="image"></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-40" id="initiatives-2">
                                <div class="promor_outer_wrapper">
                                    <div class="col-lg-6 push-lg-6 order-one">
                                        <div class="image-block">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-4.jpg') }}"
                                                        alt="" class="img-responsive lazy-image owl-lazy">

                                                    <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-8.jpg') }}"
                                                        alt="" class="img-responsive lazy-image owl-lazy">

                                                    <a href="{{ asset('public/assets/images/vvnp-initiatives/vvnp-4.jpg') }}"
                                                        class="lightbox-image icon" data-fancybox="image"><span
                                                            class="fa fa-search"></span></a>

                                                    <a href="{{ asset('public/assets/images/vvnp-initiatives/vvnp-8.jpg') }}"
                                                        class="lightbox-image" data-fancybox="image"></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 pull-lg-6 mt-sm-20 mt-xs-20 order-two">
                                        <div class="promor_wrap__block">
                                            <h2>{{ __('home.initiative2-h2') }}
                                                <span>{{ __('home.initiative2-h2-span') }}</span>
                                            </h2>

                                            <p class="text-justify">
                                                {{ __('home.initiative2-p1') }}
                                            </p>

                                            <p class="text-justify">
                                                {{ __('home.initiative2-p2') }}
                                            </p>

                                            <p class="text-justify">
                                                {{ __('home.initiative2-p3') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-40" id="initiatives-3">
                                <div class="col-lg-6 push-lg-6">
                                    <div class="promor_wrap__block">
                                        <h2>{{ __('home.initiative3-h2') }}
                                            <span>{{ __('home.initiative3-h2-span') }}</span>
                                        </h2>

                                        <p class="text-justify">
                                            {{ __('home.initiative3-p1') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 pull-lg-6 mt-sm-20 mt-xs-20">
                                    <div class="image-block">
                                        <div class="image-box">
                                            <figure class="image">
                                                <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-10.jpg') }}"
                                                    alt="" class="img-responsive lazy-image owl-lazy">

                                                <a href="{{ asset('public/assets/images/vvnp-initiatives/vvnp-10.jpg') }}"
                                                    class="lightbox-image icon" data-fancybox="image"><span
                                                        class="fa fa-search"></span></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row" id="initiatives-4">
                                <div class="promor_outer_wrapper">
                                    <div class="col-lg-6 push-lg-6 order-one">
                                        <div class="image-block">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-11.jpg') }}"
                                                        alt="" class="img-responsive lazy-image owl-lazy">

                                                    <a href="{{ asset('public/assets/images/vvnp-initiatives/vvnp-11.jpg') }}"
                                                        class="lightbox-image icon" data-fancybox="image"><span
                                                            class="fa fa-search"></span></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 pull-lg-6 mt-sm-20 mt-xs-20 order-two">
                                        <div class="promor_wrap__block">
                                            <h2>{{ __('home.initiative4-h2') }}
                                                <span>{{ __('home.initiative4-h2-span') }}</span>
                                            </h2>

                                            <p class="text-justify">
                                                {{ __('home.initiative4-p1') }}
                                            </p>

                                            <p class="text-justify">
                                                {{ __('home.initiative4-p2') }}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-40" id="initiatives-5">
                                <div class="col-lg-6 push-lg-6">
                                    <div class="promor_wrap__block">
                                        <h2>{{ __('home.initiative5-h2') }}
                                            <span>{{ __('home.initiative5-h2-span') }}</span>
                                        </h2>

                                        <p class="text-justify">
                                            {{ __('home.initiative5-p1') }}
                                        </p>
                                        <p class="text-justify">
                                            {{ __('home.initiative5-p2') }}
                                        </p>
                                        <p class="text-justify">
                                            {{ __('home.initiative5-p3') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 pull-lg-6 mt-sm-20 mt-xs-20">
                                    <div class="image-block">
                                        <div class="image-box">
                                            <figure class="image">
                                                <img src="{{ asset('public/assets/images/vvnp-initiatives/birds-watching.jpg') }}"
                                                    alt="" class="img-responsive lazy-image owl-lazy">

                                                <img src="{{ asset('public/assets/images/vvnp-initiatives/birds-watching-1.jpg') }}"
                                                    alt="" class="img-responsive lazy-image owl-lazy">

                                                <a href="{{ asset('public/assets/images/vvnp-initiatives/birds-watching.jpg') }}"
                                                    class="lightbox-image icon" data-fancybox="image"><span
                                                        class="fa fa-search"></span></a>

                                                <a href="{{ asset('public/assets/images/vvnp-initiatives/birds-watching-1.jpg') }}"
                                                    class="lightbox-image icon" data-fancybox="image"><span
                                                        class="fa fa-search"></span></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row" id="initiatives-6">
                                <div class="promor_outer_wrapper">
                                    <div class="col-lg-6 push-lg-6 order-one">
                                        <div class="image-block">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <img src="{{ asset('public/assets/images/vvnp-initiatives/serp.jpg') }}"
                                                        alt="" class="img-responsive lazy-image owl-lazy">

                                                    <a href="{{ asset('public/assets/images/vvnp-initiatives/serp.jpg') }}"
                                                        class="lightbox-image icon" data-fancybox="image"><span
                                                            class="fa fa-search"></span></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 pull-lg-6 mt-sm-20 mt-xs-20 order-two">
                                        <div class="promor_wrap__block">
                                            <h2>{{ __('home.initiative6-h2') }}
                                                <span>{{ __('home.initiative6-h2-span') }}</span>
                                            </h2>

                                            <p class="text-justify">
                                                {{ __('home.initiative6-p1') }}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!--Business Promo section End-->
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Service Section -->
@endsection

@push('js')
    <script src="{{ asset('public/assets/js/loading.js') }}" type="text/javascript"></script>
@endpush
