<!--<meta name="csrf-token" content="{{ csrf_token() }}">-->

<!-- Floating Social Media Icons -->
<div class="social-icons">
    <a href="https://www.facebook.com/VanViharNationalParkOfficialPage" target="_blank" class="facebook"><i
            class="fa fa-facebook-f"></i>Facebook</a>
    <a href="https://www.instagram.com/vanviharnationalpark.bhopal/" target="_blank" class="instagram"><i
            class="fa fa-instagram"></i>Instagram</a>
    <a href="https://twitter.com/van_vihar?s=08" target="_blank" class="twitter"><i
            class="fa fa-twitter"></i>Twitter</a>
</div>

<!-- Login Box -->
{{-- <div class="feedback-box">
    <a onclick="feedbackForm();">
        <i class="fa fa-commenting" aria-hidden="true" style="margin-right: 5px;"></i> {{ trans('home.feedback') }}
    </a>
</div> --}}

<style>
    .main-menu .navigation > li:nth-child(3) > ul > li:first-child > a{
        color: #ffcc00;
        font-weight: 600;
    }

    @media only screen and (max-width: 991px){
        .main-menu .mobile-menu > li:nth-child(3) > ul > li:first-child > a {
            color: #ffcc00!important;
            font-weight: 600;
        }

        .main-menu .mobile-menu > li:nth-child(3) > ul > li:first-child:hover > a {
            color: #ffcc00!important;
            font-weight: 600;
        }
    }
</style>

