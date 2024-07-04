@extends('master.master')
@section('title')
    {{ __($title) }}
@endsection

@section('content')

<main>
    <!-- slideshow content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
            <ul class="uk-slideshow-items" style="background-color: white;">
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            @include('page.home.slide_overlay_text1')
                            <div class="uk-position-center">
                                <img src="{{ asset('img/in-lazy.svg') }}" data-src="{{ asset('img/man-checking-stock-market-data-tablet.png')    }}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            @include('page.home.slide_overlay_text2')
                            <div class="uk-position-center">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/people-office-analyzing-checking-finance-graphs.png') }}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            @include('page.home.slide_overlay_text1')
                            <div class="uk-position-center">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/successful-smart-caucasian-businessman-walking-stair-trade-stock-with-smartphone-communicate-with-happiness-enthusiastic-modern-office-background.png') }}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            @include('page.home.slide_overlay_text2')
                            <div class="uk-position-center">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/abstract-background-chart-stock-market-generative-ai.png') }}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
            <div class="uk-container in-slideshow-feature uk-visible@m">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m">
                        <div class="uk-child-width-1-4" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <div class="in-icon-wrap small circle uk-box-shadow-small uk-margin-small-right">
                                    <i class="fas fa-drafting-compass"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove">{{ __('Enhanced Tools') }}</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="in-icon-wrap small circle uk-box-shadow-small uk-margin-small-right">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove">{{ __('Trading Guides') }}</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="in-icon-wrap small circle uk-box-shadow-small uk-margin-small-right">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove">{{ __('Fast execution') }}</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="in-icon-wrap small circle uk-box-shadow-small uk-margin-small-right">
                                    <i class="fas fa-percentage"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove">{{ __('0% Commission') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slideshow content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-muted in-padding-large-vertical@s in-profit-1">
        <div class="uk-container">
            <div class="uk-grid-divider" data-uk-grid>
                <div class="uk-width-expand@m in-margin-top-20@s">
                    <h2>{{ __('Why Choose Quantum Capital Global?') }}</h2>
                    <p>
                        {{ __('Quantum Capital Global is committed to delivering a transparent, secure, and reliable trading environment, where traders can access the world\'s financial markets with ease and confidence.') }}
                    </p>
                </div>
                <div class="uk-width-2-3@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-2@m" data-uk-grid>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-icon-1.svg" alt="profit-icon" width="72" height="72" data-uk-img>
                            </div>
                            <div>
                                <p class="uk-text-bold uk-margin-remove">{{ __('Wide Range of Trading Instruments') }}</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-icon-2.svg" alt="profit-icon" width="72" height="72" data-uk-img>
                            </div>
                            <div>
                                <p class="uk-text-bold uk-margin-remove">{{ __('Unparalleled Trading Conditions') }}</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-icon-3.svg" alt="profit-icon" width="72" height="72" data-uk-img>
                            </div>
                            <div>
                                <p class="uk-text-bold uk-margin-remove">{{ __('Globally Licensed & Regulated') }}</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-icon-4.svg" alt="profit-icon" width="72" height="72" data-uk-img>
                            </div>
                            <div>
                                <p class="uk-text-bold uk-margin-remove">{{ __('Committed to Forex Education') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s uk-background-contain in-profit-2" data-src="img/in-profit-decor-3.svg" data-uk-img>
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-text-center">
                    <div class="primary-title">{{ __('The advantage of QCG') }}</div>
                    <div class="primary-title">{{ __('is different from others') }}</div>

                    <p class="uk-text-lead">{{ __('Elevate your finances with Quantum Capital Group in a secure and cost-effective environment. Our intuitive platform, extensive forex options, and dedicated customer service provide endless opportunities for you.') }}</p>
                    <i class="fas fa-chevron-down uk-text-primary"></i>
                </div>
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                        <div>
                            <div class="in-pricing-1">
                                <div class="uk-card uk-card-default uk-box-shadow-medium card-height">
                                    <div class="uk-card-media-top">
                                        <img class="uk-width-1-1 uk-align-center" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-content-1.jpg" width="460" height="368" alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="in-heading-extra in-card-decor-1">
                                            <h2 class="uk-margin-remove-bottom">{{ __('Vision') }}</h2>
                                        </div>
                                        <p class="uk-margin-small-top">{{ __('To become the leading Forex broker in the industry by providing reliable and innovative solutions to our clients, while fostering a culture of transparency, integrity, and exceptional customer service.') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="in-pricing-1">
                                <div class="uk-card uk-card-default uk-box-shadow-medium card-height">
                                    <div class="uk-card-media-top">
                                        <img class="uk-width-1-1 uk-align-center" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-content-2.jpg" width="460" height="368" alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="in-heading-extra in-card-decor-2">
                                            <h2 class="uk-margin-remove-bottom">{{ __('Mission') }}</h2>
                                        </div>
                                        <p class="uk-margin-small-top">{{ __('Our mission is to empower traders worldwide to achieve their financial goals by providing them with access to the Forex market through state-of-the-art trading technology and unparalleled customer support. We strive to create a secure and transparent trading environment, where our clients can trade with confidence and peace of mind.') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="uk-card uk-card-default uk-card-body in-profit-appcard">
                                <div class="uk-child-width-1-2@m" data-uk-grid>
                                    <div>
                                        <div class="uk-flex" data-uk-margin>
                                            <a href="#" class="uk-button in-button-app uk-margin-small-right">
                                                <i class="fab fa-google-play fa-2x"></i>
                                                <span class="wrapper">{{ __('Download from') }}<br><span>Play Store</span></span>
                                            </a>
                                            <a href="#" class="uk-button in-button-app">
                                                <i class="fab fa-apple fa-2x"></i>
                                                <span class="wrapper">{{ __('Download from') }}<br><span>App Store</span></span>
                                            </a>
                                        </div>
                                        <hr>
                                        <p>{{ __('Trade on') }} <span class="uk-text-bold uk-text-primary">{{ __('Mosanes Technology Limited world class platform') }}</span> {{ __('without a doubt.') }}</p>
                                    </div>
                                    <div class="uk-visible@m">
                                        <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-mockup-1.png" width="450" height="203" alt="profit-mockup" data-uk-img>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="uk-grid uk-grid-divider uk-grid-match in-profit-tradestatus" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-auto@m">
                                    <div class="uk-flex uk-flex-left uk-flex-center@m">
                                        <div class="uk-grid uk-grid-small uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrap circle primary-color">
                                                    <i class="fas fa-chart-line fa-2x"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h1 class="uk-margin-remove-bottom">324,978,126</h1>
                                                <p class="uk-text-uppercase uk-text-primary uk-text-small uk-margin-remove-top">{{ __('Trades Opened at QCG') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-width-expand@m uk-flex-middle">
                                    <p class="uk-text-lead">{{ __('Trade & Invest in Stocks, Currencies, Indices, and Commodities (CFDs).') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-secondary uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-profit-3" data-src="img/in-section-profit-3.png" data-uk-img>
        <div class="uk-container uk-margin-small-bottom">
            <div class="uk-grid-large" data-uk-grid>
                <div class="uk-width-1-2@m">
                    <h2>{{ __('We are committed to meeting your CFD and FX trading needs') }}</h2>
                    <p class="uk-text-lead">Excepteur occaeca cupidata non proident fugiat nulla pariatur quasi architecto beatae, sunt in culpa quila officia deserunt mollit anim id est aute laborum.</p>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-small-top" data-uk-grid>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="250">0</span>M+
                            </h1>
                            <p>Lorem ipsum dolor sit odin amet consectetur adipisicing elit.</p>
                        </div>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="90">0</span>%
                            </h1>
                            <p>Lorem ipsum dolor sit odin amet consectetur adipisicing elit.</p>
                        </div>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="131">0</span>M+
                            </h1>
                            <p>Lorem ipsum dolor sit odin amet consectetur adipisicing elit.</p>
                        </div>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="35">0</span>M+
                            </h1>
                            <p>Lorem ipsum dolor sit odin amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-bottom in-offset-bottom-40 in-profit-4">
        <div class="uk-container uk-margin-top">
            <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-5-6@m">
                    <div class="uk-grid uk-flex-middle" data-uk-grid>
                        <div class="uk-width-expand@m">
                            <h2>{{ __('Connect to global capital markets') }}</h2>
                        </div>
                        <div class="uk-width-3-5@m">
                            <p class="uk-text-lead">
                                {{ __('Access 40,000+ trading instruments and professional asset management on award-winning platforms.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-2@s uk-child-width-1-5@m in-profit-stockprice" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-ticker-1.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>1,526.05
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-ticker-2.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>205.37
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-ticker-3.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>267.97
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-ticker-4.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right up">
                                    <i class="fas fa-arrow-up"></i>59,230
                                </span>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-profit-ticker-5.svg" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right up">
                                    <i class="fas fa-arrow-up"></i>78.98
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-5-6@m uk-margin-medium-bottom">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <h4 class="uk-margin-remove-bottom uk-text-primary">{{ __('Ready to trade?') }}</h4>
                            <p class="uk-margin-remove-top">{{ __('Get started with your trading account today.') }}</p>
                        </div>
                        <div class="uk-width-expand@m">
                            <div class="uk-grid-small">
                                <div class="uk-width-1-1 uk-width-auto@m uk-flex" style="gap: 2rem">
                                    <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand">
                                        <a class="uk-text-decoration-none uk-text-center" style="color: white;" href="{{ route('trading.download') }}">{{ __('Download') }}</a>
                                    </button>
                                    <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand">
                                        <a class="uk-text-decoration-none" style="color: white;" href="#">{{ __('Sign up') }}</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-margin-medium-top">
                    <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5406e65db0d04a09e042d5fc" data-businessunit-id="561d886b0000ff0005844fd6" data-style-height="28px" data-style-width="100%" data-theme="light">
                        <a href="https://uk.trustpilot.com/review/pepperstone.com" target="_blank" rel="noopener noreferrer">Trustpilot</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>

@endsection
