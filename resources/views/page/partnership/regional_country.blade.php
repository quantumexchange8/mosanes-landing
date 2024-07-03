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

<section class="uk-margin-medium-bottom">
    <div class="uk-container">
        <div></div>
        <p class="uk-text-justify uk-margin-small-bottom">
            {{ __('Partnership with us and leverage off Quantum Capital Global (QCG) brand and products with your local knowledge and connections to start regional &amp; country offices in high growth areas. If you have significant experience of retail forex in any country or region, this is an opportunity to work under our brand, become a partner in the ready business, improve it and let it grow. We can provide the resources you need to take your forex business to the next level.') }}
        </p>
        <div class="uk-grid uk-margin-medium-top ">
            <section class="uk-margin-medium-bottom">
                <div class="uk-container">
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="uk-card uk-card-default uk-card-body">
                                <h2 class="uk-text-center uk-margin-remove-bottom ">
                                    {{ __('Why Become Our Regional / Country Partner?') }}
                                </h2> <br>
                                <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-medium uk-grid" data-uk-grid="">
                                    <div class="uk-first-column">
                                        <div class="uk-panel uk-text-center"> <img class="uk-margin-small-bottom" src="{{ asset('img/( partnership - regional ) CUSTOMIZED SOLUTION-01.png') }}" alt="">
                                            <h5 class="uk-text-capitalize uk-text-muted uk-text-primary uk-margin-remove-top uk-margin-small-bottom">
                                                {{ __('Customized Solution') }}
                                            </h5>
                                            <p class="uk-margin-remove-top">
                                                {{ __('Clients receive a solution customized to them, with their preferred payment methods, tailored account types, and local support in their language.') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-panel uk-text-center"> <img class="uk-margin-small-bottom" src="{{ asset('img/( partnership - regional ) Direct-transparent-01.png') }}" alt="">
                                            <h5 class="uk-text-capitalize uk-text-muted uk-text-primary uk-margin-remove-top uk-margin-small-bottom">
                                                {{ __('Direct & transparent revenue stream') }}
                                            </h5>
                                            <p class="uk-margin-remove-top">
                                                {{ __('Regional/Country Partners receive significant revenue directly related to their efforts and performance') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-panel uk-text-center"> <img class="uk-margin-small-bottom" src="{{ asset('img/( partnership - regional ) full support-01.png') }}" alt="">
                                            <h5 class="uk-text-capitalize uk-text-muted uk-text-primary uk-margin-remove-top uk-margin-small-bottom">
                                                {{ __('Full support') }}
                                            </h5>
                                            <p class="uk-margin-remove-top">
                                                {{ __('Receive strong & robust support and sharing of marketing materials to enhance your local business growth') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-text-center uk-margin-medium-top uk-margin-medium-bottom">
                                    <a class="uk-button uk-button-default uk-text-capitalize uk-border-rounded" style="font-size: 14px;" href="{{ route('company.contact') }}">
                                        {{ __('speak to our expert today') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection