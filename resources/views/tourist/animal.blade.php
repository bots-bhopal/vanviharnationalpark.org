@extends('layouts.master')

@section('title', '- Animal Adoption')

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
                            {{ trans('navbar.animal') }}
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
                    <h2>{{ trans('navbar.animal') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/vvnp-imgs/animal_adoption.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-3">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.animal-p1') }}</p>
                        <h4>{{ trans('tourist.animal-p2') }}</h4>
                        <p>{{ trans('tourist.animal-p3') }}</p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" style="border-color: #000!important;">
                        <tbody>
                            <tr>
                                <th class="text-center">{{ __('tourist.t4.th1') }}</th>
                                <th class="text-center">{{ __('tourist.t4.th2') }}</th>
                                <th class="text-center">{{ __('tourist.t4.th3') }}</th>
                                <th class="text-center">{{ __('tourist.t4.th4') }}</th>
                                <th class="text-center">{{ __('tourist.t4.th5') }}</th>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('tourist.t4.tr1.td1') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr1.td2') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr1.td3') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr1.td4') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr1.td5') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('tourist.t4.tr2.td1') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr2.td2') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr2.td3') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr2.td4') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr2.td5') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('tourist.t4.tr3.td1') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr3.td2') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr3.td3') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr3.td4') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr3.td5') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('tourist.t4.tr4.td1') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr4.td2') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr4.td3') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr4.td4') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr4.td5') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('tourist.t4.tr5.td1') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr5.td2') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr5.td3') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr5.td4') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr5.td5') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('tourist.t4.tr6.td1') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr6.td2') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr6.td3') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr6.td4') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr6.td5') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('tourist.t4.tr7.td1') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr7.td2') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr7.td3') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr7.td4') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr7.td5') }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">{{ __('tourist.t4.tr8.td1') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr8.td2') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr8.td3') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr8.td4') }}</td>
                                <td class="text-center">{{ __('tourist.t4.tr8.td5') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4>{{ trans('tourist.animal-p4') }}</h4>
                <ul>
                    <li class="pb-2">{{ trans('tourist.animal-p4-l1') }}</li>
                    <li class="pb-2">{{ trans('tourist.animal-p4-l2') }}</li>
                    <li class="pb-2">{{ trans('tourist.animal-p4-l3') }}</li>
                    <li class="pb-2">{{ trans('tourist.animal-p4-l4') }}</li>
                    <li class="pb-2">{{ trans('tourist.animal-p4-l5') }}</li>
                    <li class="pb-2">{{ trans('tourist.animal-p4-l6') }}</li>
                </ul>
                <h4>{{ trans('tourist.animal-p5') }}</h4>
                <p>{{ trans('tourist.animal-p6') }}</p>
                <p>{{ trans('tourist.animal-p7') }}</p>
                <p>{{ trans('tourist.animal-p8') }}</p>
                <p>{{ trans('tourist.animal-p9') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{asset('public/assets/js/loading.js')}}" type="text/javascript"></script>
@endpush
