@extends('layouts.master')

@section('title', '')

@push('css')
    <style>
        .btn-color-line:hover {
            background: #065e2e;
            color: #fff;
        }

        .client-avtar {
            border: 0px solid #065e2e !important;
        }

        #toast-container .toast-error {
            background-color: #dc3545;
            opacity: 1;
        }

        .hover-text:hover {
            color: #065e2e;
        }

        .tooltip {
            z-index: 100 !important;
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
                    <script type="text/javascript">
                        var cSpeed = 6;
                        var cWidth = 100;
                        var cHeight = 72;
                        var cTotalFrames = 18;
                        var cFrameWidth = 100;
                        var cImageSrc = './public/assets/images/sprites.gif';

                        var cImageTimeout = false;
                        var cIndex = 0;
                        var cXpos = 0;
                        var cPreloaderTimeout = false;
                        var SECONDS_BETWEEN_FRAMES = 0;

                        function startAnimation() {

                            document.getElementById('loaderImage').style.backgroundImage = 'url(' + cImageSrc + ')';
                            document.getElementById('loaderImage').style.width = cWidth + 'px';
                            document.getElementById('loaderImage').style.height = cHeight + 'px';

                            //FPS = Math.round(100/(maxSpeed+2-speed));
                            FPS = Math.round(100 / cSpeed);
                            SECONDS_BETWEEN_FRAMES = 1 / FPS;

                            cPreloaderTimeout = setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES / 1000);

                        }

                        function continueAnimation() {

                            cXpos += cFrameWidth;
                            //increase the index so we know which frame of our animation we are currently on
                            cIndex += 1;

                            //if our cIndex is higher than our total number of frames, we're at the end and should restart
                            if (cIndex >= cTotalFrames) {
                                cXpos = 0;
                                cIndex = 0;
                            }

                            if (document.getElementById('loaderImage'))
                                document.getElementById('loaderImage').style.backgroundPosition = (-cXpos) + 'px 0';

                            cPreloaderTimeout = setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES * 1000);
                        }

                        function stopAnimation() { //stops animation
                            clearTimeout(cPreloaderTimeout);
                            cPreloaderTimeout = false;
                        }

                        function imageLoader(s, fun) //Pre-loads the sprites image
                        {
                            clearTimeout(cImageTimeout);
                            cImageTimeout = 0;
                            genImage = new Image();
                            genImage.onload = function() {
                                cImageTimeout = setTimeout(fun, 0)
                            };
                            genImage.onerror = new Function('alert(\'Could not load the image\')');
                            genImage.src = s;
                        }

                        //The following code starts the animation
                        new imageLoader(cImageSrc, 'startAnimation()');
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!--loader-->

    <!-- Main Banner -->
    <div class="main-banner banner_up">
        <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
            <!-- START REVOLUTION SLIDER fullwidth mode -->
            <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-129">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public/assets/images/banner/slider-img-1.jpg') }}" alt=""
                            class="rev-slidebg">
                        <!-- LAYERS -->
                        <div class="tp-caption Newspaper-Title tp-resizeme " id="slide-129-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                            <div class="banner-text text-center">
                                <h3><span
                                        style="color:#ffd000">{{ trans('home.welcome') }}</span>{{ trans('home.vvnp') }}
                                </h3>
                                {{-- <h4><p style="letter-spacing: 1px!important">{{ trans('home.slider-p1') }}</p></h4> --}}
                                <a class="btn-text green-bg"
                                    href="{{ route('vvnp.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-130" data-title="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public/assets/images/banner/slider-img-2.jpg') }}" alt=""
                            class="rev-slidebg">
                        <!-- LAYERS -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-130-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="banner-text text-center">
                                <h3><span
                                        style="color:#ffd000">{{ trans('home.welcome') }}</span>{{ trans('home.vvnp') }}
                                </h3>
                                {{-- <h4><p style="letter-spacing: 1px!important">{{ trans('home.slider-p2') }}</p></h4> --}}
                                <a class="btn-text green-bg"
                                    href="{{ route('vvnp.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-131">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public/assets/images/banner/slider-img-3.jpg') }}" alt=""
                            class="rev-slidebg">
                        <!-- LAYERS -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-131-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="banner-text text-center">
                                <h3><span
                                        style="color: #ffd000">{{ trans('home.welcome') }}</span>{{ trans('home.vvnp') }}
                                </h3>
                                {{-- <h4><p style="letter-spacing: 1px!important">{{ trans('home.slider-p3') }}</p></h4> --}}
                                <a class="btn-text green-bg"
                                    href="{{ route('vvnp.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->

                    <!-- SLIDE  -->
                    <li data-index="rs-132">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public/assets/images/banner/slider-img-4.jpg') }}" alt=""
                            class="rev-slidebg">
                        <!-- LAYERS -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-132-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="banner-text text-center">
                                <h3><span
                                        style="color: #ffd000">{{ trans('home.welcome') }}</span>{{ trans('home.vvnp') }}
                                </h3>
                                {{-- <h4><p style="letter-spacing: 1px!important">{{ trans('home.slider-p3') }}</p></h4> --}}
                                <a class="btn-text green-bg"
                                    href="{{ route('vvnp.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                </ul>

                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!-- Main Banner End-->

    <!-- About Section -->
    <section class="busines_promo_wrapper__block padding ptb-xs-40">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 push-lg-6">
                    <div class="promor_wrap__block">
                        <h3>{{ trans('home.know-more-about') }}</h3>
                        <h2>{{ trans('home.van-h2') }} <span>{{ trans('home.van-h2-span') }}</span></h2>

                        <p class="text-justify">
                            {{ trans('home.about-p1') }}
                        </p>

                        <p class="text-justify">
                            {{ trans('home.about-p2') }}
                        </p>

                        <p class="text-justify">
                            {{ trans('home.about-p3') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 pull-lg-6 my-auto mt-sm-30 mt-xs-30 text-center">
                    <h3 class="documentary">{{ trans('home.documentary') }}</h3>
                    <h3 class="documentary-title">{{ trans('home.van-h2') }} <span
                            class="documentary-span-title">{{ trans('home.van-h2-span') }}</span></h3>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/q4v1rXmXt98"
                        title="Van-Vihar-National-Park-And-Zoo" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Start Uniqueness of Vanvihar Section -->
    <section class="bg-recent-project">
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="recent-project">
                <div class="section-header">
                    <h2>{{ trans('home.uniqueness-h2') }}</h2>
                    <p>{{ trans('home.uniqueness-p') }}</p>
                </div>
                <!-- .section-header -->

                <div id="filters" class="button-group ">
                    <button class="button is-checked" data-filter="*">{{ trans('home.btn-1') }}</button>
                    <button class="button" data-filter=".cat-1">{{ trans('home.btn-2') }}</button>
                    <button class="button" data-filter=".cat-2">{{ trans('home.btn-3') }}</button>
                    <button class="button" data-filter=".cat-3">{{ trans('home.btn-4') }}</button>
                    <button class="button" data-filter=".cat-4">{{ trans('home.btn-5') }}</button>
                    <button class="button" data-filter=".cat-5">{{ trans('home.btn-6') }}</button>
                    <button class="button" data-filter=".cat-6">{{ trans('home.btn-7') }}</button>
                    <button class="button" data-filter=".cat-7">{{ trans('home.btn-8') }}</button>
                    <button class="button" data-filter=".cat-8">{{ trans('home.btn-9') }}</button>
                </div>
                <div class="portfolio-items">
                    <div class="item cat-1" data-category="transition">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->

                                <img src="{{ asset('public/assets/images/uniqueness/recent-project-img-1.jpg') }}"
                                    alt="recent-project-img-1">

                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.gallery') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.gallery') }}">{{ trans('home.uniqueness-h4-1') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.gallery') }}">{{ trans('home.uniqueness-p1') }}</a></span>
                                </p>
                                <!-- <p>By : <span><a href="#">Photograp</a></span></p> -->
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <div class="item cat-2 " data-category="metalloid">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->
                                <img src="{{ asset('public/assets/images/uniqueness/recent-project-img-2.jpg') }}"
                                    alt="recent-project-img-2">
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.gallery') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.gallery') }}">{{ trans('home.uniqueness-h4-2') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.gallery') }}">{{ trans('home.uniqueness-p2') }}</a></span>
                                </p>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <div class="item cat-3 " data-category="post-transition">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->
                                <img src="{{ asset('public/assets/images/uniqueness/recent-project-img-3.jpg') }}"
                                    alt="recent-project-img-3">
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.bear') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.bear') }}">{{ trans('home.uniqueness-h4-3') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.bear') }}">{{ trans('home.uniqueness-p3') }}</a></span>
                                </p>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <div class="item cat-4" data-category="post-transition">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->
                                <img src="{{ asset('public/assets/images/uniqueness/recent-project-img-4.jpg') }}"
                                    alt="recent-project-img-4">
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.snake') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.snake') }}">{{ trans('home.uniqueness-h4-4') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.snake') }}">{{ trans('home.uniqueness-p4') }}</a></span>
                                </p>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->
                    <div class="item cat-5" data-category="transition">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->
                                <img src="{{ asset('public/assets/images/uniqueness/recent-project-img-5.jpg') }}"
                                    alt="recent-project-img-5">
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.vulture') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.vulture') }}">{{ trans('home.uniqueness-h4-5') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.vulture') }}">{{ trans('home.uniqueness-p5') }}</a></span>
                                </p>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->
                    <div class="item cat-6" data-category="alkali">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->
                                <img src="{{ asset('public/assets/images/uniqueness/recent-project-img-6.jpg') }}"
                                    alt="recent-project-img-6">
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.gallery') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.gallery') }}">{{ trans('home.uniqueness-h4-6') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.gallery') }}">{{ trans('home.uniqueness-p6') }}</a></span>
                                </p>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <!-- .items -->
                    <div class="item cat-7" data-category="alkali">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->
                                <img src="{{ asset('public/assets/images/uniqueness/Bird_interpretation_center.jpg') }}"
                                    alt="recent-project-img-6">
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.bird') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.bird') }}">{{ trans('home.uniqueness-h4-7') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.bird') }}">{{ trans('home.uniqueness-p7') }}</a></span>
                                </p>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <!-- .items -->
                    <div class="item cat-8" data-category="alkali">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->
                                <img src="{{ asset('public/assets/images/uniqueness/butterfly.jpg') }}"
                                    alt="recent-project-img-6">
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.park') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.park') }}">{{ trans('home.uniqueness-h4-8') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.park') }}">{{ trans('home.uniqueness-p8') }}</a></span>
                                </p>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <!-- .items -->
                    <div class="item cat-9" data-category="alkali">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project"></div>
                                <!-- .overlay-project -->
                                <img src="{{ asset('public/assets/images/uniqueness/wild-cafe.jpg') }}"
                                    alt="recent-project-img-6">
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.cafe') }}"><i
                                                class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.cafe') }}">{{ trans('home.uniqueness-h4-9') }}</a>
                                </h4>
                                <p><span><a
                                            href="{{ route('vvnp.cafe') }}">{{ trans('home.uniqueness-p9') }}</a></span>
                                </p>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->
                </div>
                <!-- .isotope-items -->
            </div>
            <!-- .recent-project -->
            {{-- </div> --}}
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <!-- End Uniqueness of Vanvihar Section -->

    <!-- Counter Section -->
    <div class="fact-counter-wrapper padding ptb-xs-40">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-earth"></i>
                        </div>
                        <span class="counter" data-count="40">0</span>
                        <span>{{ trans('home.span-plus') }}</span>
                        <p>
                            {{ trans('home.counter-1') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-ios-paw"></i>
                        </div>
                        <span class="counter" data-count="1400">0</span>
                        <span>{{ trans('home.span-plus') }}</span>
                        <p>
                            {{ trans('home.counter-2') }} <br />{{ trans('home.counter-2-br') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-android-calendar"></i>
                        </div>
                        <span class="counter" data-count="50">0</span>
                        <span>{{ trans('home.span-plus') }}</span>
                        <p>
                            {{ trans('home.counter-3') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-ios-people"></i>
                        </div>
                        <span class="counter" data-count="6">0</span>
                        <span>{{ trans('home.span-lakh') }}</span>
                        <p>
                            {{ trans('home.counter-4') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End-->

    <!-- Start Attraction & Visitor Section -->
    <section class="bg-recent-project">
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="recent-project">
                <div class="section-header">
                    <h2>{{ trans('home.initiative-h2') }}</h2>
                </div>

                <!-- .section-header -->
                <div class="portfolio-items" style="margin-top: 0px;">
                    <div class="item cat-1" data-category="transition">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project" style="height: 89%!important;"></div>
                                <!-- .overlay-project -->

                                <div class="image-block">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-11.jpg') }}"
                                                alt="recent-project-img-1">
                                        </figure>
                                    </div>
                                </div>

                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.initiatives') }}"
                                            target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.initiatives') }}"
                                        target="_blank">{{ trans('home.attraction-h4-1') }}</a>
                                </h4>
                                <!-- <p>By : <span><a href="#">Photograp</a></span></p> -->
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <div class="item cat-2 " data-category="metalloid">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project" style="height: 89%!important;"></div>
                                <!-- .overlay-project -->

                                <div class="image-block">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-2.jpg') }}"
                                                alt="recent-project-img-2">
                                        </figure>
                                    </div>
                                </div>

                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.initiatives') }}"
                                            target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.initiatives') }}"
                                        target="_blank">{{ trans('home.attraction-h4-2') }}</a>
                                </h4>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <div class="item cat-3 " data-category="post-transition">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project" style="height: 89%!important;"></div>
                                <!-- .overlay-project -->

                                <div class="image-block">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-7.jpg') }}"
                                                alt="recent-project-img-3">
                                        </figure>
                                    </div>
                                </div>
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.initiatives') }}"
                                            target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.initiatives') }}"
                                        target="_blank">{{ trans('home.attraction-h4-3') }}</a>
                                </h4>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->

                    <div class="item cat-2" data-category="post-transition">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project" style="height: 89%!important;"></div>
                                <!-- .overlay-project -->
                                <div class="image-block">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-4.jpg') }}"
                                                alt="recent-project-img-4">
                                        </figure>
                                    </div>
                                </div>
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.initiatives') }}"
                                            target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.initiatives') }}"
                                        target="_blank">{{ trans('home.attraction-h4-4') }}</a>
                                </h4>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->
                    <div class="item cat-4" data-category="transition">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project" style="height: 89%!important;"></div>
                                <!-- .overlay-project -->
                                <div class="image-block">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ asset('public/assets/images/vvnp-initiatives/vvnp-10.jpg') }}"
                                                alt="recent-project-img-5">
                                        </figure>
                                    </div>
                                </div>
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.initiatives') }}"
                                            target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.initiatives') }}"
                                        target="_blank m">{{ trans('home.attraction-h4-5') }}</a>
                                </h4>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->
                    <div class="item cat-1" data-category="alkali">
                        <div class="item-inner">
                            <div class="portfolio-img">
                                <div class="overlay-project" style="height: 89%!important;"></div>
                                <!-- .overlay-project -->
                                <div class="image-block">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ asset('public/assets/images/vvnp-initiatives/birds-watching.jpg') }}"
                                                alt="recent-project-img-6">
                                        </figure>
                                    </div>
                                </div>
                                <ul class="project-link-option">
                                    <li class="project-link"><a href="{{ route('vvnp.initiatives') }}"
                                            target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.portfolio-img -->
                            <div class="recent-project-content">
                                <h4><a href="{{ route('vvnp.initiatives') }}"
                                        target="_blank">{{ trans('home.attraction-h4-6') }}</a>
                                </h4>
                            </div>
                            <!-- .latest-port-content -->
                        </div>
                        <!-- .item-inner -->
                    </div>
                    <!-- .items -->
                </div>
                <!-- .isotope-items -->
            </div>
            <!-- .recent-project -->
            {{-- </div> --}}
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <!-- End Attraction & Visitor Section -->

    <!-- Animal Adoption Section -->
    <div class="dark-bg project-section clearfix">
        <div class="width-25per dark-bg fl">
            <div class=" light-color plr-30 m-height ">
                <div class="block-title mt-60 mb-20">
                    <h2>{{ trans('home.animal-h2') }} <span>{{ trans('home.animal-h2-span') }}</span> </h2>
                </div>

                <div class="block-content">
                    <p class="pt-20 mb-30 text-justify">
                        {{ trans('home.animal-p') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="fl grid tab-respons">
            <div id="project">
                <div class="item">
                    <div class="clearfix bg-area">
                        <div class="image-box">
                            <img class="img-responsive"
                                src="{{ asset('public/assets/images/vvnp-imgs/cause-img-1.jpg') }}" alt="Photo">
                        </div>

                        <div class="content-box">
                            <div class="price-title">
                                <div class="price-left">
                                    <h5>{{ trans('home.animal-h5-1') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-1') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                                <div class="price-right">
                                    <h5>{{ trans('home.animal-h5-2') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-2') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                            </div>

                            <h4>{{ trans('home.animal-h4-1') }}</h4>
                            <p class="text-justify">
                                {{ trans('home.animal-slide-p1') }}
                            </p>
                            <div class="link">
                                <a href="{{ route('vvnp.animal-adoption') }}"
                                    class="btn btn-md btn-color-line">{{ trans('home.know-more') }}</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="item">
                    <div class="clearfix bg-area">
                        <div class="image-box">
                            <img class="img-responsive"
                                src="{{ asset('public/assets/images/vvnp-imgs/cause-img-2.jpg') }}" alt="Photo">
                        </div>

                        <div class="content-box">
                            <div class="price-title">
                                <div class="price-left">
                                    <h5>{{ trans('home.animal-h5-1') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-3') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                                <div class="price-right">
                                    <h5>{{ trans('home.animal-h5-2') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-4') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                            </div>

                            <h4>{{ trans('home.animal-h4-2') }}</h4>
                            <p class="text-justify">
                                {{ trans('home.animal-slide-p2') }}
                            </p>
                            <div class="link">
                                <a href="{{ route('vvnp.animal-adoption') }}"
                                    class="btn btn-md btn-color-line">{{ trans('home.know-more') }}</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="item">
                    <div class="clearfix bg-area">
                        <div class="image-box">
                            <img class="img-responsive"
                                src="{{ asset('public/assets/images/vvnp-imgs/cause-img-3.jpg') }}" alt="Photo">
                        </div>
                        <div class="content-box">
                            <div class="price-title">
                                <div class="price-left">
                                    <h5>{{ trans('home.animal-h5-1') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-5') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                                <div class="price-right">
                                    <h5>{{ trans('home.animal-h5-2') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-6') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                            </div>

                            <h4>{{ trans('home.animal-h4-3') }}</h4>
                            <p class="text-justify">
                                {{ trans('home.animal-slide-p3') }}
                            </p>
                            <div class="link">
                                <a href="{{ route('vvnp.animal-adoption') }}"
                                    class="btn btn-md btn-color-line">{{ trans('home.know-more') }}</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="item">
                    <div class="clearfix bg-area">
                        <div class="image-box">
                            <img class="img-responsive" src="{{ asset('public/assets/images/vvnp-imgs/hyena.jpg') }}"
                                alt="Photo">
                        </div>
                        <div class="content-box">
                            <div class="price-title">
                                <div class="price-left">
                                    <h5>{{ trans('home.animal-h5-1') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-7') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                                <div class="price-right">
                                    <h5>{{ trans('home.animal-h5-2') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-8') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                            </div>

                            <h4>{{ trans('home.animal-h4-4') }}</h4>
                            <p class="text-justify">
                                {{ trans('home.animal-slide-p4') }}
                            </p>
                            <div class="link">
                                <a href="{{ route('vvnp.animal-adoption') }}"
                                    class="btn btn-md btn-color-line">{{ trans('home.know-more') }}</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="item">
                    <div class="clearfix bg-area">
                        <div class="image-box">
                            <img class="img-responsive"
                                src="{{ asset('public/assets/images/vvnp-imgs/sloth-bear.jpg') }}" alt="Photo">
                        </div>
                        <div class="content-box">
                            <div class="price-title">
                                <div class="price-left">
                                    <h5>{{ trans('home.animal-h5-1') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-9') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                                <div class="price-right">
                                    <h5>{{ trans('home.animal-h5-2') }}<span
                                            class="rupee_font">{{ trans('home.animal-h5-span-10') }}</span></h5>
                                </div>
                                <!-- .price-left -->
                            </div>

                            <h4>{{ trans('home.animal-h4-5') }}</h4>
                            <p class="text-justify">
                                {{ trans('home.animal-slide-p5') }}
                            </p>
                            <div class="link">
                                <a href="{{ route('vvnp.animal-adoption') }}"
                                    class="btn btn-md btn-color-line">{{ trans('home.know-more') }}</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Animal Adoption Section End-->

    <!--Gallery Section -->
    <section class="ptb-60 ptb-xs-40">
        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2><span>{{ trans('home.our') }} </span>{{ trans('home.gallery') }}</h2>
                    <span class="b-line"></span>
                </div>
            </div>

            <div class="row">
                <!-- Post Item -->
                <div class="col-lg-12">
                    <div class="carousel-wrap">
                        <div class="image-block owl-carousel gallery-carousel">
                            @forelse($images as $image)
                                <div class="item image-box">
                                    <figure class="image">
                                        <img src="{{ asset('public/storage/gallery/' . $image->filename) }}">
                                        <div class="overlay-box">
                                            <ul class="option-box">
                                                <li><a href="{{ asset('public/storage/gallery/' . $image->filename) }}"
                                                        class="lightbox-image" data-fancybox="image"><span
                                                            class="fa fa-search"></span></a></li>
                                            </ul>
                                        </div>
                                    </figure>
                                </div>
                            @empty
                                <div class="item image-box">
                                    <figure class="image">
                                        <img src="{{ asset('public/assets/images/Image-Not-Found.jpg') }}" />
                                    </figure>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- End Post Item -->
            </div>
        </div>

        <div class="text-center mt-20">
            <a class="btn-text green-bg hover-text"
                href="{{ route('vvnp.gallery') }}">{{ trans('home.see-more') }}</a>
        </div>
    </section>
    <!--End Gallery Section -->

    <!-- News Section -->
    <section id="blog" class="wow fadeIn ptb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-xs-30 mb-sm-60">
                    <div class="row pb-30 text-center">
                        <div class="col-sm-12 mb-20">
                            <h2><span>{{ trans('home.latest') }} </span>{{ trans('home.news') }}</h2>
                            <span class="b-line"></span>
                        </div>
                    </div>

                    <div class="row">
                        @forelse ($newses as $news)
                            <div class="col-md-6 col-lg-4 mb-xs-30">
                                <div class="image-block blog-post">
                                    <div class="post-media">
                                        <div class="images image-box">
                                            <figure class="image">
                                                @php
                                                    $path = public_path() . '/storage/news_image/' . $news->image;
                                                @endphp

                                                @if (!empty($news['image']) && file_exists($path))
                                                    <img src="{{ asset('public/storage/news_image/' . $news->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('public/assets/images/image-gallery.jpg') }}"
                                                        class="img-responsive rounded" alt="image">
                                                @endif
                                            </figure>
                                        </div>
                                    </div>

                                    {{-- <div class="post-meta">
                                        <span style="color: #333;">by Admin</span>
                                    </div> --}}

                                    <div class="post-header">
                                        <h4><a
                                                href="{{ route('vvnp.news-details', $news->slug) }}">{!! Str::limit($news->title, 40, '...') !!}</a>
                                        </h4>
                                    </div>

                                    <div class="post-entry">
                                        <p class="text-justify">
                                            {!! Str::limit(strip_tags($news->description), 100, '...') !!}
                                        </p>
                                    </div>
                                    <div class="post-more-link pull-left">
                                        <a href="{{ route('vvnp.news-details', $news->slug) }}"
                                            class="btn btn-md btn-color-line ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 pb-4">
                                <div class="p-2 text-center">
                                    <h2>{{ __('home.news-not-found') }}</h2>
                                </div><!-- single-post -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforelse
                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="post-more-link text-center">
                                <a href="{{ route('vvnp.newses') }}"
                                    class="btn btn-md btn-color-line">{{ trans('home.view-all') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Event Section -->
    <section id="testimonial-section" class="faq padding pt-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-xs-30 mb-sm-60">
                    <div class="row pb-30 text-center">
                        <div class="col-sm-12 mb-20">
                            <h2><span>{{ trans('home.latest') }} </span>{{ trans('home.event') }}</h2>
                            <span class="b-line"></span>
                        </div>
                    </div>

                    <div class="row">
                        @forelse ($events as $event)
                            <div class="col-md-6 col-lg-4 mb-xs-30">
                                <div class="image-block blog-post">
                                    <div class="post-media">
                                        <div class="images image-box">
                                            <figure class="image">
                                                @php
                                                    $path = public_path() . '/storage/event_image/' . $event->image;
                                                @endphp

                                                @if (!empty($event['image']) && file_exists($path))
                                                    <img src="{{ asset('public/storage/event_image/' . $event->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('public/assets/images/image-gallery.jpg') }}"
                                                        class="img-responsive rounded" alt="image">
                                                @endif
                                            </figure>
                                        </div>
                                    </div>

                                    {{-- <div class="post-meta">
                                        <span style="color: #333;">by Admin</span>
                                    </div> --}}

                                    <div class="post-header">
                                        <h4><a
                                                href="{{ route('vvnp.event-details', $event->slug) }}">{!! Str::limit($event->title, 60, '...') !!}</a>
                                        </h4>
                                    </div>

                                    <div class="post-entry">
                                        <p class="text-justify">
                                            {!! Str::limit(strip_tags($event->description), 150, '...') !!}
                                        </p>
                                    </div>
                                    <div class="post-more-link pull-left">
                                        <a href="{{ route('vvnp.event-details', $event->slug) }}"
                                            class="btn btn-md btn-color-line ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 pb-4">
                                <div class="p-2 text-center">
                                    <h2>{{ __('home.event-not-found') }}</h2>
                                </div><!-- single-post -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforelse
                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="post-more-link text-center">
                                <a href="{{ route('vvnp.events') }}"
                                    class="btn btn-md btn-color-line ">{{ trans('home.view-all-event') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event Section -->

    <!-- Tender Section -->
    {{-- <div id="blog" class="wow fadeIn ptb-80 gray-bg">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="heading-box ">
                        <h2>{{__('home.tender-heading-1')}}<span>{{__('home.tender-heading-2')}}</span></h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>
            <div class="row mt-10">
                @forelse ($tenders as $tender)
                    @if ($tender->last_date <= Carbon\Carbon::now()->toDateTimeString())
                        <div class="col-lg-12 col-md-12 pb-4 mt-0">
                            <div class="p-2 text-center">
                                <h2>{{__('home.tender-not-found')}}</h2>
                            </div><!-- single-post -->
                        </div><!-- col-lg-4 col-md-6 -->
                    @else
                        <div class="col-md-12 col-lg-4 mb-80">
                            <div class="about-block gray-bg padding-40 clearfix about-box-shadow">
                                <div class="client-avtar">
                                    @if ($tender->file_extension)
                                        @if ($tender->file_extension == 'doc' || $tender->file_extension == 'docx')
                                            <img src="{{asset('public/assets/images/doc-icon/word.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif

                                        @if ($tender->file_extension == 'xls' || $tender->file_extension == 'xlsx')
                                            <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif

                                        @if ($tender->file_extension == 'pdf')
                                            <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif
                                    @endif
                                </div>
                                <div class="text-box">
                                    <div class="box-title">
                                        <h4>{{$tender->title}}</h4>
                                    </div>

                                    <div class="text-content">
                                        <p>
                                            {!! Str::limit($tender->description, 200, '...') !!}
                                        </p>
                                    </div>

                                    <a href="{{ route('str.tender.download', $tender->original_filename) }}" class="btn btn-success" style="background-color: #2d871c; color: #ffffff; border: 2px solid #2d871c;"><i class="fa fa-download" style="margin-right: 4px;"></i>{{__('home.btn-download')}}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-lg-12 col-md-12 pb-4 mt-0">
                        <div class="p-2 text-center">
                            <h2>{{__('home.tender-not-found')}}</h2>
                        </div><!-- single-post -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="post-more-link text-center">
                        <a href="{{ route('str.tenders') }}" class="btn btn-md btn-color-line ">{{ trans('home.view-all-tender') }}</a>
                    </div>
                </div>
            </div>

            <!-- Collape Section End Here -->
        </div>
    </div> --}}
    <!-- End Tender Section -->

    <!-- Documents Section -->
    <div id="blog" class="wow fadeIn ptb-80 gray-bg">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="heading-box ">
                        <h2>{{ __('home.docs-heading-1') }}<span>{{ __('home.docs-heading-2') }}</span></h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>
            <div class="row mt-10">
                @forelse ($docs as $doc)
                    <div class="col-md-12 col-lg-4 mb-80">
                        <div class="about-block gray-bg padding-40 clearfix about-box-shadow">
                            <div class="client-avtar">
                                @if ($doc->file_extension)
                                    @if ($doc->file_extension == 'doc' || $doc->file_extension == 'docx')
                                        <img src="{{ asset('public/assets/images/doc-icon/word.png') }}"
                                            class="img-responsive rounded" alt="doc-image">
                                    @endif

                                    @if ($doc->file_extension == 'pdf')
                                        <img src="{{ asset('public/assets/images/doc-icon/pdf.png') }}"
                                            class="img-responsive rounded" alt="doc-image">
                                    @endif
                                @endif
                            </div>
                            <div class="text-box">
                                <div class="box-title">
                                    <h4>{{ $doc->title }}</h4>
                                </div>

                                <div class="text-content">
                                    <p>
                                        {!! Str::limit($doc->description, 200, '...') !!}
                                    </p>
                                </div>

                                <a href="{{ route('vvnp.docs.download', $doc->original_filename) }}" target="_blank"
                                    class="btn btn-success"
                                    style="background-color: #065e2e; color: #ffffff; border: 2px solid #7db494;"><i
                                        class="fa fa-download"
                                        style="margin-right: 4px;"></i>{{ __('home.btn-download') }}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 pb-4 mt-0">
                        <div class="p-2 text-center">
                            <h2>{{ __('home.docs-not-found') }}</h2>
                        </div><!-- single-post -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="post-more-link text-center">
                        <a href="{{ route('vvnp.docs') }}"
                            class="btn btn-md btn-color-line">{{ trans('home.view-all-docs') }}</a>
                    </div>
                </div>
            </div>

            <!-- Collape Section End Here -->
        </div>
    </div>
    <!-- End Documents Section -->
@endsection

@push('js')
@endpush
