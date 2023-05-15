@extends('layouts.master')

@section('title', '- Newses')

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
            <h1 class="title">{{ trans('navbar.news') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.news') }}
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
                        @forelse ($newses as $news)
                            <div class="col-md-12 blog-post-hr">
                                <div class="blog-post mb-30">

                                    <div class="image-block post-media">
                                        <div class="images image-box">
                                            <figure class="image">
                                                @php
                                                    $path = public_path() . '/storage/news_image/' . $news->image;
                                                @endphp

                                                @if (!empty($news['image']) && file_exists($path))
                                                    <img src="{{ asset('public/storage/news_image/' . $news->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('public/assets/images/' . $news->image) }}"
                                                        class="img-responsive rounded" alt="image">
                                                @endif
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="post-header">
                                        <h2 class="post-title"><a
                                                href="{{ route('vvnp.news-details', $news->slug) }}">{!! Str::limit($news->title, 100, '...') !!}</a>
                                        </h2>
                                    </div>

                                    <div class="post-meta">
                                        <span class="badge badge-pill badge-mix post-date">Posted On: {{ date('d-M-Y', strtotime($news->date)) }}</span>
                                    </div>

                                    <div class="post-entry">
                                        <p class="post-content">
                                            {!! Str::limit($news->description, 300, '...') !!}
                                        </p>
                                    </div>
                                    <div class="post-more-link pull-left">
                                        <a href="{{ route('vvnp.news-details', $news->slug) }}"
                                            class="btn-text">Read More</a>
                                    </div>
                                </div>
                                <hr />
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 pb-4">
                                <div class="card h-100">
                                    <div class="p-2 text-center my-auto">
                                        <h2>{{ __('home.news-not-found') }}</h2>
                                    </div><!-- single-post -->
                                </div><!-- card -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforelse
                    </div>

                    <!-- Pagination Nav -->
                    <div class="pagination-nav text-left mt-60 mtb-xs-30">
                        @if ($newses->lastPage() > 1)
                            <ul>
                                @if ($newses->onFirstPage())
                                    <li><a class="{{ $newses->currentPage() == 1 ? 'disabled' : '' }}"><i
                                                class="fa fa-angle-left"></i></a></li>
                                @else
                                    <li><a href="{{ $newses->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                @endif

                                @for ($i = 1; $i <= $newses->lastPage(); $i++)
                                    <li>
                                        <a class="{{ $newses->currentPage() == $i ? ' active' : '' }}"
                                            href="{{ $newses->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                @if ($newses->hasMorePages())
                                    <li><a class="{{ $newses->currentPage() == $newses->lastPage() ? ' disabled' : '' }}"
                                            href="{{ $newses->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
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
