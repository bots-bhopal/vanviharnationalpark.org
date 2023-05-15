@extends('layouts.master')

@section('title', '- Vision & Mission')

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
                            {{ trans('navbar.vision') }}
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
                    <h2>{{ trans('navbar.vision') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/vvnp-imgs/vision_mission.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-3">
                    <h3>{{ trans('about.vision-h') }}</h3>
                    <ul>
                        <li class="mb-3 text-justify">{{ trans('about.vision-l1') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.vision-l2') }}</li>
                    </ul>
                    <h3>{{ trans('about.mission-h') }}</h3>
                    <ul>
                        <li class="mb-3 text-justify">{{ trans('about.mission-l1') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.mission-l2') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.mission-l3') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.mission-l4') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.mission-l5') }}</li>
                    </ul>
                    <h3>{{ trans('about.objective-h') }}</h3>
                    <p>{{ trans('about.objective-p') }}</p>
                    <ul>
                        <li class="mb-3 text-justify">{{ trans('about.objective-l1') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.objective-l2') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.objective-l3') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.objective-l4') }}</li>
                        <li class="mb-3 text-justify">{{ trans('about.objective-l5') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{asset('public/assets/js/loading.js')}}" type="text/javascript"></script>
@endpush
