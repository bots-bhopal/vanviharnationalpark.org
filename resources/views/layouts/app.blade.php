<!DOCTYPE html>
<html>
<html lang="{{session('locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <title> Vanvihar @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/assets/dist/css/adminlte.min.css') }}">
    <!-- MyStyle -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/mystyle.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav">

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <a href="{{route('admin.dashboard')}}" class="brand-link">
                    <img src="{{ asset('public/assets/images/vanvihar-logo.png') }}" alt="vanvihar-logo" class="img-rounded img-fluid brand-image">
                </a>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                @if (session('locale') == 'en')
                    <!-- User Dropdown Menu -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <span class="nav-link text-dark">Welcome ! {{ Auth::user()->name }}</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-dark text-white" onclick="logout();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                @endif
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <!-- /.content-wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('panel.logout-modal-title') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ __('panel.logout-modal-body') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('panel.logout-modal-btn-cancel') }}</button>
                        <button type="button" class="btn btn-danger" id="logout">{{ __('panel.logout-modal-btn-yes') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Modal -->

        <footer class="main-footer text-center bg-light">
            {{ trans('footer.cpyright') }} ©&nbsp; {{date('Y')}}
            @if (Auth::user()->role->id == '3')
                <strong><a href="{{route('admin.dashboard')}}">{{ trans('navbar.vvnp') }}</a>.</strong>
            @endif
            @if (Auth::user()->role->id == '2')
                <strong><a href="{{route('superadmin.dashboard')}}">{{ trans('navbar.vvnp') }}</a>.</strong>
            @endif
            @if (Auth::user()->role->id == '1')
                <strong><a href="{{route('serveradmin.dashboard')}}">{{ trans('navbar.vvnp') }}</a>.</strong>
            @endif
            &nbsp;{{ trans('footer.copyright') }}
        </footer>

    </div>
    <!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/assets/dist/js/adminlte.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //Alert Hide
        setTimeout(function() {
            $('.alert').slideUp('slow');
        }, 5000);
    });

    // Logout Function
    function logout()
    {
        $("#logoutModal").modal('show');

        document.getElementById("logout").addEventListener("click", function(){
            event.preventDefault();
            document.getElementById('logout-form').submit();
        });
    }
</script>


</body>
</html>
