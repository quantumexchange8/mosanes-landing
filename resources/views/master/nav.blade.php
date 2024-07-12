<header>
    <div data-uk-sticky=" animation: uk-animation-slide-top;">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            {{-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div> --}}
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
            {
                "proName": "FOREXCOM:SPXUSD",
                "title": "S&P 500 Index"
            },
            {
                "proName": "FOREXCOM:NSXUSD",
                "title": "US 100 Cash CFD"
            },
            {
                "proName": "FX_IDC:EURUSD",
                "title": "EUR to USD"
            },
            {
                "proName": "BITSTAMP:BTCUSD",
                "title": "Bitcoin"
            },
            {
                "proName": "BITSTAMP:ETHUSD",
                "title": "Ethereum"
            }
            ],
            "showSymbolLogo": true,
            "isTransparent": false,
            "displayMode": "adaptive",
            "colorTheme": "light",
            "locale": "en"
        }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>

        <div class="uk-flex uk-flex-right uk-container">
            @include('master.language_switcher')
        </div>
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between">
                        <a class="uk-navbar-item uk-logo" href="{{ route('index') }}">
                            <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/Logo.svg') }}" alt="logo" width="32" height="32" data-uk-img>
                            <span class="logo-text">{{ __('Mosanes.') }}</span>
                        </a>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li class="{{ request()->routeIs('index') ? 'uk-active' : '' }}">
                                <a href="{{ route('index') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="{{ request()->routeIs('trading.*') ? 'uk-active' : '' }}">
                                <a href="#">
                                    {{ __('Trading') }}<span data-uk-navbar-parent-icon></span>
                                </a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="{{ request()->routeIs('trading.account_type') ? 'uk-active' : '' }}">
                                            <a href="{{ route('trading.account_type') }}">{{ __('Account Type') }}</a>
                                        </li>
                                        <li class="{{ request()->routeIs('trading.products') ? 'uk-active' : '' }}">
                                            <a href="{{ route('trading.products') }}">{{ __('Products') }}</a>
                                        </li>
                                        <li class="{{ request()->routeIs('trading.download') ? 'uk-active' : '' }}">
                                            <a href="{{ route('trading.download') }}">{{ __('Download') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="{{ request()->routeIs('platform') ? 'uk-active' : '' }}">
                                <a href="{{ route('platform') }}">{{ __('Platform') }}</a>
                            </li>
                            <li class="{{ request()->routeIs('partnership.*') ? 'uk-active' : '' }}">
                                <a href="#">
                                    {{ __('Partnership') }}<span data-uk-navbar-parent-icon></span>
                                </a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="{{ request()->routeIs('partnership.introduction_broker') ? 'uk-active' : '' }}">
                                            <a href="{{ route('partnership.introduction_broker') }}">{{ __('Introduction Broker (IB)') }}</a>
                                        </li>
                                        <li class="{{ request()->routeIs('partnership.regional_country') ? 'uk-active' : '' }}">
                                            <a href="{{ route('partnership.regional_country') }}">{{ __('Regional & Country Partner') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="{{ request()->routeIs('company.*') ? 'uk-active' : '' }}">
                                <a href="#">
                                    {{ __('Company') }}<span data-uk-navbar-parent-icon></span>
                                </a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="{{ request()->routeIs('company.about') ? 'uk-active' : '' }}">
                                            <a href="{{ route('company.about') }}">{{ __('About Us') }}</a>
                                        </li>
                                        <li class="{{ request()->routeIs('company.contact') ? 'uk-active' : '' }}">
                                            <a href="{{ route('company.contact') }}">{{ __('Contact Us') }}</a>
                                        </li>
                                        <li class="{{ request()->routeIs('company.aml_policy') ? 'uk-active' : '' }}">
                                            <a href="{{ route('company.aml_policy') }}">{{ __('AML Policy') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right uk-width-auto">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <div>
                                <a href="#" class="uk-button uk-button-link">{{ __('Login') }}</a>
                                <a href="#" class="uk-button uk-button-link">{{ __('Sign up') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
</header>