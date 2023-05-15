@extends('layouts.backend.master')

@section('title', 'Create Language')

@push('css')

@endpush

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.language-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('serveradmin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.language-h1') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content pb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="card card-primary card-outline">
                        <form action="{{ route('serveradmin.language.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="languages">{{ __('panel.language') }}</label>
                                    <input type="hidden" name="name">
                                    <select name="languages" class="form-control @error('languages') is-invalid @enderror">
                                        <option value="">----- {{__('panel.select-language')}} -----</option>
                                        <option value="en_US" lang="en">English (US)</option>
                                        <option value="hi_IN" lang="hi">हिन्दी</option>
                                    </select>
                                    @error('languages')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="direction">{{__('Direction')}}</label>
                                    <select name="direction" class="form-control @error('direction') is-invalid @enderror">
                                        <option value="">----- Select Direction -----</option>
                                        <option value="ltr">{{__('LTR')}}</option>
                                        <option value="rtl">{{__('RTL')}}</option>
                                    </select>
                                    @error('direction')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">{{__('Slug')}}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" readonly name="slug">
                                        @error('slug')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save" style="margin-right: 5px;"></i>{{ __('panel.news-btn-submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $(document).on('change', 'select[name="languages"]', function () {
                var el = $(this);
                var name = el.parent().find('select[name="languages"] option[value="'+el.val()+'"]' ).text();
                el.parent().find('input[name="name"]').val(name);
                var a= el.parent().parent().find('input[name="slug"]').val(el.val());
            });
        });
    </script>
@endpush
