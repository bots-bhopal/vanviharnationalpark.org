@extends('layouts.master')

@section('title', '- Timings & Holidays')

@push('css')
    <style>
        table.table-bordered{
            border:1px solid #000;
            margin-top:20px;
        }

        table.table-bordered > thead > tr > th{
            border:1px solid #000;
        }

        table.table-bordered > tbody > tr > th{
            border:1px solid #000;
        }

        table.table-bordered > tbody > tr > td{
            border:1px solid #000;
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
                            {{ trans('navbar.how-to-reach') }}
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
                    <h2>{{ trans('navbar.timings') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/vvnp-imgs/timings_and_holidays.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-3">
                    <div class="text-content text-justify">
                        <p><b>{{ trans('tourist.timing-h') }}</b></p>
                        <p>{{ trans('tourist.timing-p1') }}</p>

                        <div class="table-responsive">
                            <table class="table table-bordered" style="border-color: #000!important;">
                                <tbody>
                                    <tr>
                                        <th class="text-center">{{ __('tourist.t1.th1') }}</th>
                                        <th class="text-center">{{ __('tourist.t1.th2') }}</th>
                                        <th class="text-center">{{ __('tourist.t1.th3') }}</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.tr1.td1') }}</td>
                                        <td class="text-center">{{ __('tourist.tr1.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.tr1.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.tr2.td1') }}</td>
                                        <td class="text-center">{{ __('tourist.tr2.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.tr2.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.tr3.td1') }}</td>
                                        <td class="text-center">{{ __('tourist.tr3.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.tr3.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.tr4.td1') }}</td>
                                        <td class="text-center">{{ __('tourist.tr4.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.tr4.td3') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p><b>{{ trans('tourist.timing-p2') }}</b></p>
                        <ul>
                            <li class="mb-3">{{ trans('tourist.timing-p2-l1') }}</li>
                            <li class="mb-3">{{ trans('tourist.timing-p2-l2') }}</li>
                            <li class="mb-3">{{ trans('tourist.timing-p2-l3') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{asset('public/assets/js/loading.js')}}" type="text/javascript"></script>
@endpush