<!--Start header area-->
<header class="header-area">
    <div class="container-fluid">
        <div class="row pr-lg-5 pl-lg-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="d-flex justify-content-between pt-1 pb-1">
                    <a href="{{ route('vvnp.index') }}" class="my-auto">
                        <img src="{{ asset('public/assets/images/vanvihar-logo.png') }}" alt="vanvihar-logo">
                    </a>

                    <a href="https://forest.mponline.gov.in/" target="_blank">
                        <img src="{{ asset('public/assets/images/safari.png') }}" class="img-fluid pt-1"
                            alt="click-to-book-safari" width="120" height="80">
                        <!-- Image Attribution -->
                        <!-- <div>Icons made by
                            <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
                        </div> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmenu-area">
    <div class="container-fluid">
        <div class="mainmenu-bg">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu navbar-toggleable-md">
                        <div class="navbar-header hidden-lg-up">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- ==========================	Desktop Nav ============================ -->
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li>
                                    <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a style="cursor: default;">{{ trans('navbar.about') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('vvnp.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.vision-mission') }}">{{ trans('navbar.vision') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.history') }}"
                                                class="active">{{ trans('navbar.history') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.timeline') }}"
                                                class="active">{{ trans('navbar.timeline') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.forest') }}">{{ trans('navbar.forest') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.biodiversity') }}">{{ trans('navbar.biodiversity') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a style="cursor: default;">{{ trans('navbar.tourist-information') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('vvnp.animal-adoption') }}" class="linear-wipe">{{ trans('navbar.animal') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.initiatives') }}">{{ trans('navbar.new-initiatives') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.attraction') }}">{{ trans('navbar.attraction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.bird') }}"
                                                class="active">{{ trans('navbar.bird') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.cafe') }}"
                                                class="active">{{ trans('navbar.cafe') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.park') }}"
                                                class="active">{{ trans('navbar.park') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.timing') }}">{{ trans('navbar.timings') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.gate-charges') }}">{{ trans('navbar.gate') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.display-map') }}">{{ trans('navbar.display-map') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.dos') }}"
                                                style="text-transform: none;">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('public/assets/images/docs/Night-Safari-Guidelines.pdf') }}"
                                                target="_blank">{{ trans('navbar.rules') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.interactive-events') }}">{{ trans('navbar.interactive') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a style="cursor: default;">{{ trans('navbar.btr-management') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('vvnp.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.animal-management') }}"
                                                class="active">{{ trans('navbar.animal-management') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.other-activities') }}">{{ trans('navbar.other-activities') }}</a>
                                        </li>

                                        <li>
                                            <a style="cursor: default;">{{ trans('navbar.rescue') }}
                                                <i class="fa fa-chevron-right multi-icon-right" aria-hidden="true"></i>
                                            </a>

                                            <ul class="multi-nav">
                                                <li><a
                                                        href="{{ route('vvnp.bear') }}">{{ trans('navbar.bear') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('vvnp.vulture') }}">{{ trans('navbar.vulture') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('vvnp.snake') }}">{{ trans('navbar.snake') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('vvnp.barasingha') }}">{{ trans('navbar.barasingha') }}</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.contact') }}">{{ trans('navbar.contact') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('vvnp.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a style="cursor: default;">{{ trans('navbar.info-corner') }}</a>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('vvnp.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.events') }}">{{ trans('navbar.event') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a href="{{ route('vvnp.tenders') }}" class="active">{{ trans('navbar.tender') }}</a>
                                        </li> --}}

                                        <li>
                                            <a href="{{ route('vvnp.docs') }}">{{ trans('navbar.docs') }}</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ route('vvnp.docs.download', "Biologistics-Application-for-VVNP.pdf") }}" target="_blank">{{ trans('Biologistics Application For VVNP') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.docs.download', "VVNP-Volunteer-Application-Format.pdf") }}" target="_blank">{{ trans('Volunteer Application Form') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('vvnp.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>

                                <li>
                                    <a href="{{ asset('public/assets/images/docs/FAQs.pdf') }}"
                                        target="_blank">{{ trans('navbar.faqs') }}</a>
                                </li>

                                <li>
                                    <a onclick="feedbackPopup();" style="cursor: pointer;">
                                        {{ trans('home.feedback') }}
                                    </a>

                                    <!--<a href="https://forms.gle/Nw7tR7SvpbmUvApj6" target="_blank" style="cursor: pointer;">-->
                                    <!--    {{ trans('home.feedback') }}-->
                                    <!--</a>-->
                                    <!--<a onclick="feedbackForm();" style="cursor: pointer;">-->
                                    <!--    {{ trans('home.feedback') }}-->
                                    <!--</a>-->
                                </li>

                                {{-- <li>
                                    <a href="{{ route('login') }}" target="_blank" title="Department Login">
                                        <i class="fa fa-user" aria-hidden="true" style="margin-right: 5px;"></i>
                                    </a>
                                </li> --}}

                                {{-- <li>
                                    <a href="{{ asset('public/assets/images/docs/Night-Safari-Guidelines.pdf') }}"
                                        target="_blank">{{ trans('navbar.rules') }}</a>
                                </li> --}}
                            </ul>


                            <!-- ==========================	Mobile Nav ============================ -->
                            <ul class="mobile-menu clearfix">
                                <li>
                                    <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a style="cursor: default;">{{ trans('navbar.about') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('vvnp.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.vision-mission') }}">{{ trans('navbar.vision') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.history') }}"
                                                class="active">{{ trans('navbar.history') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.timeline') }}"
                                                class="active">{{ trans('navbar.timeline') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.forest') }}">{{ trans('navbar.forest') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.biodiversity') }}">{{ trans('navbar.biodiversity') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a style="cursor: default;">{{ trans('navbar.tourist-information') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('vvnp.animal-adoption') }}">{{ trans('navbar.animal') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.initiatives') }}">{{ trans('navbar.new-initiatives') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.attraction') }}">{{ trans('navbar.attraction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.bird') }}"
                                                class="active">{{ trans('navbar.bird') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.cafe') }}"
                                                class="active">{{ trans('navbar.cafe') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.park') }}"
                                                class="active">{{ trans('navbar.park') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.timing') }}">{{ trans('navbar.timings') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.gate-charges') }}">{{ trans('navbar.gate') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.display-map') }}">{{ trans('navbar.display-map') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.dos') }}"
                                                style="text-transform: none;">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('public/assets/images/docs/Night-Safari-Guidelines.pdf') }}"
                                                target="_blank">{{ trans('navbar.rules') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.interactive-events') }}">{{ trans('navbar.interactive') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a style="cursor: default;">{{ trans('navbar.btr-management') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('vvnp.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.animal-management') }}"
                                                class="active">{{ trans('navbar.animal-management') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.other-activities') }}">{{ trans('navbar.other-activities') }}</a>
                                        </li>

                                        <li>
                                            <a style="cursor: default;">{{ trans('navbar.rescue') }}</a>
                                            <span class="submenu-button"></span>

                                            <ul class="multi-nav">
                                                <li><a
                                                        href="{{ route('vvnp.bear') }}">{{ trans('navbar.bear') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('vvnp.vulture') }}">{{ trans('navbar.vulture') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('vvnp.snake') }}">{{ trans('navbar.snake') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('vvnp.barasingha') }}">{{ trans('navbar.barasingha') }}</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('vvnp.contact') }}">{{ trans('navbar.contact') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('vvnp.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a style="cursor: default;">{{ trans('navbar.info-corner') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('vvnp.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vvnp.events') }}">{{ trans('navbar.event') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a href="{{ route('vvnp.tenders') }}" class="active">{{ trans('navbar.tender') }}</a>
                                        </li> --}}

                                        <li>
                                            <a href="{{ route('vvnp.docs') }}">{{ trans('navbar.docs') }}</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ route('vvnp.docs.download', "Biologistics-Application-for-VVNP.pdf") }}" target="_blank">{{ trans('Biologistics Application For VVNP') }}</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ route('vvnp.docs.download', "VVNP-Volunteer-Application-Format.pdf") }}" target="_blank">{{ trans('Volunteer Application Form') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('vvnp.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>

                                <li>
                                    <a href="{{ asset('public/assets/images/docs/FAQs.pdf') }}"
                                        target="_blank">{{ trans('navbar.faqs') }}</a>
                                </li>

                                <li>
                                    <a onclick="feedbackPopup();" style="cursor: pointer;">
                                        {{ trans('home.feedback') }}
                                    </a>

                                    <!--<a href="https://forms.gle/Nw7tR7SvpbmUvApj6" target="_blank" style="cursor: pointer;">-->
                                    <!--    {{ trans('home.feedback') }}-->
                                    <!--</a>-->
                                    <!--<a onclick="feedbackForm();" style="cursor: pointer;">-->
                                    <!--    {{ trans('home.feedback') }}-->
                                    <!--</a>-->
                                </li>

                                {{-- <li>
                                    <a href="{{ route('login') }}" target="_blank" title="Department Login">
                                        <i class="fa fa-user" aria-hidden="true" style="margin-right: 5px;"></i>
                                    </a>
                                </li> --}}

                                {{-- <li>
                                    <a href="{{ asset('public/assets/images/docs/Night-Safari-Guidelines.pdf') }}"
                                        target="_blank">{{ trans('navbar.rules') }}</a>
                                </li> --}}
                            </ul>

                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>

            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content"></div>
                    <div class="link_btn float_right">

                        <ul class="navbar-nav language thm-btn bg-clr1">
                            <!-- Language Dropdown Menu -->
                            <li class="nav-item dropdown">
                                <!-- New Language Switcher -->
                                <a class="nav-link dropdown-toggle hover bdr" data-toggle="dropdown" href="#">
                                    <img src="{{ asset('public/assets/images/icons/google-translate.png') }}"
                                        width="24" height="24" alt="Google-Translate" class="img-fluid">
                                    {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right pt-1 pb-1">
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                                    class="flag-icon flag-icon-{{ $language['flag-icon'] }}"
                                                    style="margin-right: 8px!important"></span>
                                                {{ $language['display'] }}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End mainmenu area-->
<!-- END HEADER -->

<!-- Modal -->
    <div class="modal fade" id="noticeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="exampleModalLabel" style="font-weight: 600;"><i
                            class="fa fa-exclamation-triangle" style="margin-right: 5px;"></i>Important
                        Information</h4>
                </div>
                <div class="modal-body text-justify" style="font-size: 18px;">
                    You are being redirected to a new tab with Van Vihar Feedback form. You may return to the website after filling the form.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="border: none; border-radius: 5px; color: #fff;">Close</button>
                    <a onclick="newWindow();" target="_blank" class="btn btn-success" id="ok" data-bs-dismiss="modal" style="border: none; border-radius: 5px; color: #fff;">OK</a>
                </div>
            </div>
        </div>
    </div>
<!-- /. Modal -->

<!-- Modal -->
<!--<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog modal-dialog-scrollable">-->
<!--        <div class="modal-content" style="border: 0; border-radius: 0;">-->
<!--            <div class="modal-header" style="background: #ffcc00;">-->
<!--                <h5 class="modal-title" id="feedbackModalLabel" style="font-weight: 600;">Contact Us</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->

<!--            <div class="container">-->
<!--                <div class="row mt-3">-->
<!--                    <div class="col-12">-->
<!--                        <div id="msg"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="modal-body">-->
<!--                <form action="{{ route('contact.store') }}">-->
<!--                    <div class="form-group">-->
<!--                        <label for="name">Your Name</label>-->
<!--                        <input type="text" class="form-control" name="name" id="name">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="email">Your Email Address</label>-->
<!--                        <input type="email" class="form-control" name="email" id="email">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="mobile">Your Mobile</label>-->
<!--                        <input type="text" class="form-control" name="mobile" id="mobile">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="message">Feedback/Message</label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <textarea class="form-control" name="message" id="message" cols="60" rows="4"-->
<!--                            style="border: 1px solid #999;"></textarea>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-danger text-white" data-dismiss="modal"-->
<!--                    style="border: none;">Close</button>-->
<!--                <button type="button" class="btn btn-success text-white" id="formSubmit"-->
<!--                    style="border: none;">Submit</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- /. Modal -->

@push('js')
    <script>
        // Redirection Modal
        function feedbackPopup() {
             $('#noticeModal').modal({
                show: true,
                backdrop: 'static',
                keyboard: false
            })
        }

        function newWindow(){
            window.open(
              'https://forms.gle/Nw7tR7SvpbmUvApj6',
              '_blank'
            );
        }

        $('#ok').click(function() {
            $('#noticeModal').modal('hide');
        });


        // Feedback Function
        // function feedbackForm() {
        //     $("#feedbackModal").modal('show');
        // }

        // $(document).ready(function() {
        //     $('#formSubmit').click(function(e) {
        //         e.preventDefault();
        //         $('#formSubmit').attr('disabled', true);

        //         $.ajax({
        //             url: "{{ url('/contact') }}",
        //             type: 'post',
        //             dataType: 'json',
        //             data: {
        //                 _token: "{{ csrf_token() }}",
        //                 name: $('#name').val(),
        //                 email: $('#email').val(),
        //                 mobile: $('#mobile').val(),
        //                 message: $('#message').val(),
        //             },
        //             beforeSend: function() {
        //                 let wait =
        //                     '<div class="alert alert-success mb-0">Please wait.....</div>';
        //                 $('#msg').html(wait);
        //             },
        //             success: function(data) {
        //                 if (data.code == 400) {
        //                     $('#formSubmit').attr('disabled', false);
        //                     let error = '<div class="alert alert-danger mb-0">' + data.msg +
        //                         '</div>';
        //                     $('#msg').html(error);
        //                 }

        //                 if (data.code == 200) {
        //                     $('#formSubmit').attr('disabled', false);
        //                     let success = '<div class="alert alert-success mb-0">' + data.msg +
        //                         '</div>';
        //                     $('#msg').html(success);
        //                     $('#formSubmit').attr('disabled', true);

        //                     setInterval(function() {
        //                         $("#feedbackModal").modal('hide');
        //                         location.href =
        //                             "https://vanviharnationalpark.org";
        //                         $('#formSubmit').attr('disabled', false);
        //                     }, 4000);
        //                 }
        //             }
        //         });

        //         //Alert
        //         setTimeout(function() {
        //             $('.alert').slideUp('slow');
        //         }, 5000);
        //     });
        // });
    </script>
@endpush
