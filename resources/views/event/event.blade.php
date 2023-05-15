@extends('layouts.master')

@section('title', '- Events')

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
            <h1 class="title">{{ trans('navbar.event') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.event') }}
                        </li>

                        {{-- <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.introduction') }}
                        </li> --}}
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
                        @forelse ($events as $event)
                            <div class="col-md-12 blog-post-hr">
                                <div class="blog-post mb-30">

                                    <div class="image-block post-media">
                                        <div class="images image-box">
                                            <figure class="image">
                                                @php
                                                    $path = public_path() . '/storage/event_image/' . $event->image;
                                                @endphp

                                                @if (!empty($event['image']) && file_exists($path))
                                                    <img src="{{ asset('public/storage/event_image/' . $event->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('public/assets/images/' . $event->image) }}"
                                                        class="img-responsive rounded" alt="image">
                                                @endif
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="post-header">
                                        <h2 class="post-title">
                                            <a href="{{ route('vvnp.event-details', $event->slug) }}">{!! Str::limit($event->title, 40, '...') !!}</a>
                                        </h2>
                                    </div>

                                    <div class="post-meta">
                                        <span class="badge badge-pill badge-mix post-date">Posted On: {{ date('d-M-Y', strtotime($event->date)) }}</span>
                                    </div>

                                    <div class="post-entry">
                                        <p class="post-content">
                                            {!! Str::limit($event->description, 300, '...') !!}
                                        </p>
                                    </div>
                                    <div class="post-more-link pull-left">
                                        <a href="{{ route('vvnp.event-details', $event->slug) }}"
                                            class="btn-text">Read More</a>
                                    </div>
                                </div>
                                <hr />
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 pb-4">
                                <div class="card h-100">
                                    <div class="p-2 text-center my-auto">
                                        <h2>{{ __('home.event-not-found') }}</h2>
                                    </div><!-- single-post -->
                                </div><!-- card -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforelse
                    </div>

                    <!-- Pagination Nav -->
                    <div class="pagination-nav text-left mt-60 mtb-xs-30">
                        @if ($events->lastPage() > 1)
                            <ul>
                                @if ($events->onFirstPage())
                                    <li><a class="{{ $events->currentPage() == 1 ? 'disabled' : '' }}"><i
                                                class="fa fa-angle-left"></i></a></li>
                                @else
                                    <li><a href="{{ $events->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                @endif

                                @for ($i = 1; $i <= $events->lastPage(); $i++)
                                    <li>
                                        <a class="{{ $events->currentPage() == $i ? ' active' : '' }}"
                                            href="{{ $events->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                @if ($events->hasMorePages())
                                    <li><a class="{{ $events->currentPage() == $events->lastPage() ? ' disabled' : '' }}"
                                            href="{{ $events->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                @else
                                    <li><a><i class="fa fa-angle-right"></i></a></li>
                                @endif

                            </ul>
                        @endif
                    </div>
                    <!-- End Pagination Nav -->
                </div>
                <!-- End Post Item -->
            </div>
        </div>
    </section>
    <!-- End Blog Post Section -->
@endsection

@push('js')
    <script src="{{ asset('public/assets/js/loading.js') }}" type="text/javascript"></script>
@endpush
