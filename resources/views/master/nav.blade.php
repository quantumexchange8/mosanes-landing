<header>
    <div class="uk-section uk-padding-small in-profit-ticker">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                        <ul class="uk-grid-large uk-slider-items uk-child-width-1-3@s uk-child-width-1-6@m uk-text-center" data-uk-grid>
                            <li>
                                <div class="in-icon-wrap small circle up">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                                <div>
                                    XAUUSD <span class="uk-text-success">1478.81</span>
                                </div>
                            </li>
                            <li>
                                <div class="in-icon-wrap small circle down">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div>
                                    GBPUSD <span class="uk-text-danger">1.3191</span>
                                </div>
                            </li>
                            <li>
                                <div class="in-icon-wrap small circle down">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div>
                                    EURUSD <span class="uk-text-danger">1.1159</span>
                                </div>
                            </li>
                            <li>
                                <div class="in-icon-wrap small circle up">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                                <div>
                                    USDJPY <span class="uk-text-success">109.59</span>
                                </div>
                            </li>
                            <li>
                                <div class="in-icon-wrap small circle up">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                                <div>
                                    USDCAD <span class="uk-text-success">1.3172</span>
                                </div>
                            </li>
                            <li>
                                <div class="in-icon-wrap small circle up">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                                <div>
                                    USDCHF <span class="uk-text-success">0.9776</span>
                                </div>
                            </li>
                            <li>
                                <div class="in-icon-wrap small circle down">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div>
                                    AUDUSD <span class="uk-text-danger">0.67064</span>
                                </div>
                            </li>
                            <li>
                                <div class="in-icon-wrap small circle up">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                                <div>
                                    GBPJPY <span class="uk-text-success">141.91</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between">
                    <a class="uk-navbar-item uk-logo" href="{{ route('index') }}">
                        <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/Logo.svg') }}" alt="logo" width="28" height="28" data-uk-img>
                        <span class="logo-text">Mosanes.</span>
                    </a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="{{ route('index') }}">Home</a>
                        <li><a href="#">Trading<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{ route('account_type') }}">Account Type</a></li>
                                    <li><a href="{{ route('products') }}">Products</a></li>
                                    <li><a href="{{ route('download') }}">Download</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('platform') }}">Platform</a>
                        </li>
                        <li><a href="#">Partnership<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{ route('introduction_broker') }}">Introduction Broker (IB)</a></li>
                                    <li><a href="{{ route('regional_country') }}">Regional & Country</a></li>
                                    <li><a href="#">Partner</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Company<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('aml_policy') }}">AML Policy</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right uk-width-auto">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <div>
                            <a href="signin.html" class="uk-button uk-button-link">Login</a>
                            <a href="#" class="uk-button uk-button-link">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>