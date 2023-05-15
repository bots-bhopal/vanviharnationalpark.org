<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <li>
                        <a href="{{ route('vvnp.attraction') }}"
                            class="{{ Request::is('tourist/attraction') ? 'active' : '' }}">{{ trans('navbar.attraction') }}</a>
                    </li>

                    <ul class="link blog-link">
                        <li>
                            <a href="{{ route('vvnp.bird') }}"
                                class="{{ Request::is('tourist/bird-interpretation') ? 'active' : '' }}">{{ trans('navbar.bird') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.cafe') }}"
                                class="{{ Request::is('tourist/wild-cafe') ? 'active' : '' }}">{{ trans('navbar.cafe') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.park') }}"
                                class="{{ Request::is('tourist/butterfly-park') ? 'active' : '' }}">{{ trans('navbar.park') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.timing') }}"
                                class="{{ Request::is('tourist/timing') ? 'active' : '' }}">{{ trans('navbar.timings') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.gate-charges') }}"
                                class="{{ Request::is('tourist/gate-charges') ? 'active' : '' }}">{{ trans('navbar.gate') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.display-map') }}"
                                class="{{ Request::is('tourist/display-map') ? 'active' : '' }}">{{ trans('navbar.display-map') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.dos') }}"
                                class="{{ Request::is('tourist/dos') ? 'active' : '' }}"
                                style="text-transform: none;">{{ trans('navbar.dos') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.interactive-events') }}"
                                class="{{ Request::is('tourist/interactive-events') ? 'active' : '' }}">{{ trans('navbar.interactive') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('vvnp.animal-adoption') }}"
                                class="{{ Request::is('tourist/animal-adoption') ? 'active' : '' }}">{{ trans('navbar.animal') }}</a>
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
