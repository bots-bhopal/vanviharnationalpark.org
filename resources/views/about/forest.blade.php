@extends('layouts.master')

@section('title', '- Forest & Vegetation')

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
                            {{ trans('navbar.forest') }}
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
                    <h2>{{ trans('navbar.forest') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/vvnp-imgs/forest_vegetation.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-3">
                    <div class="text-content text-justify">
                        <p>{{ trans('about.forest-p1') }}<b>{{ trans('about.forest-p2') }}</b>{{ trans('about.forest-p3') }}</p>
                        <p>{{ trans('about.forest-p4') }}</p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" style="border-color: #000!important;">
                        <tbody>
                            <tr>
                                <th class="text-center">{{ __('about.t1.th1') }}</th>
                                <th class="text-center">{{ __('about.t1.th2') }}</th>
                                <th class="text-center">{{ __('about.t1.th3') }}</th>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr1.td1') }}</td>
                                <td class="text-center">{{ __('about.tr1.td2') }}</td>
                                <td class="text-center">{{ __('about.tr1.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr2.td1') }}</td>
                                <td class="text-center">{{ __('about.tr2.td2') }}</td>
                                <td class="text-center">{{ __('about.tr2.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr3.td1') }}</td>
                                <td class="text-center">{{ __('about.tr3.td2') }}</td>
                                <td class="text-center">{{ __('about.tr3.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr4.td1') }}</td>
                                <td class="text-center">{{ __('about.tr4.td2') }}</td>
                                <td class="text-center">{{ __('about.tr4.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr5.td1') }}</td>
                                <td class="text-center">{{ __('about.tr5.td2') }}</td>
                                <td class="text-center">{{ __('about.tr5.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr6.td1') }}</td>
                                <td class="text-center">{{ __('about.tr6.td2') }}</td>
                                <td class="text-center">{{ __('about.tr6.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr7.td1') }}</td>
                                <td class="text-center">{{ __('about.tr7.td2') }}</td>
                                <td class="text-center">{{ __('about.tr7.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr8.td1') }}</td>
                                <td class="text-center">{{ __('about.tr8.td2') }}</td>
                                <td class="text-center">{{ __('about.tr8.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr9.td1') }}</td>
                                <td class="text-center">{{ __('about.tr9.td2') }}</td>
                                <td class="text-center">{{ __('about.tr9.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr10.td1') }}</td>
                                <td class="text-center">{{ __('about.tr10.td2') }}</td>
                                <td class="text-center">{{ __('about.tr10.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr11.td1') }}</td>
                                <td class="text-center">{{ __('about.tr11.td2') }}</td>
                                <td class="text-center">{{ __('about.tr11.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr12.td1') }}</td>
                                <td class="text-center">{{ __('about.tr12.td2') }}</td>
                                <td class="text-center">{{ __('about.tr12.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr13.td1') }}</td>
                                <td class="text-center">{{ __('about.tr13.td2') }}</td>
                                <td class="text-center">{{ __('about.tr13.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr14.td1') }}</td>
                                <td class="text-center">{{ __('about.tr14.td2') }}</td>
                                <td class="text-center">{{ __('about.tr14.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr15.td1') }}</td>
                                <td class="text-center">{{ __('about.tr15.td2') }}</td>
                                <td class="text-center">{{ __('about.tr15.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr16.td1') }}</td>
                                <td class="text-center">{{ __('about.tr16.td2') }}</td>
                                <td class="text-center">{{ __('about.tr16.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr17.td1') }}</td>
                                <td class="text-center">{{ __('about.tr17.td2') }}</td>
                                <td class="text-center">{{ __('about.tr17.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr18.td1') }}</td>
                                <td class="text-center">{{ __('about.tr18.td2') }}</td>
                                <td class="text-center">{{ __('about.tr18.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr19.td1') }}</td>
                                <td class="text-center">{{ __('about.tr19.td2') }}</td>
                                <td class="text-center">{{ __('about.tr19.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr20.td1') }}</td>
                                <td class="text-center">{{ __('about.tr20.td2') }}</td>
                                <td class="text-center">{{ __('about.tr20.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr21.td1') }}</td>
                                <td class="text-center">{{ __('about.tr21.td2') }}</td>
                                <td class="text-center">{{ __('about.tr21.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr22.td1') }}</td>
                                <td class="text-center">{{ __('about.tr22.td2') }}</td>
                                <td class="text-center">{{ __('about.tr22.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr23.td1') }}</td>
                                <td class="text-center">{{ __('about.tr23.td2') }}</td>
                                <td class="text-center">{{ __('about.tr23.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr24.td1') }}</td>
                                <td class="text-center">{{ __('about.tr24.td2') }}</td>
                                <td class="text-center">{{ __('about.tr24.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr25.td1') }}</td>
                                <td class="text-center">{{ __('about.tr25.td2') }}</td>
                                <td class="text-center">{{ __('about.tr25.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr26.td1') }}</td>
                                <td class="text-center">{{ __('about.tr26.td2') }}</td>
                                <td class="text-center">{{ __('about.tr26.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr27.td1') }}</td>
                                <td class="text-center">{{ __('about.tr27.td2') }}</td>
                                <td class="text-center">{{ __('about.tr27.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr28.td1') }}</td>
                                <td class="text-center">{{ __('about.tr28.td2') }}</td>
                                <td class="text-center">{{ __('about.tr28.td3') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('about.tr29.td1') }}</td>
                                <td class="text-center">{{ __('about.tr29.td2') }}</td>
                                <td class="text-center">{{ __('about.tr29.td3') }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-justify">{{ trans('about.forest-p5') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{asset('public/assets/js/loading.js')}}" type="text/javascript"></script>
@endpush
