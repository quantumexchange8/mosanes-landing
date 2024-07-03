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

<div style="background-color: #f4f4f4; padding-bottom: 2rem;">
    <section class="uk-margin-bottom">
        <div class="uk-container">
            <div class="uk-text-center">
                <img class="uk-margin-top" src="{{ asset('img/ctrader logo 2.png') }}" alt="" width="300px">
            </div>
            <p class="uk-text-justify uk-margin-small-bottom">
                {{ __('cTrader is one of the most well-known trading platforms in the world of financial trading. It was developed in 2010 by Andrey Pavlov and Ilya Holeu, founders of Spotware. It\'s a multi-asset CFD and Forex trading platform which provides fast entry and execution, advanced charting tools, order types, level II pricing and more.') }}
            </p>
            <div class="uk-grid uk-margin-medium-top ">
                <div class="uk-width-7-7@l uk-width-7-7@l uk-width-7-7@s ">
                    <div class="uk-margin-large-buttom">
                        <h2 class="uk-margin-small-top uk-margin-remove-bottom uk-text-center">
                            {{ __('Start Your Brokerage Business With cTrader') }}
                        </h2>
                        <p class="uk-text-center">
                            {{ __('cTrader is a complete trading platform solution for Forex and CFD brokers to offer their traders. The platform offers a wide variety of options to accommodate all potential investing preferences.') }}
                        </p>
                    </div>
                    <section>
                        <div class="uk-container">
                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    <div class="uk-card uk-card-default uk-card-body" style="background-color: #fff">
                                        <h2 class="uk-text-center">{{ __('Advantage of cTrader.') }}</h2>
                                        <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid" data-uk-grid="">
                                            <div class="uk-text-center uk-first-column"> <img class="uk-margin-bottom" src="{{ asset('img/( cTrader ) Advanced Trading Platform.png') }}" alt="">
                                                <h5 class="uk-text-capitalize uk-text-muted uk-margin-remove-top uk-margin-small-bottom uk-text-primary">
                                                    {{ __('Advanced Trading Platform') }}
                                                </h5>
                                                <p class="uk-margin-remove-top">
                                                    {{ __('A powerful trading platform designed for more advanced traders in mind, focusing on order execution and charting capabilities.') }}
                                                </p>
                                            </div>
                                            <div class="uk-text-center"> <img class="uk-margin-bottom" src="{{ asset('img/( cTrader ) Ultrafast Order Execution.png') }}" alt="">
                                                <h5 class="uk-text-capitalize uk-text-muted uk-margin-remove-top uk-margin-small-bottom uk-text-primary">
                                                    {{ __('Ultrafast Order Execution') }}
                                                </h5>
                                                <p class="uk-margin-remove-top">
                                                    {{ __('Industry-leading execution time of 0.05 seconds on average') }}
                                                </p>
                                            </div>
                                            <div class="uk-text-center"> <img class="uk-margin-bottom" src="{{ asset('img/( cTrader ) 800+ Instruments To Trade.png') }}" alt="">
                                                <h5 class="uk-text-capitalize uk-text-muted uk-margin-remove-top uk-margin-small-bottom uk-text-primary">
                                                    {{ __('800+ Instruments To Trade') }}
                                                </h5>
                                                <p class="uk-margin-remove-top">
                                                    {{ __('Over 800 instruments to choose from covering all markets (FX, shares, indices and commodities)') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h2 class="uk-text-center ">{{ __('Key Feature of cTrader') }}</h2>
        </div>
    </section>

    <section class="uk-margin-medium-bottom">
        <div class="uk-container uk-container-expand uk-background-default">
            <div class="uk-text-center">
                <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                    <div class="uk-grid">
                        <div class="uk-flex uk-flex-column-reverse uk-flex-row@l">
                            <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                                <img src="{{ asset('img/PLATFORM - ctrader - Advanced Charting.png') }}" alt="">
                            </div>
                            <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                                <h2 class="uk-margin-remove-bottom uk-invisible">{{ __('Advanced charting:') }}</h2>
                                <h2 class="uk-margin-remove-bottom uk-text-primary uk-text-capitalize ">
                                    {{ __('Advanced charting:') }}
                                </h2>
                                <p class="uk-text-center">
                                    {{ __('cTrader provides taders with a range of advanced charting tools, including a variety of chart types, multiple timeframes, and over 70 technical indicators. Traders can customize their charts to suit their individual trading style and analyze the markets with ease.') }}
                                </p>
                                <ul class="uk-list uk-margin-bottom idz-platform-icon">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-margin-medium-bottom">
        <div class="uk-container uk-container-expand uk-background-default">
            <div class="uk-text-center">
                <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                    <div class="uk-grid">
                        <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                            <h2 class="uk-margin-remove-bottom uk-invisible">Advanced charting:</h2>
                            <h2 class="uk-margin-remove-bottom uk-text-primary uk-text-capitalize">
                                {{ __('Level II pricing:') }}
                            </h2>
                            <p class="uk-text-center">
                                {{ __('cTrader offers traders access to Level II pricing, which displays the depth of market and enables traders to see the bids and offers available in the market. This helps traders make informed trading decisions and execute trades with precision.') }}
                            </p>
                            <ul class="uk-list uk-margin-bottom idz-platform-icon">
                            </ul>
                        </div>
                        <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                            <img class="uk-align-center uk-align-left@l uk-margin-small-top" src="{{ asset('img/PLATFORM - ctrader - Level II Pricing.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-margin-medium-bottom">
        <div class="uk-container uk-container-expand uk-background-default ">
            <div class="uk-text-center">
                <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                    <div class="uk-grid">
                        <div class="uk-flex uk-flex-column-reverse uk-flex-row@l">
                            <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                                <img class="uk-align-center uk-align-left@l uk-margin-small-top" src="{{ asset('img/PLATFORM - ctrader - Multiple order types.png') }}" alt="">
                            </div>
                            <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                                <h2 class="uk-margin-remove-bottom uk-invisible">Advanced charting:</h2>
                                <h2 class="uk-margin-remove-bottom uk-text-primary uk-text-capitalize">
                                    {{ __('Multiple order types:') }}
                                </h2>
                                <p class="uk-text-center">
                                    {{ __('cTrader offers a range of order types, including limit orders, stop loss orders, and trailing stop orders. This enables traders to manage their risk and execute trades according to their individual trading strategies.') }}
                                </p>
                                <ul class="uk-list uk-margin-bottom idz-platform-icon">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-margin-medium-bottom">
        <div class="uk-container uk-container-expand uk-background-default">
            <div class="uk-text-center">
                <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                    <div class="uk-grid">
                        <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                            <h3 class="uk-margin-remove-bottom uk-invisible ">Level II pricing:</h3>
                            <h2 class="uk-margin-remove-bottom uk-text-primary uk-text-capitalize">
                                {{ __('User-friendly interface:') }}
                            </h2>
                            <p class=" uk-text-center">
                                {{ __('cTrader has a clean and intuitive interface that is easy to navigate, making it suitable for both novice and experienced traders.') }}
                            </p>
                            <ul class="uk-list uk-margin-bottom idz-platform-icon">
                            </ul>
                        </div>
                        <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                            <img class="uk-align-center uk-align-left@l uk-margin-small-top" src="{{ asset('img/PLATFORM - ctrader - User-friendly interface.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-margin-medium-bottom">
        <div class="uk-container uk-container-expand uk-background-default">
            <div class="uk-text-center">
                <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                    <div class="uk-grid">
                        <div class="uk-flex uk-flex-column-reverse uk-flex-row@l">
                            <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                                <img class="uk-align-center uk-align-left@l uk-margin-small-top" src="{{ asset('img/PLATFORM - ctrader - Automated Trading.png') }}" alt="">
                            </div>
                            <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                                <h4 class="uk-margin-remove-bottom uk-invisible">Automated trading: </h4>
                                <h2 class="uk-margin-remove-bottom uk-text-primary uk-text-capitalize">
                                    {{ __('Automated trading') }}
                                </h2>
                                <p class="uk-text-center">
                                    {{ __('cTrader allows traders to automate their trading strategies using cAlgo, which is an integrated algorithmic trading platform. This enables traders to create and backtest their trading strategies and execute them automatically.') }}
                                </p>
                                <ul class="uk-list uk-margin-bottom idz-platform-icon">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-margin-medium-bottom">
        <div class="uk-container">
            <div class="uk-width-1-1 uk-margin-medium-top">
                <div class="uk-card uk-card-default uk-card-body" style="background-color: #fff;">
                    <div class="uk-grid-large uk-flex-middle uk-grid uk-grid-stack" data-uk-grid="">
                        <div class="uk-width-expand@l uk-width-1-1@s uk-first-column">
                            <p class="uk-text-middle">
                                {{ __('Overall, cTrader is a powerful and flexible trading platform that offers traders access to a range of advanced features and tools. Its suitable for traders of all levels and provides a reliable and efficient way to trade the Forex and CFD markets.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection