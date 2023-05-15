@extends('layouts.master')

@section('title', '- Gallery')

@push('css')
    <style>
        :root {
            --minimum-width: 300px;
            --ratio: 16/9;
        }

        .image-box {
            height: 250px;
            position: relative;
        }

        .image-box img {
            height: 250px;
        }

        img.lazy-image.loaded {
            background-image: none;
        }

        .image-box img {
            background: rgba(163, 163, 163, 0.23);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(2.7px);
            -webkit-backdrop-filter: blur(2.7px);
            border: 1px solid rgba(163, 163, 163, 0.17);
            aspect-ratio: var(--ratio);
            object-fit: contain;
            width: 100%;
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

    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.gallery') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.gallery') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Work Section -->
    <section id="work" class="padding">
        <div class="container">
            <div class="row container-grid nf-col-3 mb-4">
                @forelse($images as $image)
                    <div class="nf-item branding coffee spacing">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ asset('public/storage/gallery/' . $image->filename) }}" class="lightbox-image"
                                    data-fancybox="products"><img class="lazy-image"
                                        src="{{ asset('public/storage/gallery/' . $image->filename) }}"
                                        alt="{{ $image->original_filename }}"></a>
                            </figure>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center" style="font-weight: 600;">{{ trans('home.gallery-not-found') }}</h2>
                    </div>
                @endforelse
            </div>

            <!-- Pagination Section Start Here -->
            <div class="d-flex justify-content-center">
                {!! $images->links() !!}
            </div>
            <!-- Pagination Section End Here -->
        </div>
    </section>
    <!-- Work Section End -->
@endsection
