@extends('layouts.master')

@section('title', '- Contact Us')

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
            <h1 class="title">{{ trans('navbar.btr-management') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.btr-management') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.contact') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Contact Section -->
    <section class="padding ptb-xs-60">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="heading-box pb-30">
                        <h2>"{{ trans('navbar.title') }}"</h2>
                        <span class="b-line"></span>
                    </div>
                    <p class="lead">
                        {{ trans('contact.title') }}
                    </p><br/>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map">
            <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=23.22955365,77.36586745904887&amp;q=van%20vihar%20shyamla%20hills+(Van%20Vihar%20National%20Park%20and%20ZOO)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Add map to website</a></iframe>
        </div>

        <!--Main Contact Section -->
        <div class="container contact-form text-center pt-80 pt-xs-60 mt-up">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headeing pb-4">
                        <h2>{{ trans('navbar.contact') }}</h2>
                        <span class="b-line"></span>
                    </div>
                    <p>
                        {{ trans('navbar.vvnp') }}
                    </p>
                    <!-- Contact -->
                    <div class="row">
                        <div class="col-sm-12 contact pb-60 pt-30">
                            <div class="row text-center">
                                <div class="col-sm-4 pb-xs-30">
                                    <i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">{{ trans('contact.phone') }}</a>
                                </div>

                                <div class="col-sm-4 pb-xs-30">
                                    <i class="ion-ios-location icon-circle pos-s"></i>
                                    <p  class="mt-15">
                                        {{ trans('contact.add1') }}
                                        <br />
                                        {{ trans('contact.add2') }}
                                    </p>
                                </div>

                                <div class="col-sm-4 pb-xs-30">
                                    <i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:fdvanvnp.bpl@mp.gov.in"  class="mt-15 i-block">{{ trans('contact.email') }}<br/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Contact  -->
                </div>
            </div>
        </div>
    </section>
    <!-- Main Contact Section -->
@endsection

@push('js')
    <script src="{{asset('public/assets/js/loading.js')}}" type="text/javascript"></script>
@endpush
