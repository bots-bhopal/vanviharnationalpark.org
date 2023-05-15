@extends('layouts.master')

@section('title', '- Gate Charges')

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
                            {{ trans('navbar.gate') }}
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
                    <h2>{{ trans('navbar.gate') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/vvnp-imgs/gate_charges.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-3">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.charges-p1') }}</p>
                        <p><b>{{ trans('tourist.charges-p2') }}</b></p>

                        <div class="table-responsive">
                            <table class="table table-bordered" style="border-color: #000!important;">
                                <tbody>
                                    <tr>
                                        <th class="text-center">{{ __('tourist.t2.th1') }}</th>
                                        <th class="text-left">{{ __('tourist.t2.th2') }}</th>
                                        <th class="text-center">{{ __('tourist.t2.th3') }}</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr1.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr1.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr1.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr2.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr2.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr2.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr3.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr3.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr3.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr4.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr4.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr4.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr5.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr5.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr5.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr6.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr6.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr6.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr7.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr7.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr7.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr8.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr8.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr8.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr9.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr9.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr9.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr10.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr10.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr10.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr11.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr11.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr11.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr12.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr12.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr12.td3') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t2.tr13.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t2.tr13.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t2.tr13.td3') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p><b>{{ trans('tourist.charges-p3') }}</b></p>
                        <p><b>{{ trans('tourist.charges-p4') }}</b></p>

                        <div class="table-responsive">
                            <table class="table table-bordered" style="border-color: #000!important;">
                                <tbody>
                                    <tr>
                                        <th class="text-center">{{ __('tourist.t3.th1') }}</th>
                                        <th class="text-left">{{ __('tourist.t3.th2') }}</th>
                                        <th class="text-center">{{ __('tourist.t3.th3') }}</th>
                                        <th class="text-center">{{ __('tourist.t3.th4') }}</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t3.tr1.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t3.tr1.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t3.tr1.td3') }}</td>
                                        <td class="text-center">{{ __('tourist.t3.tr1.td4') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t3.tr2.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t3.tr2.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t3.tr2.td3') }}</td>
                                        <td class="text-center">{{ __('tourist.t3.tr2.td4') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('tourist.t3.tr3.td1') }}</td>
                                        <td class="text-left">{{ __('tourist.t3.tr3.td2') }}</td>
                                        <td class="text-center">{{ __('tourist.t3.tr3.td3') }}</td>
                                        <td class="text-center">{{ __('tourist.t3.tr3.td4') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
