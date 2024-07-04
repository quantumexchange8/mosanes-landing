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

<section class="uk-margin-small-top">
    <div class="uk-container">
        <div class="uk-margin-large-buttom">
            <h2 class="uk-margin-small-top uk-margin-remove-bottom uk-text-center uk-text-primary">
                {{ __('Become Our Partner') }}
            </h2>
        </div>
        <p class="uk-text-justify uk-margin-small-bottom">
            {{ __('In Quantum Capital Global (QCG), we offer of partnership for introducing brokers and professional fund managers and who are looking for opportunities to increase revenue and growing their business to another level. Our partnership team will work in-sync with your business to deliver the exceptional service your clients deserve.') }}
            <br>
            {{ __('In addition to delivering the result, you can count on us providing unrivalled support for you and your clients.') }}
        </p>
        <div class="uk-grid uk-margin-medium-top ">
            <div class="uk-width-7-7@l uk-width-7-7@l uk-width-7-7@s ">
            </div>
        </div>
    </div>
</section>

<div class="uk-container uk-container-expand uk-background-default">
    <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h2 class="uk-margin-small-top uk-margin-remove-bottom uk-text-center ">
                    {{ __('What is Introducing Broker (IB)?') }}
                </h2>

                <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-1@s uk-margin-medium-top uk-text-center uk-grid" data-uk-grid="">
                    <div class="uk-first-column"> <img class="uk-border-circle uk-margin-remove-bottom" src="{{ asset('img/( partnership ) Register-01.png') }}" alt="">
                        <h4 class="uk-margin-small-top uk-margin-remove-bottom uk-text-primary">
                            {{ __('Sign up') }}
                        </h4>
                        <br>
                    </div>
                    <div> <img class="uk-border-circle uk-margin-remove-bottom" src="{{ asset('img/( partnership ) - refer-01.png') }}" alt="">
                        <h4 class="uk-margin-small-top uk-margin-remove-bottom uk-text-primary">
                            {{ __('Refer') }}
                        </h4>
                        <br>
                        <br>
                    </div>
                    <div> <img class="uk-border-circle uk-margin-remove-bottom" src="{{ asset('img/( partnership ) - get pay-01.png') }}" alt="">
                        <h4 class="uk-margin-small-top uk-margin-remove-bottom uk-text-primary">
                            {{ __('GetPaid') }}
                        </h4>
                        <br>
                    </div>
                </div>
                <p class="uk-margin-remove-top uk-text-justify">
                    {{ __('Our Introducing Broker (IB) partnership program rewards introducer for referring customers to us and continue to receive commission every time they trade, there are no limits on the number of referred customers or trading volumes. A low barrier to entry combined with attractive volume-based incentive structure makes Quantum Capital Global (QCG) ideal for introducers of all sizes.') }}
                </p>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="uk-container uk-margin-medium-top">
        <div class="uk-grid">
            <div class="uk-width-1-1">

                <h2 class="uk-text-capitalize uk-text-center">
                    {{ __('Why should you partner with us?') }}
                </h2>
                <div class="uk-child-width-2-2@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid" data-uk-grid="">
                    <div class="uk-text-center uk-first-column"> <img class="uk-margin-bottom" src="{{ asset('img/( partnership ) GROW YOUR REVENUE STREAMS-01.png') }}" alt="">
                        <h5 class="uk-text-capitalize uk-text-muted uk-margin-remove-top uk-margin-small-bottom uk-text-primary">
                            {{ __('Grow your revenue streams') }}
                        </h5>
                        <p class="uk-margin-remove-top">
                            {{ __('We reward volume-based incentive and attractive commission to you. As long as your customers continue to trade, you will continue to receive commission.') }}
                        </p>
                    </div>
                    <div class="uk-text-center"> <img class="uk-margin-bottom" src="{{ asset('img/( partnership ) MULTI-CURRENCY DEPOSITS-01.png') }}" alt="">
                        <h5 class="uk-text-capitalize uk-text-muted uk-margin-remove-top uk-margin-small-bottom uk-text-primary">
                            {{ __('Multi-Currency deposits.') }}
                        </h5>
                        <p class="uk-margin-remove-top">
                            {{ __('We accept all the major and local currency deposit providing conveniency for you and your clients anywhere around the world.') }}
                        </p>
                    </div>
                    <div class="uk-text-center uk-grid-margin uk-first-column"> <img class="uk-margin-bottom" src="{{ asset('img/( partnership ) MARKETING AND BUSINESS PLANS SUPPORT-01.png') }}" alt="">
                        <h5 class="uk-text-capitalize uk-text-muted uk-margin-remove-top uk-margin-small-bottom uk-text-primary">
                            {{ __('Marketing and business plans support') }}
                        </h5>
                        <p class="uk-margin-remove-top">
                            {{ __('We provide perks such as sharing our marketing materials and dedicated on-the-fly support for your business growth.') }}
                        </p>
                    </div>
                    <div class="uk-text-center uk-grid-margin"> <img class="uk-margin-bottom" src="{{ asset('img/( Partnership ) EXCLUSIVE PROMOTIONS & LUXURY GIFTS-01.png') }}" alt="">
                        <h5 class="uk-text-capitalize uk-text-muted uk-margin-remove-top uk-margin-small-bottom uk-text-primary">
                            {{ __('Exclusive Promotions & Luxury Gifts') }}
                        </h5>
                        <p class="uk-margin-remove-top">
                            {{ __('Quantum Capital Global (QCG) extends promotion and various attractive gifts to trader. Event such as trading competitions are frequently held, the more you trade, the more rewards are given!') }}
                        </p>
                    </div>
                    <div class="uk-text-center uk-margin-medium-top uk-margin-bottom uk-align-center uk-grid-margin uk-first-column">
                        <a class="uk-button uk-button-default uk-text-capitalize uk-border-rounded" style="font-size:14px;" href="{{ route('company.contact') }}">{{ __('Be Our Introducer partner today!') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection