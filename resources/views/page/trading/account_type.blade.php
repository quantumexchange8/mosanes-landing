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
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                <div class="uk-width-3-5@m uk-text-center">
                    <h1 class="uk-margin-remove">{{ __('A') }}@if (app()->getLocale() == 'en'){{ ' ' }}@endif<span class="in-highlight">{{ __('relationship') }}</span>@if (app()->getLocale() == 'en'){{ ' ' }}@endif{{ __('on your terms.') }}
                    </h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-remove">{{ __('Work with us the way you want.') }}</p>
                    <p>{{ __('Some believe you must choose between an online broker and a wealth management firm. Whether you invest on your own, with an advisor, or a little of both — we can support you.') }}</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green uk-text-center">
                    <h4 class="uk-margin-top">
                        {{ __('Standard Account') }}
                    </h4>
                    <hr>
                    <p>{{ __('From 1.6 Pips') }}</p>
                    <p>{{ __('Leverage from 1:30 to 1:500') }}</p>
                    <p>{{ __('With Rebate') }}</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-blue uk-text-center">
                    <h4 class="uk-margin-top">
                        {{ __('ECN Account') }}
                    </h4>
                    <hr>
                    <p>{{ __('0 Pips') }}</p>
                    <p>{{ __('Leverage from 1:30 to 1:500') }}</p>
                    <p>{{ __('With Commission Charges') }}</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-purple uk-text-center">
                    <h4 class="uk-margin-top">
                        {{ __('Swap-Free Account') }}
                    </h4>
                    <hr>
                    <p>{{ __('From 1.6 Pips') }}</p>
                    <p>{{ __('Leverage from 1:30 to 1:500') }}</p>
                    <p>{{ __('With Rebate') }}</p>
                    <p>{{ __('No Overnight') }}</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-navy uk-text-center">
                    <h4 class="uk-margin-top">
                        {{ __('Virtual Account') }}
                    </h4>
                    <hr>
                    <p>{{ __('No Spread') }}</p>
                    <p>{{ __('Leverage Free') }}</p>
                    <p>{{ __('Muslim available') }}</p>
                    <p>{{ __('With Rebate') }}</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-grey uk-text-center">
                    <h4 class="uk-margin-top">
                        {{ __('Social Copy Trade Account') }}
                    </h4>
                    <hr>
                    <p>{{ __('Copy others trade') }}</p>
                    <p>{{ __('No knowledge required') }}</p>
                    <p>{{ __('Choose your favourite trader to copy in the platform') }}</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-orange uk-text-center">
                    <h4 class="uk-margin-top">
                        {{ __('Promotion Account') }}
                    </h4>
                    <hr>
                    <p>{{ __('From 1.6 Pips') }}</p>
                    <p>{{ __('Leverage from 1:30 to 1:500') }}</p>
                    <p>{{ __('With Rebate') }}</p>
                    <p>{{ __('With Extra Credit') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 in-card-16">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                    <div class="uk-grid uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <h3>{{ __('Create and choose the most suitable Account Type Today!') }}</h3>
                        </div>
                        <div class="uk-width-auto">
                            <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('trading.download') }}">{{ __('Download') }}</a>
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