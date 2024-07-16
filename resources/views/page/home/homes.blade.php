@extends('master.master')
@section('title')
    {{ __($title) }}
@endsection

@section('content')

<main>
    <!-- slideshow content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
            <div class="uk-container uk-position-relative">
                <div class="uk-width-3-4 uk-width-1-2@m uk-position-absolute uk-position-z-index index-overlay">
                    @if (app()->getLocale() == 'zh_TW')
                        <h1 class="overlay-title">
                            <div>
                                {{ __('Get more') }}
                            </div>
                            <div>
                                {{ __('freedom') }}<span class="in-highlight">{{ __('in the markets') }}</span>
                            </div>
                        </h1>
                    @else
                        <h1>
                            {{ __('Get more') }}@if (app()->getLocale() == 'en'){{ ' ' }}@endif<span class="in-highlight">{{ __('freedom') }}</span>@if (app()->getLocale() == 'en'){{ ' ' }}@endif{{ __('in the markets') }}
                        </h1>
                    @endif
                    <p class="uk-text-lead uk-visible@m uk-width-3-4">
                        {{ __('Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account') }}
                    </p>
                    <div class="in-slideshow-button">
                        <a href="#" class="uk-button uk-button-primary uk-border-rounded">{{ __('Open account') }}</a>
                        <a href="{{ route('trading.account_type') }}" class="uk-button uk-button-default uk-border-rounded uk-margin-small-left uk-visible@m">{{ __('Discover account') }}</a>
                    </div>
                    <p style="font-size: 11px;">
                        <span class="uk-text-primary">*</span>{{ __('Trading in Forex/ CFDs is highly speculative and carries a high level of risk.') }}
                    </p>
                </div>
            </div>

            <ul class="uk-slideshow-items" style="background-color: white;">
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-position-center">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/man-checking-stock-market-data-tablet.png') }}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-position-center">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/people-office-analyzing-checking-finance-graphs.png') }}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-position-center">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/successful-smart-caucasian-businessman-walking-stair-trade-stock-with-smartphone-communicate-with-happiness-enthusiastic-modern-office-background.png') }}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-position-center">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/abstract-background-chart-stock-market-generative-ai.png') }}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover slide-nav-btn" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover slide-nav-btn" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
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
    <div class="uk-section in-padding-large-vertical@s in-profit-1" style="background-color: #EFF4FF;">
        <div class="uk-container">
            <div class="uk-grid-divider" data-uk-grid>
                <div class="uk-width-expand@m in-margin-top-20@s">
                    <h2 style="font-size: 28px;">{{ __('Why Choose Mosanes Technologies?') }}</h2>
                    <p>
                        {{ __('Mosanes Technologies is committed to delivering a transparent, secure, and reliable trading environment, where traders can access the world\'s financial markets with ease and confidence.') }}
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
                <div class="uk-flex uk-flex-column uk-flex-middle">
                    <div class="primary-title two-line">
                        {{ __('The advantage of MT') }}@if (app()->getLocale() == 'zh_TW'){{ __('is different from others') }}@endif
                    </div>
                    @if (app()->getLocale() == 'en')
                        <div class="primary-title two-line">{{ __('is different from others') }}</div>
                    @endif
                    <div class="primary-title one-line" style="font-size: 34px;">
                        {{ __('The advantage of MT') }}@if (app()->getLocale() == 'en'){{ ' ' }}@endif{{ __('is different from others') }}
                    </div>

                    <p class="uk-text-lead uk-width-5-6 uk-text-center">{{ __('Elevate your finances with Mosanes Technologies in a secure and cost-effective environment. Our intuitive platform, extensive forex options, and dedicated customer service provide endless opportunities for you.') }}</p>
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
                                            <a href="https://play.google.com/store/apps/details?id=com.spotware.ct&hl=en" class="uk-button in-button-app uk-margin-small-right">
                                                <i class="fab fa-google-play fa-2x"></i>
                                                <span class="wrapper">{{ __('Download from') }}<br><span>Play Store</span></span>
                                            </a>
                                            <a href="https://apps.apple.com/my/app/ctrader/id767428811?platform=iphone" class="uk-button in-button-app">
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
                                                <p class="uk-text-uppercase uk-text-primary uk-text-small uk-margin-remove-top">{{ __('Trades Opened at MT') }}</p>
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
                <div class="">
                    <h2 style="padding-left: 0.5rem; padding-right: 0.5rem;">{{ __('We are committed to meeting your CFD and FX trading needs') }}</h2>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-small-top" data-uk-grid>
                        <div class="uk-text-center uk-padding-remove">
                            <h1 class="uk-heading-bullet uk-margin-remove">
                                <span class="count" data-counter-end="250">0</span>M+
                            </h1>
                            <p class="uk-heading-bullet" style="color: white; font-size: 20px; font-weight: 600;">
                                {{ __('Trading volume') }}
                            </p>
                        </div>
                        <div class="uk-text-center uk-padding-remove">
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="150">0</span>K+
                            </h1>
                            <p class="uk-heading-bullet" style="color: white; font-size: 20px; font-weight: 600;">
                                {{ __('Premium clients') }}
                            </p>
                        </div>
                        <div class="uk-text-center uk-padding-remove">
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="5">0</span>M+
                            </h1>
                            <p class="uk-heading-bullet" style="color: white; font-size: 20px; font-weight: 600;">
                                {{ __('Daily capital transaction') }}
                            </p>
                        </div>
                        <div class="uk-text-center uk-padding-remove">
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="1">0</span>M+
                            </h1>
                            <p class="uk-heading-bullet" style="color: white; font-size: 20px; font-weight: 600;">
                                {{ __('Referral rebate payout') }}
                            </p>
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
                            <div class="uk-grid-small uk-grid uk-grid-stack">
                                <div class="uk-width-1-1 uk-width-auto@m uk-first-column">
                                    <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand">{{ __('Open Trading Account') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>

@endsection
