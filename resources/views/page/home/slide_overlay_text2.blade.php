<div class="uk-width-1-2@m">
    <div class="uk-overlay">
        <h1>{{ __('Let top') }}@if (app()->getLocale() == 'en'){{ ' ' }}@endif<span class="in-highlight">{{ __('traders') }}</span>@if (app()->getLocale() == 'en'){{ ' ' }}@endif{{ __('do the job for you!') }}</h1>
        <p class="uk-text-lead uk-visible@m">{{ __('Covesting allows you to automatically copy top performing traders and achieve the returns') }}</p>
        <div class="in-slideshow-button">
            <a href="#" class="uk-button uk-button-primary uk-border-rounded">{{ __('Open account') }}</a>
            <a href="{{ route('trading.download') }}" class="uk-button uk-button-default uk-border-rounded uk-margin-small-left uk-visible@m">{{ __('Discover covesting') }}</a>
        </div>
        <p class="uk-text-small"><span class="uk-text-primary">*</span>{{ __('Trading in Forex/ CFDs is highly speculative and carries a high level of risk.') }}</p>
    </div>
</div>