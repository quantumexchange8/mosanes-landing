<footer>
    <div class="uk-section uk-section-secondary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-flex uk-margin-small-top uk-flex-around" data-uk-grid="">
                <div>
                    <h4 class="uk-heading-bullet" style="color: black;">{{ __('Overview') }}</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('index') }}">{{ __('Home') }}</a></li>
                        <li><a href="{{ route('trading.account_type') }}">{{ __('Account Type') }}</a></li>
                        <li><a href="{{ route('trading.products') }}">{{ __('Products') }}</a></li>
                        <li><a href="{{ route('trading.download') }}">{{ __('Download') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet" style="color: black;">cTrader</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('platform') }}">cTrader</a></li>
                        <li><a href="{{ route('partnership.introduction_broker') }}">{{ __('Introduction Broker (IB)') }}</a></li>
                        <li><a href="{{ route('partnership.regional_country') }}">{{ __('Regional & Country Partner') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet" style="color: black;">{{ __('Company') }}</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('company.about') }}">{{ __('About Us') }}</a></li>
                        <li><a href="{{ route('company.contact') }}">{{ __('Contact Us') }}</a></li>
                        <li><a href="{{ route('company.aml_policy') }}">{{ __('AML Policy') }}</a></li>
                    </ul>
                </div>
                <div class="uk-flex-first uk-flex-last@m">
                    <div class="uk-flex uk-flex-middle uk-margin-bottom flex-gap-1">
                        <img src="{{ asset('img/Logo.svg') }}" alt="footer-logo" width="32" height="32" data-uk-img="">
                        <span class="logo-text" style="color: black">{{ __('Mosanes.') }}</span>
                    </div>
                    <ul class="uk-list uk-link-text uk-margin-remove-top">
                        <li><a href="mailto:support@mosanes.com"><i class="fas fa-envelope uk-margin-small-right"></i>support@mosanes.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top uk-margin-small-bottom" data-uk-grid="">
                <div class="uk-width-5-6@m uk-margin-bottom">
                    <div class="footer-warning in-margin-top-20@s">
                        <h5 class="uk-text-small uk-text-uppercase" style="color: black;"><span>{{ __('Risk Warning') }}</span></h5>
                        <p class="uk-text-small">
                            {{ __('Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-flex uk-flex-start flex-gap-1 uk-flex-wrap">
                <div class="copyright-text">© Mosanes. All rights reserved.</div>
                <div>|</div>
                <div>MSB FINTRAC LICENSE NO: 1181007-3</div>
                <div>|</div>
                <div>SVGFSA LICENSE NO: 26789 BC 2022</div>
            </div>
        </div>        
    </div>
</footer>