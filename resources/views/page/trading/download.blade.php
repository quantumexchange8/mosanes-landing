@extends('master.master')
@section('title')
    {{ __($title) }}
@endsection
@section('content')    

<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-profit-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-right">
                <ul class="uk-breadcrumb">
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb content end -->

<section class="uk-margin-bottom">
    <div class="uk-container uk-container-expand uk-baground-default">
        <div class="uk-text-center">
            <img class="uk-margin-top" src="{{ asset('img/ctrader logo 2.png') }}" alt="" width="300px">
        </div>
        <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
            <div class="uk-grid">
                <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                    <img src="{{ asset('img/ctrader ( download page )-02.png') }}" alt="" class="uk-align-center uk-align-left@l uk-margin-small-top">
                </div>
                <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                    <h2 class="uk-margin-remove-bottom">{{ __('A Powerful Platform cTrader') }}</h2>
                    <p class="uk-text-justify">
                        {{ __('cTrader offers advanced trading, charting and technical analysis tools, as well as cTrader Copy - a versatile copy trading service and, cTrader Automate - and a native algorithmic trading feature with powerful backtesting and optimization tools. The platform is available for the majority of devices, comprising desktop, web, and mobile versions.') }}
                    </p>
                    <div class="uk-margin-auto uk-margin-bottom uk-flex uk-flex-row uk-flex-around">
                        <span class="uk-flex uk-flex-column uk-flex-middle">
                            <a href="#"><img src="{{ asset('img/windows.png') }}" width="45"></a>
                            <span>{{ __('DESKTOP') }}</span>
                        </span>
                        <span class="uk-flex uk-flex-column uk-flex-middle">
                            <a href="#"><img src="{{ asset('img/web.png') }}" width="45"></a>
                            {{ __('WEB') }}
                        </span>
                        <span class="uk-flex uk-flex-column uk-flex-middle">
                            <a href="https://play.google.com/store/apps/details?id=com.spotware.ct&hl=en"><img src="{{ asset('img/android.png') }}" width="45"></a>
                            {{ __('ANDROID') }}
                        </span>
                        <span class="uk-flex uk-flex-column uk-flex-middle">
                            <a href="https://apps.apple.com/my/app/ctrader/id767428811?platform=iphone" style="width:45px; height:45px; text-align:center;"><img src="{{ asset('img/Apple.png') }}" width="38"></a>
                            {{ __('IOS') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding-top:2rem; padding-bottom:2rem;">
    <div class="uk-container">
        <h2 class="uk-text-center uk-text-primary uk-text-capitalize">{{ __('Award-winning platform.') }}</h2>

        <p class="uk-text-center">
            {{ __('Give your clients the trading experience they deserve with our multi-device trading app.') }}
        </p>

        <section class="uk-margin-medium-bottom">
            <div class="uk-container uk-container-expand">
                <div class="uk-container uk-margin-medium-top">
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="uk-container">
                                <div class="uk-grid">
                                    <div class="uk-width-2-2">
                                        <div class="uk-child-width-2-2@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid" data-uk-grid="">
                                            <div class="uk-text-center uk-first-column">
                                                <img class="uk-margin-bottom" src="{{ asset('img/laptop , phone & tablet ( download page )-03.png') }}" alt="">
                                                <h5 class="uk-text-capitalize uk-text-muted uk-text-primary uk-margin-remove-top uk-margin-small-bottom">
                                                    {{ __('Mosanes Technologies windows trader') }}
                                                </h5>
                                                <p class="uk-margin-remove-top">
                                                    {{ __('Trade from your desktop with cTrader, the fastest platform now on the market.') }}
                                                </p>
                                            </div>
                                            <div class="uk-text-center">
                                                <img class="uk-margin-bottom" src="{{ asset('img/laptop , phone & tablet ( download page )-04.png') }}" alt="">
                                                <h5 class="uk-text-capitalize uk-text-muted uk-text-primary uk-margin-remove-top uk-margin-small-bottom">
                                                    {{ __('Mosanes Technologies iphone trader') }}
                                                </h5>
                                                <p class="uk-margin-remove-top">
                                                    {{ __('Our advanced cTrader iPhone Trader allows you to place position instantly—-anywhere, anytime.') }}
                                                </p>
                                            </div>
                                            <div class="uk-text-center uk-grid-margin uk-first-column">
                                                <img class="uk-margin-bottom" src="{{ asset('img/laptop , phone & tablet ( download page )-05.png') }}" alt="">
                                                <h5 class="uk-text-capitalize uk-text-muted uk-text-primary uk-margin-remove-top uk-margin-small-bottom">
                                                    {{ __('Mosanes Technologies tablet trader') }}
                                                </h5>
                                                <p class="uk-margin-remove-top">
                                                    {{ __('This tablet native application offers an ideal trading solution with full functionality for traders on the go.') }}
                                                </p>
                                            </div>
                                            <div class="uk-text-center uk-grid-margin">
                                                <img class="uk-margin-bottom" src="{{ asset('img/laptop , phone & tablet ( download page )-06.png') }}" alt="">
                                                <h5 class="uk-text-capitalize uk-text-muted uk-text-primary uk-margin-remove-top uk-margin-small-bottom">
                                                    {{ __('Mosanes Technologies android trader') }}
                                                </h5>
                                                <p class="uk-margin-remove-top">
                                                    {{ __('Enjoy the full cTrader experience on your Android phone or tablet with this native android application.') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection