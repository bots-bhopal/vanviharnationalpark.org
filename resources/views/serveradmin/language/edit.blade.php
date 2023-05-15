@extends('layouts.backend.master')

@section('title', 'Edit Language')

@push('css')

@endpush

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.edit-language-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('serveradmin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.edit-language-h1') }}</li>
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
                        <form action="{{ route('serveradmin.language.update', $language->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="languages">{{ __('panel.language') }}</label>
                                    <input type="hidden" name="name" value="{{$language->name}}">
                                    <select name="languages" class="form-control @error('languages') is-invalid @enderror">
                                        <option value="">----- {{__('panel.select-language')}} -----</option>
                                        <option @if($language->slug == 'en_US') selected @endif value="en_US">{{__('English (US)')}}</option>
                                        <option @if($language->slug == 'hi_IN') selected @endif value="hi_IN">{{__('हिन्दी')}}</option>
                                    </select>
                                    @error('languages')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="direction">{{__('Direction')}}</label>
                                    <select name="direction" id="edit_direction" class="form-control @error('direction') is-invalid @enderror">
                                        <option value="">----- Select Direction -----</option>
                                        <option @if($language->direction == 'ltr') selected @endif value="ltr">{{__('LTR')}}</option>
                                        <option @if($language->direction == 'rtl') selected @endif value="rtl">{{__('RTL')}}</option>
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
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{$language->slug}}" readonly name="slug">
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
