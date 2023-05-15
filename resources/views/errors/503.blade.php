<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Van Vihar National Park & Zoo - Service Unavailable</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('public/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <style>
        .btn-outline-green {
            width: 200px;
            color: #065E2E !important;
            border-color: #065E2E !important;
            border-radius: 0px;
        }

        .btn-outline-green:hover {
            color: #fff !important;
            background-color: #065E2E !important;
            border-color: #065E2E !important;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 mx-auto d-block">
                <img src="{{ asset('public/assets/images/errors/503.jpg') }}" class="img-fluid"
                    alt="Service Unavailable" style="margin: 40px 0 40px 0;">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{ url('/') }}" class="btn btn-outline-green">Reload <i class="fa fa-refresh"
                        aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/assets/js/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
