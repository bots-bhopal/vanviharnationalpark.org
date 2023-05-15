@extends('layouts.master')

@section('title', 'Van Vihar National Park & Zoo - Page Not Found')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 mx-auto d-block">
                <img src="{{ asset('public/assets/images/errors/404.jpg') }}" class="img-fluid" alt="Page Not Found"
                    style="margin: 60px 0 20px 0;">
            </div>
        </div>
    </div>
@endsection
