@extends('layouts.master')

@section('title', '- Do and Donts')

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
                            {{ trans('navbar.dos') }}
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
                    <h2>{{ trans('dos.do') }}<span>{{ trans('dos.and') }}</span>{{ trans('dos.dont') }}</h2>
                    {{-- <span class="b-line"></span> --}}
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/vvnp-imgs/do_donts.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6 col-md-12 col-sm-12" style="border:1px dotted grey;">
                        <h4 class="text-center">{{ trans('tourist.dos-h4') }}</h4>
                        <hr>
                        <ul>
                            <li>{{ trans('tourist.dos-l1') }}</li>
                            <li>{{ trans('tourist.dos-l2') }}</li>
                            <li>{{ trans('tourist.dos-l3') }}</li>
                            <li>{{ trans('tourist.dos-l4') }}</li>
                            <li>{{ trans('tourist.dos-l5') }}</li>
                            <li>{{ trans('tourist.dos-l6') }}</li>
                            <li>{{ trans('tourist.dos-l7') }}</li>
                            <li>{{ trans('tourist.dos-l8') }}</li>
                            <li>{{ trans('tourist.dos-l9') }}</li>
                            <li>{{ trans('tourist.dos-l10') }}</li>
                            <li>{{ trans('tourist.dos-l11') }}</li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12" style="border:1px dotted grey;">
                        <h4 class="text-center">{{ trans('tourist.dnt-h4') }}</h4>
                        <hr>
                        <ul>
                            <li>{{ trans('tourist.dnt-l1') }}</li>
                            <li>{{ trans('tourist.dnt-l2') }}</li>
                            <li>{{ trans('tourist.dnt-l3') }}</li>
                            <li>{{ trans('tourist.dnt-l4') }}</li>
                            <li>{{ trans('tourist.dnt-l5') }}</li>
                            <li>{{ trans('tourist.dnt-l6') }}</li>
                            <li>{{ trans('tourist.dnt-l7') }}</li>
                            <li>{{ trans('tourist.dnt-l8') }}</li>
                            <li>{{ trans('tourist.dnt-l9') }}</li>
                            <li>{{ trans('tourist.dnt-l10') }}</li>
                            <li>{{ trans('tourist.dnt-l11') }}</li>
                        </ul>
                    </div>
                </div>

                {{-- <p><small><i>{{ trans('tourist.source') }} <a href="https://www.sanjaydubritigersafari.com" target="_blank"><b>https://www.sanjaydubritigersafari.com</b></a></i></small></p> --}}
            </div>
        </div>
    </div>
</div>
<!-- ./ Service Section -->
@endsection

@push('js')
    <script src="{{asset('public/assets/js/loading.js')}}" type="text/javascript"></script>
@endpush
