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
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s in-card-10" data-uk-grid>
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                <div class="uk-width-3-5@m uk-text-center">
                    <div class="uk-margin-remove uk-text-semibold" style="color: #3F3453; font-size: 33px;">
                        {{ __('A') }}@if (app()->getLocale() == 'en'){{ ' ' }}@endif<span class="in-highlight">{{ __('relationship') }}</span>@if (app()->getLocale() == 'en'){{ ' ' }}@endif{{ __('on your terms') }}
                    </div>
                    <p class="uk-text-lead uk-text-muted uk-margin-remove">{{ __('Work with us the way you want.') }}</p>
                    <p>{{ __('Some believe you must choose between an online broker and a wealth management firm. Whether you invest on your own, with an advisor, or a little of both — we can support you.') }}</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green uk-text-center" style="color: white;">
                    <h4 class="uk-margin-top">
                        {{ __('Standard Account') }}
                    </h4>
                    <hr>
                    <p>{{ __('From 1.6 Pips') }}</p>
                    <p>{{ __('Leverage from 1:30 to 1:500') }}</p>
                    <p>{{ __('Individual trading account') }}</p>
                    <p>{{ __('With swap') }}</p>
                    <p>{{ __('More than 200+ trading instruments') }}</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-purple uk-text-center" style="color: white;">
                    <h4 class="uk-margin-top">
                        {{ __('Premium Account') }}
                    </h4>
                    <hr>
                    <p>{{ __('From 1.6 Pips') }}</p>
                    <p>{{ __('Leverage from 1:30 to 1:500') }}</p>
                    <p>{{ __('Without self-trade') }}</p>
                    <p>{{ __('Swap-free') }}</p>
                    <p>{{ __('More than 200+ trading instruments') }}</p>
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
                            <div style="font-size: 18px; font-weight: 600; color: #3F3453;">{{ __('Create and choose the most suitable Account Type Today!') }}</div>
                        </div>
                        <div class="uk-width-auto">
                            <a href="https://user.mosanes.com/register" class="uk-button uk-button-primary uk-border-rounded" href="">{{ __('Sign up now') }}</a>
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