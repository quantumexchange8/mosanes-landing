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

<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-text-center">
                        <div class="uk-margin-small-bottom uk-text-semibold two-line" style="font-size: 32px; color: #3F3453;">
                            {{ __('Mosanes Technologies is a') }}
                            <br>
                            <span class="in-highlight@s">
                                {{ __('regulated Forex CFD Provider') }}
                            </span>
                        </div>
                        <div class="uk-margin-small-bottom uk-text-semibold one-line" style="font-size: 30px; color: #3F3453;">
                            {{ __('Mosanes Technologies is a') }}@if (app()->getLocale() == 'en'){{ ' ' }}@endif{{ __('regulated Forex CFD Provider') }}
                        </div>

                        <p class="uk-text-lead uk-text-muted uk-margin-remove-top" style="font-size: 18px;">
                            {{ __('Mosanes Technologies fills to the gap between retail and institutional traders, making the world more tradable for everyone.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" data-uk-parallax="bgy: -100">
                    <div class="uk-card-body">
                        <div class="uk-grid uk-flex uk-flex-center uk-margin-auto">
                            <div class="uk-width-3-4@m uk-text-center">
                                <h2>{{ __('About Us') }}</h2>
                            </div>
                            <div class="uk-margin-top uk-padding-remove">
                                <p class="uk-padding-remove uk-text-justify">
                                    {{ __('Mosanes Technologies (MT) is a global financial and foreign exchange brokerage group established in 2021 by a highly-specialised team with backgrounds in Finance, Crypto and Technology. Created to help clients pursue their financial goals, we proudly offer transparent access to the FOREX market, powerful trading platforms cTrader, exceptional execution speed, and award-winning customer service. Mosanes Technologies (MT) strives to provide transparent and fair access to global Forex markets.') }}
                                </p>
                                <p class="uk-padding-remove uk-text-justify">
                                    {{ __('Given our strong background, we have always been able to offer superior access to global FOREX markets, which is why professional and retail traders are able to notice the remarkable difference between Mosanes Technologies (MT) and other brokers. The diverse range of professional backgrounds and specialized skills across our team has helped Mosanes Technologies (MT) become the award-winning broker it is today. Since Mosanes Technologies (MT) establishment in 2021, the company has continued to grow and expand its horizons with new global offices and a constantly expanding team. This growth is reflected in the consistent development of new and value adding offerings to our clients with unique products, services and business divisions emerging with each new year.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        <div class="in-icon-wrap circle secondary-color">
                            <img src="{{ asset('img/Customer focus.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3>{{ __('Customer focus') }}</h3>
                        <p class="uk-margin-remove-bottom uk-text-justify">
                            {{ __('We put our clients\' needs first and provide them with personalized support and tailored solutions to help them succeed in the markets.') }}
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        <div class="in-icon-wrap circle secondary-color">
                            <img src="{{ asset('img/Integrity-01.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3>{{ __('Integrity') }}</h3>
                        <p class="uk-margin-remove-bottom uk-text-justify">
                            {{ __('We uphold the highest ethical standards in all our interactions with clients, partners, and regulators.') }}
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                    <div class="in-icon-wrap circle secondary-color">
                        <img src="{{ asset('img/inovation.png') }}" alt="">
                    </div>
                    </div>
                    <div>
                        <h3>{{ __('Innovation') }}</h3>
                        <p class="uk-margin-remove-bottom uk-text-justify">
                            {{ __('We constantly seek new and innovative ways to improve our technology, services, and products to meet our clients\' evolving needs.') }}
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                    <div class="in-icon-wrap circle secondary-color">
                        <img src="{{ asset('img/transparency.png') }}" alt="">
                    </div>
                    </div>
                    <div>
                        <h3>{{ __('Transparency') }}</h3>
                        <p class="uk-margin-remove-bottom uk-text-justify">
                            {{ __('We believe in openness and honesty in our business practices and provide clients with complete and accurate information on all aspects of their trading experience.') }}
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                    <div class="in-icon-wrap circle secondary-color">
                        <img src="{{ asset('img/colabration.png') }}" alt="">
                    </div>
                    </div>
                    <div>
                        <h3>{{ __('Collaboration') }}</h3>
                        <p class="uk-margin-remove-bottom uk-text-justify">
                            {{ __('We work as a team, with a shared sense of purpose, to achieve our goals and deliver the best possible service to our clients.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <div class="uk-container uk-container-expand uk-background-default">
        <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
            <div class="uk-flex uk-flex-center flex-gap-3 uk-flex-column uk-flex-row@m uk-child-width-expand">
                <div class="uk-text-justify">
                    <h3 class="uk-margin-remove-bottom uk-text-primary">
                        {{ __('A Global Regulated Broker') }}
                    </h3>
                    <p>
                        {{ __('A licensed regulated broker is a financial services company that operates in the financial markets under the supervision and authorization of a regulatory authority. Authorised and regulated by MSB (FINTRAC) and SVGFSA (Saint Vincent and the Grenadines). The business of a regulated broker involves providing a platform for investors to access various financial instruments, such as stocks, bonds, forex, and commodities.') }}
                        <br>
                    </p>
                    <div class="uk-flex uk-flex-center uk-grid-medium" style="padding-left: 0px;">
                        <div class="uk-flex uk-flex-column uk-flex-middle">
                            <i class="fa fa-3x fa-earth-asia"></i>
                            {{ __('Worldwide') }} 
                        </div>
                        <div class="uk-flex uk-flex-column uk-flex-middle">
                            <i class="fa fa-3x fa-trophy"></i>
                            {{ __('Top broker') }}
                        </div>
                        <div class="uk-flex uk-flex-column uk-flex-middle">
                            <i class="fa fa-3x fa-gavel"></i>
                            {{ __('Regulated') }}
                        </div>
                    </div>
                    <a class="uk-button uk-button-default uk-width-1-1 uk-margin-top uk-margin-bottom uk-border-rounded" href="">
                        {{ __('Sign up now') }}
                    </a>
                </div>

                <div class="two-by-two-grid" >
                    <div class="grid-first" style="width: 44px;">
                        @include('page.company.pdf_icon')
                    </div>
                    <a class="grid-second" target="_blank" href="{{ asset('assets/MSB-FINTRAC.pdf') }}">
                        <div class="uk-text-20 uk-text-semibold">MSB FINTRAC</div>
                    </a>
                    <div class="grid-first" style="width: 44px;">
                        @include('page.company.pdf_icon')
                    </div>
                    <a class="grid-second" target="_blank" href="{{ asset('assets/SVGSFA.pdf') }}">
                        <div class="uk-text-20 uk-text-semibold">SVGSFA</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
