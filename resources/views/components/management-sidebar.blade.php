<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <li>
                        <a href="{{ route('vvnp.admin-body') }}"
                            class="{{ Request::is('management/admin-body') ? 'active' : '' }}">{{ trans('navbar.administrative-body') }}</a>
                    </li>

                    <ul class="link blog-link">
                        <li>
                            <a href="{{ route('vvnp.animal-management') }}"
                                class="{{ Request::is('management/animal-management') ? 'active' : '' }}">{{ trans('navbar.animal-management') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.other-activities') }}"
                                class="{{ Request::is('management/other-activities') ? 'active' : '' }}">{{ trans('navbar.other-activities') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.bear') }}"
                                class="{{ Request::is('management/bear-rescue-center') ? 'active' : '' }}">{{ trans('navbar.bear') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.vulture') }}"
                                class="{{ Request::is('management/vulture-conservation-center') ? 'active' : '' }}">{{ trans('navbar.vulture') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.snake') }}"
                                class="{{ Request::is('management/snake-transit-center') ? 'active' : '' }}">{{ trans('navbar.snake') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.barasingha') }}"
                                class="{{ Request::is('management/barasingha-breeding-center') ? 'active' : '' }}">{{ trans('navbar.barasingha') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.contact') }}"
                                class="{{ Request::is('management/contact') ? 'active' : '' }}">{{ trans('navbar.contact') }}</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>

        {{-- <div class="single-sidebar-widget">
            <div class="sec-title">
                <h2>Download<span> brochure</span></h2>
                <span>Here is some useful documents</span>
            </div>

            <ul class="brochure-btns">
                <li>
                    <a href="BTR.pdf" class="clearfix" target="_blank"><i class="fa fa-file-pdf-o"></i> <span>Download Brochure</span></a>
                </li>
            </ul>
        </div> --}}
    </div>
</div>
