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

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                <div class="uk-width-3-5@m uk-text-center">
                    <h1 class="uk-margin-remove">{{ __('Trade The') }}@if (app()->getLocale() == 'en'){{ ' ' }}@endif<span class="in-highlight">{{ __('World\'s') }}</span>@if (app()->getLocale() == 'en'){{ ' ' }}@endif{{ __('market') }}</h1>
                    <p>{{ __('We offer access to a wide range of asset classes, including FX, metals, stocks and indice.') }}</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/Forex.jpeg') }}" alt="">
                <h4 class="uk-margin-top">
                    {{ __('Forex Pairs') }}
                </h4>
                <p class="uk-margin-remove-top">
                    {{ __('Access 40+ Forex Pairs - Quantum Capital Global (QCG) provides Forex traders access to the most liquid global FX markets. A forex pair, also known as a currency pair, is the quotation of two different currencies traded in the foreign exchange market. In forex trading, currencies are always traded in pairs, with one currency being bought and the other being sold. The two currencies in the pair are referred to as the base currency and the quote currency.') }}
                </p>
            </div>
            <div>
                <img src="{{ asset('img/GOld.jpg') }}" alt="">
                <h4 class="uk-margin-top">
                    {{ __('Precious Metals') }}
                </h4>
                <p class="uk-margin-remove-top">
                    {{ __('Precious metals such as gold, silver, platinum, palladium and copper are immensely popular trading instruments. To trade metals, investors can use various methods such as futures contracts, exchange-traded funds (ETFs), or physical metal purchases. Futures contracts are agreements to buy or sell a specific quantity of a metal at a specific price and date in the future. ETFs allow investors to invest in a basket of metals without holding the physical metal, while physical metal purchases involve buying and storing the metal in a safe place.') }}
                </p>
            </div>
            <div>
                <img src="{{ asset('img/Indice-scaledd.jpg') }}" alt="">
                <h4 class="uk-margin-top">
                    {{ __('Indices') }}
                </h4>
                <p class="uk-margin-remove-top">
                    {{ __('Trade market indices as CFDs with Quantum Capital Global (QCG) and enjoy the flexibility of long trading hours to suit your investment and trading needs. Mini indices are available for more affordable orders. There are various ways to trade indices, including through futures contracts, exchange-traded funds (ETFs), or contracts for difference (CFDs). Futures contracts are agreements to buy or sell an index at a specific price and date in the future, while ETFs allow investors to invest in a basket of stocks or other assets that make up an index. CFDs are contracts between traders and brokers, where traders can speculate on the price movements of an index without actually owning the underlying asset.') }}
                </p>
            </div>
            <div>
                <img src="{{ asset('img/Share-scaled.jpg') }}" alt="">
                <h4 class="uk-margin-top">
                    {{ __('Share') }}
                </h4>
                <p class="uk-margin-remove-top">
                    {{ __('Trade derivatives on the Shares of top performing international companies with low margin requirements and costs. To trade shares, investors can use various methods such as buying and selling individual stocks, investing in mutual funds or exchange-traded funds (ETFs), or trading options contracts. Buying and selling individual stocks involves researching and analyzing the financial health and performance of a company before making a decision to buy or sell its shares. Mutual funds and ETFs allow investors to buy a basket of stocks without the need for individual stock analysis. Options contracts provide the right to buy or sell a stock at a specific price on or before a specific date.') }}
                </p>
            </div>
            <div>
                <img src="{{ asset('img/Crypto-scaledd.jpg') }}" alt="">
                <h4 class="uk-margin-top">
                    {{ __('Cryptocurrencies') }}
                </h4>
                <p class="uk-margin-remove-top">
                    {{ __('Buy, sell and store Bitcoin and other leading cryptos with ease. Examples of cryptocurrencies include Bitcoin, Ethereum, and Litecoin. To trade cryptocurrencies, investors can use various methods such as buying and selling on cryptocurrency exchanges, investing in crypto-related funds, or trading cryptocurrency futures contracts. Buying and selling on cryptocurrency exchanges involves purchasing digital assets with fiat currencies (such as USD, EUR, or JPY) or other cryptocurrencies. Crypto-related funds allow investors to invest in a basket of cryptocurrencies without the need for individual coin analysis. Futures contracts provide the right to buy or sell a cryptocurrency at a specific price on or before a specific date.') }}
                </p>
            </div>
            <div>
                <img src="{{ asset('img/Oil.jpeg') }}" alt="">
                <h4 class="uk-margin-top">
                    {{ __('Oil and Energy') }}
                </h4>
                <p class="uk-margin-remove-top">
                    {{ __('Quantum Capital Global (QCG) offers a range of Energy instruments to its clients all around the world, allowing our traders to trade Crude oil, UK oil, US oil and Natural gas. Exchange-traded funds (ETFs), or contracts for difference (CFDs). Futures contracts are agreements to buy or sell a specified quantity of oil or energy at a specific price and date in the future. ETFs allow investors to invest in a basket of energy stocks or other assets that make up an index, while CFDs allow traders to speculate on the price movements of oil and energy without owning the underlying asset.') }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection