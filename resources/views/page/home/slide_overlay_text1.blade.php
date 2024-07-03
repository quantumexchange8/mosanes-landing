<div class="uk-width-1-2@m">
    <div class="uk-overlay">
        <h1>{{ __('Get more') }}@if (app()->getLocale() == 'en'){{ ' ' }}@endif<span class="in-highlight">{{ __('freedom') }}</span>@if (app()->getLocale() == 'en'){{ ' ' }}@endif{{ __('in the markets.') }}</h1>
        <p class="uk-text-lead uk-visible@m">{{ __('Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account') }}</p>
        <div class="in-slideshow-button">
            <a href="#" class="uk-button uk-button-primary uk-border-rounded">{{ __('Open account') }}</a>
            <a href="{{ route('trading.account_type') }}" class="uk-button uk-button-default uk-border-rounded uk-margin-small-left uk-visible@m">{{ __('Discover account') }}</a>
        </div>
        <p class="uk-text-small"><span class="uk-text-primary">*</span>{{ __('Trading in Forex/ CFDs is highly speculative and carries a high level of risk.') }}</p>
    </div>
</div>