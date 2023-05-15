@extends('layouts.master')

@section('title', '- Event Detail')

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
                        var cImageSrc = '../../public/assets/images/sprites.gif';

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

    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.event-detail') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.event-detail') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Blog Post Section -->
    <section class="ptb-80 ptb-xs-40">
        <div class="container">
            <div class="row">
                <!-- Post Item -->
                <div class="col-md-12 col-lg-9 mx-auto">
                    <div class="row">
                        <div class="col-md-12 blog-post-hr image-block">
                            <div class="blog-post mb-30">

                                <div class="post-media">
                                    <div class="images image-box">
                                        <figure class="image">
                                            @php
                                                $path = public_path() . '/storage/event_image/' . $eventDetail->image;
                                            @endphp

                                            @if (!empty($eventDetail['image']) && file_exists($path))
                                                <img src="{{ asset('public/storage/event_image/' . $eventDetail->image) }}"
                                                    class="lazy-image owl-lazy" alt="">
                                                <a href="{{ asset('public/storage/event_image/' . $eventDetail->image) }}"
                                                    class="lightbox-image icon" data-fancybox="image"><span
                                                        class="fa fa-search"></span></a>
                                            @else
                                                <img src="{{ asset('public/assets/images/' . $eventDetail->image) }}"
                                                    class="img-responsive rounded" alt="image">
                                            @endif
                                        </figure>
                                    </div>
                                </div>

                                <div class="post-header">
                                    <h2 class="post-title">{{ $eventDetail->title }}</h2>
                                </div>

                                <div class="post-meta">
                                    <span class="badge badge-pill badge-mix post-date">Posted On: {{ date('d-M-Y', strtotime($eventDetail->date)) }}</span>
                                </div>

                                <div class="post-entry">
                                    <p class="post-content">
                                        {!! $eventDetail->description !!}
                                    </p>
                                </div>

                                <hr />

                                <!-- Related Images Start Here -->
                                <div class="carousel-wrap">
                                    <div class="image-block owl-carousel news-carousel">
                                        @if ($eventDetail)
                                            @foreach ($eventDetail->images as $image)
                                                <div class="item image-box">
                                                    <figure class="image">
                                                        <img
                                                            src="{{ asset('public/storage/event_images/' . $image->image) }}">
                                                        <div class="overlay-box">
                                                            <ul class="option-box">
                                                                <li><a href="{{ asset('public/storage/event_images/' . $image->image) }}"
                                                                        class="lightbox-image" data-fancybox="image"><span
                                                                            class="fa fa-search"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </figure>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!-- Related Images End Here -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Post Section -->
@endsection

@push('js')
@endpush
